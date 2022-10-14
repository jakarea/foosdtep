<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        return view('backend/index');
    }
    public function categories()
    {
        return view('backend/categories');
    }
}
