@extends('master')

@section('title','Customer')

@section('content')
<!-- Page Heading -->

<div class="card mt-4">
    <div class="card-header">
        <h3>View Category
            <a href="{{route('category.create')}}" class="btn  btn-primary float-sm-end">Add Categories</a>

        </h3>
    </div>
</div>

<div class="card-body">
    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <table id="myDataTable" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td><img src="{{(asset('uploads/category/'.$category->image))}}" width="100px" height="100px" alt=""></td>
                <td>
                    <a href="{{url('admin/edit-category/'.$category->id)}}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
                    <a href="{{url('admin/delete-category/'.$category->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
