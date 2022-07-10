<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AbsenModel extends Model
{
    public function allData()
    {
        return DB::table('absens')
        ->join('users', 'users.id', '=', 'absens.id')
        ->get();
    }
    public function addData($data){
        DB::table('absens')->insert($data);
    }
    public function detailData($id_absen){
        return DB::table('absens')->where('id_absen', $id_absen)
        ->join('users', 'users.id', '=', 'absens.id')
        ->first();

    }
    public function editData($id_absen, $data){
        DB::table('absens')->where('id_absen', $id_absen)->update($data);
    }
    public function deleteData($id_absen){
        DB::table('absens')->where('id_absen', $id_absen)->delete();
    }
    public function tambah(){
        return DB::table('absens')
        ->join('users', 'users.id', '=', 'absens.id')
        ->get();
    }
}
