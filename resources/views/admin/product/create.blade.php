@extends('master')

@section('title','Customer')

@section('content')


<!-- Content Row -->
<div class=" mt-4">
    <h3 class="">Add new Product</h3>


</div>
<div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif

    <form action="{{route('product.store')}}" method="Post" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="" required>
        </div>

        <div class="mb-4">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control img-file" placeholder="" required>
        </div>


        <div class="mb-4">
            <label for="">Category</label>
            <select class="form-control" name="category_id" required>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            <span class="select-arrow"></span>
        </div>

        <div class="mb-4">
            <label for="">Buying Price</label>
            <input type="text" name="buying_price" class="form-control" placeholder="" required>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label for="">Price</label>
                <input type="text" name="price" class="form-control" placeholder="" aria-label="price">
            </div>

            <div class="col">
                <label for="">Quantity</label>
                <input type="text" name="quantity" class="form-control" placeholder="" aria-label="quantity">
            </div>
        </div>

            </div>
        </div>


        <div class="col-md-6">
            <button type="submit" class="btn btn-primary ml-4">Submit</button>
        </div>
    </form>
</div>
@endsection
