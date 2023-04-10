<?php

namespace App\Http\Controllers\Admin;
use App\Models\Staff;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StaffFormRequest;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        return view('admin.staff.index');
    }

    public function create(){
        return view('admin.staff.create');
    }

    public function store(StaffFormRequest $request)
    {
        $data = $request->validated();
        $staff = new Staff;
        $staff->name =$data['name'];
        $staff->address = $data['address'];
        $staff->contact=$data['contact'];
        $staff->email=$data['email'];

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time(). '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/', $filename);
            $staff->image = $filename;
        }

        $staff->image=$data['image'];
        // $staff->gender=$data['gender'];
        // $staff = $request->input('gender');
        $staff->gender = $request->input('gender');

        $staff->dob = \Carbon\Carbon::createFromFormat('Y-m-d', $data['dob'])->format('Y-m-d');

        $staff->save();

        return redirect('admin/staff')->with('message','Staff added successfully');
    }
}
