<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\AbsenModel;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->AbsenModel = new AbsenModel();
        $this->User = new User();
    }
}
