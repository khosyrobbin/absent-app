<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\AbsenModel;
// use Illuminate\Support\Carbon;
use Carbon\Carbon;
use Carbon\Traits\Date;

class TabelController extends Controller
{
    public function __construct()
    {
        $this->AbsenModel = new AbsenModel();
        $this->User = new User();
    }
    public function index()
    {
        $data = [
            'absen' => $this->AbsenModel->allData(),
        ];
        return view('layout.tabel', $data);
    }
    // add data
    public function add(){
        $data = [
            'absen' => $this->AbsenModel->tambah(),
            'user' => $this->User->allData(),
        ];
        return view('layout.addAbsen', $data);
    }

    // Save data
    public function simpan(){
        Request()->validate([
            'id' => 'required',
            'deskripsi' => 'required',
            // 'status' => 'required',
        ]);

        $data = [
            'id' => Request()->id,
            'deskripsi' => Request()->deskripsi,
            // 'status' => Request()->status,
        ];

        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        $mytime = Carbon::now()->format('H:i:s');
        $mydate = Carbon::now();

        // $time['waktu'] = time('H:i:s');
        if (strtotime($mytime) >= strtotime('07:00:00') && strtotime($mytime) <= strtotime('08:30:00')) {
            $data['status'] = 'Masuk';
            $data['tanggal'] = $mydate;
            $data['waktu'] = $mytime;
        } else if (strtotime($mytime) > strtotime('08:30:00') && strtotime($mytime) <= strtotime('17:00:00')){
            $data['status'] = 'Telat';
            $data['tanggal'] = $mydate;
            $data['waktu'] = $mytime;
        } else {
            $data['status'] = 'Alpha';
            $data['tanggal'] = $mydate;
            $data['waktu'] = $mytime;
        }

        $this->AbsenModel->addData($data);
        return redirect()->route('tabel')->with('pesan','Absen Berhasil Ditambahkan');
    }

    // edit
    public function edit($id_absen){
        $data = [
            'absen' => $this->AbsenModel->detailData($id_absen),
        ];
    return view('layout.editAbsen', $data);
    }

    // update
    public function update($id_absen){
        Request()->validate([
            'id' => 'required',
            // 'waktu' => 'required',
            'deskripsi' => 'required',
            // 'status' => 'required',
            // 'tanggal' => 'required',
        ]);

        $data = [
            'id' => Request()->id,
            // 'waktu' => Request()->waktu,
            'deskripsi' => Request()->deskripsi,
            // 'status' => Request()->status,
            // 'tanggal' => Request()->tanggal,
        ];

        $this->AbsenModel->editData($id_absen,$data);
        return redirect()->route('tabel')->with('pesan','Absen telah diperbarui');
    }

    // delete
    public function delete($id_absen){
        $this->AbsenModel->deleteData($id_absen);
        return redirect()->route('tabel')->with('pesan','Absen Berhasil Dihapus');
    }

    // Search data
    public function cari(Request $request){
        // menangkap data pencarian
		$cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $data = [
            'absen' => DB::table('absens')
            ->join('users', 'users.id', '=', 'absens.id')
            ->where('name','like',"%".$cari."%")
            ->orWhere('deskripsi','like',"%".$cari."%")
            ->orWhere('status','like',"%".$cari."%")
            ->get(),
        ];


        // mengirim data pegawai ke view index
        return view('layout.tabel', $data);
    }
}
