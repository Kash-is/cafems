@extends('master')

@section('title','Customer')

@section('content')
<!-- Page Heading -->

<div class="card mt-4">
    <div class="card-header">
        <h3>View Booking
            <a href="{{url('admin/addBooking')}}" class="btn  btn-primary float-sm-end">Add Booking</a>

        </h3>
    </div>
</div>

{{-- <div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text btn btn-primary text-white" id="basic-addon1"><i class="fas fa-calendar-alt" style="color:black;
                        "></i></span>
                    </div>
                    <input type="text" class="form-control" id="datepicker" placeholder="Start Date" readonly>
                </div>
            </div>
        </div>
    </div>

    <div>
        <button id="filter" class="btn btn-primary">Filter</button>
        <button id="reset" class="btn btn-warning">Reset</button>
    </div>
</div> --}}
{{-- </div> --}}

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
                <td>{{$book->name}}</td>
                <td>{{$book->date}}</td>
                <td>{{$book->table}}</td>
                <td>{{$book->arrivaltime}}</td>
                <td>{{$book->departuretime}}</td>
                <td>{{$book->contact}}</td>
                <td>{{$book->email}}</td>
                {{-- <td>
                    <div class="action">
                        @if($book->status ==='reserved')
                            <form method="POST" action="{{ url('change-status/'.$book->id) }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="unreserved">
                                <button type="submit" class="btn btn-sm bg-success mr-2" style="color:white">{{ ucfirst($book->status) }}</button>
                            </form>
                        @elseif($book->status==='unreserved')
                            <form method="POST" action="{{ url('change-status/'.$book->id) }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="reserved">
                                <button type="submit" class="btn btn-sm bg-danger mr-2" style="color:white">{{ ucfirst($book->status) }}</button>
                            </form>
                        @endif
                    </div>
                </td> --}}

                <td>
                    <div class="action">
                        @if($book->status === 'reserved')
                            <a href="#" class="btn btn-sm bg-success mr-2" style="color: white;">{{ ucfirst($book->status) }}</a>
                        @elseif($book->status === 'unreserved')
                            <a href="#" class="btn btn-sm bg-danger mr-2" style="color: white;">{{ ucfirst($book->status) }}</a>
                        @endif
                    </div>
                </td>


                <td>
                    <div class="dropdown ml-auto text-right">
                        <div class="btn-link" data-toggle="dropdown">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('edit.booking', $book->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('delete.booking', $book->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                            {{-- <a href="{{url('admin/deleteBooking/'.$book->id)}}" class="btn btn-danger">Delete</a> --}}

                        </div>
                    </div>
                </td>


            </tr>
            @endforeach
        </tbody>
    <table>


</div>






     

@endsection
