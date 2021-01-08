<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesan;
class PemesanController extends Controller
{
    public function index(){
        $pemesan = Pemesan::all();
        return view('admin.pemesan',compact('pemesan'));
    }
}
