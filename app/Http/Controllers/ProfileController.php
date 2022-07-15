<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AbsenModel;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->AbsenModel = new AbsenModel();
        $this->User = new User();
    }
    public function index()
    {
        $data = [
            'user' => $this->User->allData(),
        ];
        return view('layout.profil', $data);
    }

    // add data
    public function add()
    {
        $data = [
            'user' => $this->User->tambah(),
        ];
        return view('layout.addProfil', $data);
    }

    // Save data
    public function simpan()
    {
        Request()->validate([
            'nim' => 'required',
            'name' => 'required',
            'instansi' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'nim' => Request()->nim,
            'name' => Request()->name,
            'instansi' => Request()->instansi,
            'email' => Request()->email,
            'password' => Hash::make('password'),
        ];

        $this->User->addData($data);
        return redirect()->route('profil')->with('pesan', 'Berhasil');
    }

    // edit
    public function edit($id)
    {
        $data = [
            'user' => $this->User->detailData($id),
        ];
        return view('layout.editProfil', $data);
    }

    // update
    public function update($id)
    {
        Request()->validate([
            'nim' => 'required',
            'name' => 'required',
            'instansi' => 'required',
            'email' => 'required',
        ]);

        $data = [
            'nim' => Request()->nim,
            'name' => Request()->name,
            'instansi' => Request()->instansi,
            'email' => Request()->email,
        ];

        $this->User->editData($id, $data);
        return redirect()->route('profil')->with('pesan', 'Profil User telah diperbarui');
    }

    // delete
    public function delete($id)
    {
        $this->User->deleteData($id);
        return redirect()->route('profil')->with('pesan', 'User Berhasil Dihapus');
    }
}
