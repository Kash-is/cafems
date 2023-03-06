@extends('master')

@section('title','Customer')

@section('content')


<!-- Content Row -->
<div class=" mt-4 mb-4">
    <h3 class="">Add new Staff</h3>
</div>

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <div>{{$error}}</div>

        @endforeach
    </div>
    @endif

    <form action="{{url('admin/addStaff')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="" class="staffname">Staff Name</label>
            <input type="text" name="name" class="form-control" placeholder="" required>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label for="">Contact No</label>
                <input type="text" name="contact" class="form-control" placeholder="" aria-label="First name">
            </div>

            <div class="col">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control" placeholder="" aria-label="address">
            </div>
        </div>

        <div class="mb-4">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" placeholder="" required>
        </div>

        <div class="mb-4">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control img-file" placeholder="" required>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label for="">Gender</label><br>

                <input type="radio" name="gender" class="form-radio-input" id="flexRadioDefault" value="Male" {{old('gender') === 'Male' ? 'checked' : ''}}>
                <label for="flexRadioDefault" class="mr-5">Male</label>
                <input type="radio" name="gender" class="form-radio-input" id="flexRadioDefault" value="Female" {{ old('gender') === 'Female' ? 'checked' : '' }}>
                <label for="flexRadioDefault" class="mr-5">Female</label>
                <input type="radio" name="gender" class="form-radio-input" id="flexRadioDefault" value="Others" {{ old('gender') === 'Others' ? 'checked' : '' }}>
                <label for="flexRadioDefault" class="mr-5">Others</label>

            </div>

            <div class=" col mb-4">
                <label for="">Date Of Birth</label><br>
                <input type="date" name="dob" class="form-control">
            </div>


        </div>






        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </form>



@endsection
