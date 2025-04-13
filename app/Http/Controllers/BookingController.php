<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getTodayBookingsCount()
    {
        return Booking::whereDate('booking_date_time', Carbon::today())->count();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:bookings,email',
            'booking_date_time' => 'required',
            'number_of_people' => 'required',
            'special_request' => 'string',
        ]);
        $data['booking_date_time'] = Carbon::createFromFormat('m/d/Y h:i A', $data['booking_date_time'])
            ->format('Y-m-d H:i:s');

        Booking::create($data);

        return back()->with('status', 'Booking successfully');
    }
}
