@extends('master')

@section('title','Booking')

@section('content')
<!-- Page Heading -->

<div class="card mt-4">
    <div class="card-header">
        <h3>Make Your Booking !!
            <a href="" class="btn  btn-primary float-sm-end">Booking</a>

        </h3>
    </div>


        <div id="booking" class="section" style= "margin-left: 20px;">
            <div class="row">
                <div class="booking-form">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        </div>
                    @endif
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form action="{{ url('admin/addBooking')}}" method="Post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name </label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter your Name">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Date">Date </label>
                                    <input class="form-control" name="date" type="date" required>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Date">Table</label>
                                    <select class="form-control" name="table" required>
                                        <option>no of table</option>
                                        <option>1</option>
                                        <option> 2</option>
                                        <option >3</option>
                                        <option >4</option>
                                        <option >5</option>
                                        <option >6</option>
                                        <option >7</option>
                                        <option >8</option>
                                        <option>9</option>
                                        <option>10</option>

                                    </select>
                                    <span class="select-arrow"></span>

                                </div>


                            </div>

                            <div class="row ml-1">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Choose the arrival time:</label><br>
                                        <input type="time" name="arrivaltime" value="{{ old('arrivaltime') }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Choose the departure time:</label>
                                        <input type="time" name="departuretime" value="{{ old('departuretime') }}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contact">Contact No </label>
                                    <input class="form-control" type="phone" name="contact" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Date">Email</label>
                                    <input class="form-control" name="email" type="email" placeholder="Enter your Email">

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <?php
                                    // Define the $booking variable
                                    $booking = [
                                        'status' => 'reserved'
                                    ];
                                    ?>
                                    <select name="status" id="status">
                                        <option value="reserved" {{ $booking['status'] === 'reserved' ? 'selected' : '' }}>Reserved</option>
                                        <option value="unreserved" {{ $booking['status'] === 'unreserved' ? 'selected' : '' }}>Unreserved</option>

                                    </select>
                                </div>
                            </div>
                        </div>



                            <div class="form-btn">
                                <button class="submit btn btn-primary">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</div>
@endsection
