<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index(){
        return view('employer.index');
    }

    public function jobseeker()
    {
       return view('employer.jobseeker');
    }

    public function jobform()
    {
       return view('employer.jobform');
    }

    public function approved()
    {
       return view('employer.approve');
    }

    public function rejected()
    {
       return view('employer.reject');
    }

    public function shortlisted()
    {
       return view('employer.shortlisted');
    }

}
