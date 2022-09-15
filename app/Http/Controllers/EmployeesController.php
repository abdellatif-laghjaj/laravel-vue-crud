<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function create()
    {
        $data = [
            'scope' => 'Create',
        ];
        return view('employee.form')->with($data);
    }

    public function store(Request $request)
    {
        $employee = new Employee();

        $employee->name = $request->name;
        $employee->department = $request->department;
        $employee->section = $request->section;
        $employee->email = $request->email;

        $employee->save();

        return redirect('/');
    }

    public function index()
    {
        $employess = Employee::all();

        return response()->json([
            'status' => 'success',
            'employees' => $employess
        ], 200
        );
    }

    public function view(){}
    public function update(){}
    public function delete(){}
}
