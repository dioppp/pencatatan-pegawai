<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employeeGender = Employee::select('jenis_kelamin', DB::raw('count(*) as total'))
                ->groupBy('jenis_kelamin')
                ->get();

        $employeeAddress = Employee::select('alamat', DB::raw('count(*) as total'))
                ->groupBy('alamat')
                ->get();

        $employeeDepartment = Employee::select('departemen', DB::raw('count(*) as total'))
                ->groupBy('departemen')
                ->get();

        $employeeEducation = Employee::select('pendidikan', DB::raw('count(*) as total'))
                ->groupBy('pendidikan')
                ->get();

        return view('dashboard', compact('employeeGender', 'employeeAddress', 'employeeDepartment', 'employeeEducation'));
    }
}
