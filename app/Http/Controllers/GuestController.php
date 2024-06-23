<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('home', compact('employees'));
    }
}
