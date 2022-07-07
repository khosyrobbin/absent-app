<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Absen;
use App\Models\AbsenModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->AbsenModel = new AbsenModel();
        $this->User = new User();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'absen' => $this->AbsenModel->allData(),
        ];
        return view('layout.home', $data);
    }

    // // add data
    // public function add(){
    //     $data = [
    //         'absen' => $this->Absen->tambah(),
    //         'user' => $this->User->allData(),
    //     ];
    //     return view('layout.addAbsen', $data);
    // }

    // // Save data
    // public function simpan(){
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

    //     $this->Absen->addData($data);
    //     return redirect()->route('absen')->with('pesan','Absen telah ditambahkan');
    // }

    // // edit
    // public function edit($id_absen){
    //     $data = [
    //         'absen' => $this->Absen->detailData($id_absen),
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
    //     $this->Absen->editData($id_absen,$data);
    //     return redirect()->route('absen')->with('pesan','Absen telah diperbarui');
    // }

    // // delete
    // public function delete($id_absen){
    //     $this->Absen->deleteData($id_absen);
    //     return redirect()->route('absen')->with('pesan','Data Berhasil Dihapus');
    // }

}
