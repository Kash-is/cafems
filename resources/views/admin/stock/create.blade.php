@extends('master')

@section('title','Stock')

@section('content')


<!-- Content Row -->
<div class=" mt-4">
    <h3 class="">Add new Stock</h3>


</div>
<div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif

    <form action="{{route('stocks.store')}}" method="Post" >
        @csrf
        <div class="mb-4">
            <label for="">Product Name</label>
            <input type="text" name="products" class="form-control" placeholder="" required>
        </div>

        <div class="mb-4">
            <label for="">Quantity</label>
            <input type="text" name="quantity" class="form-control" placeholder="" aria-label="quantity" required>
        </div>

        <div class="col-md-6">
            <button type="submit" class="btn btn-primary ml-4">Submit</button>
        </div>
    </form>
</div>
@endsection
