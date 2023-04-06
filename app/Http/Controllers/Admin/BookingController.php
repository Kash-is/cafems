<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Http\Requests\Admin\BookingFormRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::all();
        return view('admin.booking.index', compact('booking'));
    }


    public function create()
    {
        return view('admin/booking/create');
    }

    public function store(BookingFormRequest $request)
    {

        $existingBooking = Booking::where('table', $request->table)
            ->where('date', $request->date)
            ->first();
        if ($existingBooking != null) {
            return redirect()->back()->with('message', 'This table is already booked please book another table');
        }


        $booking = new Booking;

        $booking->name = $request->name;
        $booking->date = $request->date;
        $booking->table = $request->table;
        $booking->arrivaltime = Carbon::parse($request->input('arrivaltime'));
        $booking->departuretime = Carbon::parse($request->input('departuretime'));


        $booking->contact =  $request->contact;
        $booking->email = $request->email;


        //     $bookingData= [
        //         'status' => 'reserved',
        //     ];
        //     $status=$request->input('status');
        //     // If the submitted value is valid, update the $bookingData variable
        // if ($status === 'reserved' || $status === 'unreserved') {
        //     $bookingData['status'] = $status;
        //

        $booking->status = $request->input('status');

        $booking->save();

        return redirect('admin/booking')->with('message', 'Booking added successfully');
    }


    public function changeStatus(Request $request, $booking_id)
    {
        $booking = Booking::find($booking_id);
        if ($request->input('status') === 'reserved') {
            $booking->status = 'unreserved';
        } else {
            $booking->status = 'reserved';
        }

        $booking->save();
        $booking->update(['status' => $booking->status]);

        return redirect()->back()->with('message', 'Booking status changed successfully.');
    }

    // public function show($id){
    //     $booking  = Booking::find($id);
    //     return view('admin.booking.show')->with('booking', $booking);

    // }


    public function edit($book_id)
    {
        $booking = Booking::find($book_id);
        return view('admin.booking.edit', compact('booking'));
    }


    public function update(BookingFormRequest $request, $book_id)
    {
        $data = $request->validated();
        //$customer is variable
        $booking = Booking::find($book_id);    //Customer is model
        $booking->name = $data['name'];   //$data is from the above validated data
        $booking->contact = $data['contact'];
        $booking->table = $data['table'];
        $booking->status = $data['status'];
        $booking->date = $data['date']; // add this line
        $booking->email = $data['email'];

        $booking->update();
        return redirect('admin/booking')->with('message', 'Booking Updated Successfully');
    }

    public function destroy($book_id)
    {
        $booking = Booking::find($book_id);
        $booking->delete();

        return redirect()->route('admin/booking')->with('success', 'Booking deleted successfully');
    }
}
