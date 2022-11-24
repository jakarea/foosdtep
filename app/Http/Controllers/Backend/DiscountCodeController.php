<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountCodeController extends Controller
{
    public function index()
    {
        return view('backend/pages/discount/p_manage');
    }

    public function create()
    {
        return view('backend/pages/discount/p_create');
    }
}
