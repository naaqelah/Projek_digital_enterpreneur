<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::latest()->get();

        return view(
            'admin.booking.index',
            compact('bookings')
        );
    }



    public function create()
    {
        return view('admin.booking.create');
    }



    public function store(Request $request)
    {

        $request->validate([

            'nama_customer' => 'required',

            'lokasi' => 'required',

            'paket' => 'required',

            'jumlah_orang' => 'required|integer',

            'harga' => 'required|integer',

            'status' => 'required'

        ]);



        Booking::create([

            'nama_customer' => $request->nama_customer,

            'lokasi' => $request->lokasi,

            'paket' => $request->paket,

            'jumlah_orang' => $request->jumlah_orang,

            'harga' => $request->harga,

            'status' => $request->status,

        ]);



        return redirect()
            ->route('booking.index')
            ->with('success','Booking berhasil ditambahkan');

    }


}