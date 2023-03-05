@extends('master')

@section('title','Customer')

@section('content')
<!-- Page Heading -->

<div class="card mt-4">
    <div class="card-header">
        <h3>Make Your Booking !!
            <a href="" class="btn  btn-primary float-sm-end">Booking</a>

        </h3>

        <div id="booking" class="section" style= "margin-left: 20px;">
            <div class="row">
                <div class="booking-form">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Name">Name </label>
                                    <input class="form-control" type="text" placeholder="Enter your Name">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Date">Date </label>
                                    <input class="form-control" type="date" required>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Date">Table</label>
                                    <select class="form-control" required>
                                        <option value="" selected hidden>no of table</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select>
                                    <span class="select-arrow"></span>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="Date">Contact No </label>
                                    <input class="form-control" type="phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Date">Email</label>
                                    <input class="form-control" type="email" placeholder="Enter your Email">

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
