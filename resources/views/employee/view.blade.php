@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Employee #{{ $employee->id }}</h3>
                </div>
                <div class="card-body">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <label for="name" class="">Name</label>
                                <p id="name" class="m-0">
                                    <span class="bg-primary text-white py-1 px-2">{{ $employee->name }}</span>
                                </p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <label for="department" class="">Department</label>
                                <p id="department" class="m-0">
                                    <span class="bg-primary text-white py-1 px-2">{{ $employee->department }}</span>
                                </p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <label for="section" class="">Section</label>
                                <p id="section" class="m-0">
                                    <span class="bg-primary text-white py-1 px-2">{{ $employee->section }}</span>
                                </p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <label for="email" class="">Email</label>
                                <p id="email" class="m-0">
                                    <span class="bg-primary text-white py-1 px-2">{{ $employee->email }}</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
