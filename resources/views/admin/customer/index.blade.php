@extends('master')

@section('title','Customer')

@section('content')
<!-- Page Heading -->

<div class="card mt-4">
    <div class="card-header">
        <h3>View Customer 
            <a href="{{url('admin/addCustomer')}}" class="btn  btn-primary float-sm-end">Add Customer</a>

        </h3>
    </div>
</div>

<div class="card-body">
    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <!-- <th>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                        <label class="custom-control-label" for="checkAll"></label>
                    </div>
                </th> -->
                <th>ID</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Action</th>
            </tr>
        </thead>  
        <tbody>
            @foreach($customer as $item)  
            <tr>
                <!-- <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                        <label class="custom-control-label" for="customCheckBox2"></label>
                    </div>
                </td> -->
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->contact}}</td>
                <td>
                    <a href="{{url('admin/editCustomer/'.$item->id)}}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
                    <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></i></a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection





