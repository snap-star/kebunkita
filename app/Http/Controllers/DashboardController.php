<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{   
    // Halaman login
    function login(){
        return view('dashboard/login/login');
    }

    // Halaman home
    function index(){
        return view('dashboard/index');
    }

    // Halaman tabel ikan
    function settingkolam(){
        return view('dashboard/perikanan/settingkolam');
    }

    //Halaman kebun
    function settingkebun(){
        return view('dashboard/perkebunan/settingkebun');
    }

    //Halaman perdagangan
    function settingbarang(){
        return view('dashboard/perdagangan/settingbarang');
    }

    // Halaman app
    function app(){
        return view('layouts/app');
    }
}