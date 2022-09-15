@extends('layouts.app')

@section('content')
    <div id="app">
        <employee-form
            scope="{{ $scope }}"
            :id="{{ $id ?? 0 }}"
        ></employee-form>
    </div>
@endsection
