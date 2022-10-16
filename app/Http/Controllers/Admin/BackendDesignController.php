<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendDesignController extends Controller
{
    public function users()
    {
        return view('backend/static-blade/users');
    }
    public function user_add()
    {
        return view('backend/static-blade/user-add');
    }
    public function user_edit()
    {
        return view('backend/static-blade/user-edit');
    }
    public function user_view()
    {
        return view('backend/static-blade/user-profile');
    }

    // discount page methods

    public function discount()
    {
        return view('backend/static-blade/discount');
    }
    public function discount_add()
    {
        return view('backend/static-blade/discount-add');
    }
    public function discount_view()
    {
        return view('backend/static-blade/discount-view');
    }
    public function discount_edit()
    {
        return view('backend/static-blade/discount-edit');
    }

}
