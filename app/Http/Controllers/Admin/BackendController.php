<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use Session;

class BackendController extends Controller
{
    public function index()
    {
        
        $notification = session()->flash("title", "Hi!", "success", "Logged Successfully");

        return view('backend/index')->with($notification);
    }
    public function categories()
    {
        $notification = array(
            'message' => 'Login Successfully!!',
            'alert-type' => 'success'
        );
        return view('backend/categories')->with($notification);
    }
}
