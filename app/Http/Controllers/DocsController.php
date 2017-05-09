<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DocsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function docs() {
        return view('docs');
    }
}