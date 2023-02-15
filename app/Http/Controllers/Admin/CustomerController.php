<?php

namespace App\Http\Controllers\Admin;

use App\Models\CustomerDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CustomerFormRequest;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = CustomerDetail::all(); //variable and model
        return view('admin.customer.index', compact('customer')); //compact function
        
    }

    public function create()
    {
        return view('admin.customer.create');
    }

    public function store(CustomerFormRequest $request)
    {
        $data = $request->validated();
        //$customer is variable
        $customer = new CustomerDetail;    //Customer is model
        $customer->name = $data['name'];   //$data is from the above validated data
        $customer->email = $data['email'];
        $customer->contact = $data['contact'];
        $customer->save();

        return redirect('admin/customer')->with('message','Customer added successfully');
    }

    public function edit($customer_id)
    {
        $customer = CustomerDetail::find($customer_id);   //model helps in finding data
        return view('admin.customer.edit', compact('customer'));
    }

    // public function update(CustomerFormRequest $request, customer_id){
    //     $data = $request->validated();
    //     //$customer is variable
    //     $customer = CustomerDetail::find($customer_id));    //Customer is model
    //     $customer->name = $data['name'];   //$data is from the above validated data
    //     $customer->email = $data['email'];
    //     $customer->contact = $data['contact'];
    //     $customer->update();
    //     return redirect('admin/customer')->with('message','Customer Updated Successfully');

    // }
}
