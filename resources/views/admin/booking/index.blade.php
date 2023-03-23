@extends('master')

@section('title','Customer')

@section('content')
<!-- Page Heading -->

<div class="card mt-4">
    <div class="card-header">
        <h3>View Customer
            <a href="{{url('admin/addBooking')}}" class="btn  btn-primary float-sm-end">Add Booking</a>

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
                <th>Customer Name</th>
                <th>Date</th>
                <th>Table Number</th>
                <th>Arrival Time</th>
                <th>Departure Time</th>
                <th>Contact No</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($booking as $book)
            <tr>
                <!-- <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                        <label class="custom-control-label" for="customCheckBox2"></label>
                    </div>
                </td> -->
                <td>{{$book->id}}</td>
                <td>{{$book->customerName}}</td>
                <td>{{$book->date}}</td>
                <td>{{$book->tableNumber}}</td>
                <td>{{$book->arrivalTime}}</td>
                <td>{{$book->departureTime}}</td>
                <td>{{$book->contact}}</td>
                <td>{{$book->email}}</td>
                <td>
                    <div class="action">
                        <a href="#" class="btn btn-sm bg-success-light mr-2">{{$book->status}}</a>
                    </div>
                </td>


            </tr>
            @endforeach
        </tbody>
    <table>
</div>
@endsection
