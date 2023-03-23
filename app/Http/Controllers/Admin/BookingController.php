<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Http\Requests\Admin\BookingFormRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;



class BookingController extends Controller
{
    public function index()
    {
    $booking = Booking::all();
    return view('admin.booking.index', compact('booking'));
    }


    public function create(){
        return view ('admin/booking/create');
    }

    public function store(BookingFormRequest $request){


        $booking = new Booking;

        $booking -> name = $request->name;
        $booking -> date= $request->date;
        $booking -> table= $request->table;
        $booking->arrivaltime = Carbon::parse($request->input('arrivaltime'));
        $booking->departuretime = Carbon::parse($request->input('departuretime'));

        $booking -> contact=  $request->contact;
        $booking -> email= $request->email;

        $bookingData= [
            'status' => 'reserved',
        ];
        $status=$request->input('status');
        // If the submitted value is valid, update the $bookingData variable
    if ($status === 'reserved' || $status === 'unreserved') {
        $bookingData['status'] = $status;
    }

    $booking->status = $bookingData['status'];


        $booking ->save();

        return redirect('admin/booking')->with('message','Booking added successfully');
    }




    public function edit($booking_id)
{
    $reservation = Booking::find($booking_id);
    return view('admin.edit-booking', compact('reservation'));
}



//     public function update(BookingFormRequest $request, $booking_id)
//     {
//         $data = $request->validated();
//         //$customer is variable
//         $booking = Booking::find($booking_id);    //Customer is model
//         $booking->name = $data['name'];   //$data is from the above validated data
//         $booking->contact = $data['contact'];
//         $booking->update();
//         return redirect('admin/booking')->with('message','Booking Updated Successfully');

//     }

//     public function delete($booking_id)
//     {
//         // $customer = CustomerDetail::find($customer_id);
//         // if($customer_id)
//         // {
//         //     $customer->delete();
//         //     return redirect('admin/customer')->with('message', 'Customer Deleted Successfully');
//         // }
//         // else
//         // {
//         //     return redirect('admin/customer')->with('message', 'No Customer Id found');
//         // }
//         $data = Booking::find ($booking_id);
//         $data->delete();
//         return redirect('admin/booking');
//     }

 }
