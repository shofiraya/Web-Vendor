<?php

// app/Http/Controllers/VendorCompController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorCompController extends Controller
{
    public function dashboard()
    {
        return view('vendorcomp.dashboard');
    }

    public function permintaan()
    {
        return view('vendorcomp.permintaan');
    }

    public function negosiasi()
    {
        return view('vendorcomp.negosiasi');
    }

    public function riwayat()
    {
        return view('vendorcomp.riwayat');
    }
}
