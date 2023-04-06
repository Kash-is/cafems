@extends('master')

@section('title','Table')

@section('content')
<!-- Page Heading -->

<div class="card mt-4">
    <div class="card-header">
        <h3>View Table
            <a href="{{route('table.create')}}" class="btn  btn-primary float-sm-end">Add Table</a>

        </h3>
    </div>
    <div class="card-body">
        @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <table id="myDataTable" class="table">
            <thead>
                <tr>
                    <th>Table ID</th>
                    <th>Table Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($table as $tables)
                    <tr>
                        <td>{{$tables->id}}</td>
                        <td>{{$tables->tablename}}</td>
                        <td>
                            <a href="{{url('admin/edit-table/'.$tables->id)}}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
                            <a href="{{url('admin/delete-table/'.$tables->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
@endsection
