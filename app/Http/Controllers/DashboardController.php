<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Get today's date for comparison
        $today = Carbon::today();

        // Get all bookings for debugging
        $todayBookings = Booking::whereDate('booking_date_time', $today)->get();

        // Debug information
        Log::info('Debug information for bookings:');
        Log::info('Today\'s date: ' . $today->toDateString());
        Log::info('SQL Query: ' . Booking::whereDate('booking_date_time', $today)->toSql());
        Log::info('Number of bookings found: ' . $todayBookings->count());

        // Log each booking's date for verification
        foreach ($todayBookings as $booking) {
            Log::info('Booking date: ' . Carbon::parse($booking->booking_date_time)->toDateTimeString());
        }

        // Get all bookings for today
        return view('layouts.dashboard', [
            'todayBookings' => $todayBookings->count()
        ]);
    }
}
