<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }

    public function jobstatus()
    {
        return view('admin.poststatus');
    }

    public function jobseeker()
    {
        return view('admin.jobseeker');
    }

    public function employerlist()
    {
        return view('admin.employerlist');
    }
    public function approvedlist()
    {
        return view('admin.approved');
    }
    public function rejectedlist()
    {
        return view('admin.rejected');
    }

}
