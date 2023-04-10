@extends('master')

@section('title','Customer')

@section('content')


<!-- Content Row -->
<div class=" mt-4 ml-4">
    <h3 class="">Edit Table</h3>


</div>
<div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif
                                                <!-- concadinate customer to id -->
    <form action="{{ url('admin/update-table/'.$table->id) }}" method="POST"> <!--concadinate with id $customer is variable which is passed in CController -->
        @csrf
        @method('PUT')   <!--Updating the method using method put -->

        <div class="mb-4 col-md-4">
            <label for="">Table Name</label>
            <input type="text" name="tablename" value="{{$table->tablename}}" class="form-control" placeholder="" required>
        </div>

        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Update Table</button>
        </div>
    </form>
</div>
@endsection
