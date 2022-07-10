<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Absen;
use App\Models\AbsenModel;
use Illuminate\Support\Facades\DB;
use pdf;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        return view('layout.home', $data);
    }

    public function pdf(){
        $data = [
            'absen' => $this->AbsenModel->allData(),
        ];
        return view('layout.pdf',$data);
    }

}
