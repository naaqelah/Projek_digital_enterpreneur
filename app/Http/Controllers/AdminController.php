<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Paket;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

    public function dashboard()
    {


        // Total semua booking

        $totalBooking = Booking::count();




        // Total semua peserta

        $totalPeserta = Booking::sum('jumlah_orang');





        // Total pendapatan dari booking selesai

        $pendapatan = Booking::where(
            'status',
            'selesai'
        )->sum('harga');






        // Booking terbaru

        $bookingTerbaru = Booking::latest()
            ->take(5)
            ->get();






        // Total paket wisata

        $totalPaket = Paket::count();







        // Data grafik booking per bulan

        $bookingPerBulan = Booking::select(

                DB::raw('MONTH(created_at) as bulan'),

                DB::raw('COUNT(*) as total')

            )

            ->groupBy('bulan')

            ->orderBy('bulan')

            ->get();







        return view(

            'admin.dashboard',

            compact(

                'totalBooking',

                'totalPeserta',

                'pendapatan',

                'bookingTerbaru',

                'totalPaket',

                'bookingPerBulan'

            )

        );


    }

}