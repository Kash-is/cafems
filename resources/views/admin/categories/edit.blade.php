@extends('master')

@section('title','Customer')

@section('content')


<!-- Content Row -->
<div class=" mt-4">
    <h3 class="">Edit Categories</h3>


</div>
<div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif

    <form action="{{url('admin/update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="">Name</label>
            <input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="" required>
        </div>

        <div class="mb-4">
            <label for="">Image</label>
            <input type="file" name="image" value="{{$category->image}}" class="form-control img-file" placeholder="" required>
        </div>
        <div class="mb-4">
            <button class="btn btn-primary">Update Category</button>
        </div>
    </form>
</div>

@endsection
