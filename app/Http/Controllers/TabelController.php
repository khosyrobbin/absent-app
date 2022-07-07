<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\AbsenModel;

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
            'waktu' => 'required',
            'deskripsi' => 'required',
            'status' => 'required'
        ]);

        $data = [
            'id' => Request()->id,
            'waktu' => Request()->waktu,
            'deskripsi' => Request()->deskripsi,
            'status' => Request()->status,
        ];

        $this->AbsenModel->addData($data);
        return redirect()->route('tabel');
    }

    // edit
    // public function edit($id_absen){
    //     $data = [
    //         'absen' => $this->AbsenModel->detailData($id_absen),
    //     ];
    // return view('layout.absenEdit', $data);
    // }

    // // update
    // public function update($id_absen){
    //     Request()->validate([
    //         'id' => 'required|unique:absens,id',
    //         'nama' => 'required',
    //         'waktu' => 'required',
    //         'deskripsi' => 'required',
    //         'poin' => 'required',
    //         'status' => 'required',
    //     ]);

    //     $data = [
    //         'id' => Request()->id,
    //         'nama' => Request()->nama,
    //         'waktu' => Request()->waktu,
    //         'deskripsi' => Request()->deskripsi,
    //         'poin' => Request()->poin,
    //         'status' => Request()->status,
    //     ];
    //     $this->AbsenModel->editData($id_absen,$data);
    //     return redirect()->route('absen')->with('pesan','Absen telah diperbarui');
    // }

    // // delete
    // public function delete($id_absen){
    //     $this->AbsenModel->deleteData($id_absen);
    //     return redirect()->route('absen')->with('pesan','Data Berhasil Dihapus');
    // }

}
