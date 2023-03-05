@extends('master')

@section('title','Customer')

@section('content')


<!-- Content Row -->
<div class=" mt-4">
    <h3 class="">Edit Category</h3>


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
    <form action="{{ url('admin/update-customer/'.$customer->id) }}" method="Post"> <!--concadinate with id $customer is variable which is passed in CController -->
        @csrf
        @method('PUT')   <!--Updating the method using method put -->

        <div class="mb-4">
            <label for="">Customer Name</label>
            <input type="text" name="name" value="{{($customer->name)}}" class="form-control" placeholder="" required>
        </div>

        <div class="mb-4">
            <label for="">Contact No</label>
            <input type="text" name="contact" value="{{($customer->contact)}}" class="form-control" placeholder="" required>
        </div>

        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Update Customer</button>
        </div>
    </form>
</div>
@endsection
