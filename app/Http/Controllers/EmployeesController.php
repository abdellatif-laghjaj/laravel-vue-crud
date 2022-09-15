<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function create(){
        $data = [
            'scope' => 'Create',
        ];
        return view('employee.form')->with($data);
    }
}
