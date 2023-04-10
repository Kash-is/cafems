@extends('master')

@section('title','Stock')

@section('content')
<!-- Page Heading -->

<div class="card mt-4">
    <div class="card-header">
        <h3>View Stock
            <a href="" class="btn  btn-primary float-sm-end">Add Stock</a>

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
                <!-- <th>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                        <label class="custom-control-label" for="checkAll"></label>
                    </div>
                </th> -->
                <th>ID</th>
                <th>Product Name</th>
                <th>Quantity</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
