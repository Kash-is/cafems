@extends('master')

@section('title','Customer')

@section('content')


<!-- Content Row -->
<div class=" mt-4">
    <h3 class="">Add new Categories</h3>


</div>
<div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif

    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="" required>
        </div>

        <div class="mb-4">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control img-file" placeholder="" required>
        </div>
        <div class="mb-4">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection
