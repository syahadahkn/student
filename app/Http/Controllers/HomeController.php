<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

class HomeController extends Controller
{
     public function home(){
        return view('welcome');
    }
    public function About(){
        return'About Us';
    }
    public function contact(){
        return('Nama : Syahadah Khoirul Nisa <br> Nim : D212011033 <br> Kelas : KA7B <br> Email : syahadahkhoirulnisa@gmail.com');
    }

    public function index()
    {
        $data = DB::table('mahasiswas')->get();
        return view("mahasiswa.index")->with('data' , $data);
    }

}
