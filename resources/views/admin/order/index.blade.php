
@extends('master')

@section('title','Order')

@section('content')
<!-- Page Heading -->

<div class="card mt-4">
    <div class="card-header">
        <h3>View Order
        <a href="{{url('')}}" class="btn  btn-primary float-sm-end">Add Order</a>

        </h3>
    </div>
</div>

<div class="card-body">
    {{-- @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif --}}

    <table  class="table">
        <thead>
            <tr>
              <th>Order ID</th>
              <th>Table Name</th>
              <th>Staff ID</th>
              <th colspan="3">Item</th>
              <th>Total</th>
              <th>Status</th>
              <th>KOT Status</th>

            </tr>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th>Item Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Discount</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>001</td>
              <td>895</td>
              <td>Pending</td>
              <td>Pizza</td>
              <td>2000</td>
              <td>2</td>
            </tr>
          </tbody>
    </table>
</div>
@endsection






