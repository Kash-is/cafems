@extends('master')

@section('title','Customer')

@section('content')
<!-- Page Heading -->

<div class="card mt-4">
    <div class="card-header">
        <h3>View Product
            <a href="{{route('product.create')}}" class="btn  btn-primary float-sm-end">Add Product</a>

        </h3>
    </div>
    <div class="card-body">
        @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <table id="myDataTable" class="table">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Buying Price</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($product as $products)
                <tr>
                    <td>{{$products->id}}</td>
                    <td>{{$products->name}}</td>
                    @if($products->category)
                        <td>{{$products->category->name}}</td>
                    @else
                        <td>No category</td>
                    @endif
                    {{-- <td>{{$products->category->name}}</td> --}}
                    <td><img src="{{(asset('uploads/product/'.$products->image))}}" width="100px" height="100px" alt=""></td>
                    <td>{{$products->buying_price}}</td>
                    <td>{{$products->price}}</td>
                    <td>{{$products->quantity}}</td>
                    <td>
                        <a href="{{url('admin/edit-product/'.$products->id)}}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{url('admin/delete-product/'.$products->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
