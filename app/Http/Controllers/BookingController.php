<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingMail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bookings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aproove($id)
    {
        $data = Booking::find($id);
        Booking::where('id', $id)->update(['aproove' => '1']);
        Mail::to($data->email)->send(new BookingMail());
        $bookings = Booking::all();
        return redirect('bookings/lists')->with('bookings', $bookings);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
            'number_people' => $request->number_people
        ]);
        return redirect('bookings')->with('message', 'Booking Placed Successfully, Please check your mail for Confirmation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $bookings = Booking::all();
        return view('bookings.lists', compact('bookings'));
    }
}
