@extends('master')

@section('title','Customer')

@section('content')


<!-- Content Row -->
<div class=" mt-4">
    <h3 class="">Add new Table</h3>


</div>
<div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('table.store')}}" method="Post">
    @csrf

        <div class="mb-4">
            <label for+="">Table Name</label>
            <input type="text" name="tablename" class="form-control" placeholder="" required>
        </div>



        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
