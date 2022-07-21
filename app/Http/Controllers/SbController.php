<?php

namespace App\Http\Controllers;
use App\Models\sb;
use App\Models\staff;
use App\Models\branch;
use Illuminate\Http\Request;

class SbController extends Controller
{
    public function index()
    {
        $sb = sb::all();
        return view('sb.index', compact('sb'));
    }

    public function index2()
    {
        $staff = staff::all();
        return view('sb.index2', compact('staff'));
    }

    public function index3()
    {
        $branch = branch::all();
        return view('sb.index3', compact('branch'));
    }

    public function index4()
    {
        $sb = sb::all();
        $staff = staff::all();
        $branch = branch::all();
        return view('sb.index4', compact('sb', 'staff', 'branch'));
    }
}
