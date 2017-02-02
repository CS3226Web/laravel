<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index() {return view('index'); }
    public function detail($id) {return view('detail')->with('id', $id); }
}
?>
