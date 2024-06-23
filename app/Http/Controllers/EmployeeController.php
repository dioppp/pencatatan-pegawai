<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('employees-images');
            $validatedData['foto'] = $path;
        }
        Employee::create($validatedData);
        return redirect()->route('employees.index')->with('success', 'Employee created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        if ($employee) {
            $employee->update($request->validated());
            return redirect()->route('employees.index')->with('success', 'Employee updated successfully');
        }
        return redirect()->route('employees.index')->with('error', 'Employee not found');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        if ($employee) {
            $employee->delete();
            return redirect()->route('employees.index')->with('success', 'Employee deleted successfully');
        }
        return redirect()->route('employees.index')->with('error', 'Employee not found');
    }
}
