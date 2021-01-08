<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index(){
        $produk = DB::table('table_produk')->count();
        $pemesan = DB::table('table_pemesan')->count();
        return view('admin.dashboard',compact('produk','pemesan'));
    }
}
