@extends('layouts.admin')

@section('content')


<div class="min-h-screen bg-gradient-to-br from-[#064e3b] via-[#059669] to-[#16a34a] p-6 rounded-3xl">


    <!-- MAIN GLASS CONTAINER -->

    <div class="
    bg-white/95
    backdrop-blur-xl
    rounded-[35px]
    shadow-2xl
    overflow-hidden
    flex
    min-h-[900px]
    ">



        <!-- CONTENT -->


        <main class="flex-1 p-8 overflow-hidden">





            <!-- HEADER -->


            <div class="flex justify-between items-center mb-8">



                <div>


                    <h1 class="text-3xl font-bold text-gray-900">

                        Dashboard

                    </h1>



                    <p class="text-gray-500 text-sm">

                        Monitoring performa Canyventure

                    </p>


                </div>





                <button

                class="
                bg-[#10251d]
                text-white
                px-5
                py-3
                rounded-xl
                text-sm
                ">


                    <i class="fa-solid fa-plus mr-2"></i>

                    Add Custom Widget


                </button>



            </div>









            <!-- TOP STAT CARDS -->


            <div class="
            grid
            grid-cols-1
            md:grid-cols-3
            gap-5
            mb-6
            ">



                <!-- TOTAL BOOKING -->


                <div class="
                bg-[#10251d]
                text-white
                rounded-3xl
                p-5
                ">



                    <p class="text-xs text-gray-400">

                        Total Booking Hari Ini

                    </p>




                    <div class="flex justify-between items-center mt-3">


                        <h2 class="text-3xl font-bold">


                            {{ $totalBooking }}


                        </h2>




                        <i class="
                        fa-solid
                        fa-ticket
                        text-emerald-400
                        text-2xl
                        "></i>


                    </div>




                    <p class="text-xs text-emerald-400 mt-2">

                        ↑ 12% bulan lalu

                    </p>


                </div>








                <!-- CUSTOMER SATISFACTION -->


                <div class="
                bg-white
                rounded-3xl
                p-5
                border
                ">


                    <p class="text-xs text-gray-500">

                        Customer Satisfaction

                    </p>




                    <h2 class="text-3xl font-bold mt-3">

                        95.70%

                    </h2>




                    <p class="text-xs text-green-600 mt-2">

                        ↑ Excellent service

                    </p>



                </div>









                <!-- PENDAPATAN -->


                <div class="
                bg-white
                rounded-3xl
                p-5
                border
                ">



                    <p class="text-xs text-gray-500">

                        Pendapatan Canyventure

                    </p>





                    <h2 class="text-3xl font-bold mt-3">

                        Rp {{ number_format($pendapatan) }}

                    </h2>





                    <p class="text-xs text-green-600 mt-2">

                        ↑ 8% bulan lalu

                    </p>



                </div>




            </div>
          
                        <!-- MAIN ANALYTICS SECTION -->


            <div class="space-y-6 mb-6">





                <!-- BOOKING PERFORMANCE -->


                <div class="
                bg-white
                rounded-[30px]
                border
                p-8
                ">



                    <div class="flex justify-between items-center mb-8">


                        <div>


                            <h3 class="font-bold text-xl">

                                Booking Performance

                            </h3>



                            <p class="text-sm text-gray-500">

                                Statistik pemesanan paket canyoning

                            </p>


                        </div>




                        <button class="
                        bg-gray-100
                        px-5
                        py-2
                        rounded-xl
                        text-xs
                        ">


                            12 bulan terakhir


                        </button>



                    </div>









                    <!-- DATA GRAFIK -->


                    @php


                    $namaBulan = [

                        1=>'Jan',
                        2=>'Feb',
                        3=>'Mar',
                        4=>'Apr',
                        5=>'Mei',
                        6=>'Jun',
                        7=>'Jul',
                        8=>'Agu',
                        9=>'Sep',
                        10=>'Okt',
                        11=>'Nov',
                        12=>'Des'

                    ];





                    $dataChart = [];



                    for($i = 1; $i <= 12; $i++){


                        $dataChart[$i] = 0;


                    }






                    foreach($bookingPerBulan as $data){


                        $dataChart[$data->bulan] = $data->total;


                    }





                    $nilaiMax = max($dataChart);



                    if($nilaiMax == 0){

                        $nilaiMax = 1;

                    }



                    @endphp







                    <!-- BAR CHART -->


                    <div class="
                    flex
                    items-end
                    justify-between
                    gap-4
                    h-72
                    ">





                        @foreach($dataChart as $bulan=>$jumlah)




                        <div class="
                        flex-1
                        flex
                        flex-col
                        items-center
                        ">





                            <div class="
                            w-full
                            h-56
                            bg-gray-100
                            rounded-full
                            flex
                            items-end
                            overflow-hidden
                            ">



                                <div

                                class="
                                w-full
                                bg-gradient-to-t
                                from-green-700
                                to-green-400
                                rounded-full
                                transition-all
                                "

                                style="
                                height: {{ ($jumlah/$nilaiMax)*220 }}px
                                ">


                                </div>



                            </div>





                            <span class="
                            text-xs
                            text-gray-500
                            mt-4
                            ">


                                {{ $namaBulan[$bulan] }}


                            </span>




                        </div>




                        @endforeach





                    </div>




                </div>









                <!-- TOTAL PESERTA -->


                <div class="
                bg-[#dff5df]
                rounded-[30px]
                p-8
                ">




                    <p class="text-gray-600 text-sm">

                        Total Peserta Canyoning

                    </p>





                    <h1 class="
                    text-5xl
                    font-bold
                    mt-5
                    text-gray-900
                    ">


                        {{ number_format($totalPeserta) }}



                        <span class="
                        text-lg
                        font-normal
                        ">

                            Orang

                        </span>



                    </h1>





                    <p class="
                    text-green-700
                    text-sm
                    mt-3
                    ">


                        ↑ 20% dibanding tahun lalu


                    </p>





                </div>






            </div>

                        <!-- BOTTOM INFORMATION -->


            @php

            $lokasiBooking = \App\Models\Booking::select(
                    'lokasi',
                    \DB::raw('SUM(jumlah_orang) as peserta'),
                    \DB::raw('COUNT(*) as total_booking')
                )

                ->groupBy('lokasi')

                ->orderByDesc('peserta')

                ->take(3)

                ->get();


            @endphp







            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">






                <!-- TABLE -->


                <div class="
                xl:col-span-2
                bg-white
                rounded-[30px]
                border
                p-6
                ">





                    <div class="
                    flex
                    justify-between
                    mb-6
                    ">



                        <div>


                            <h3 class="font-bold text-lg">

                                Booking Berdasarkan Lokasi

                            </h3>




                            <p class="text-sm text-gray-500">

                                Data destinasi favorit customer

                            </p>



                        </div>





                        <button class="
                        bg-gray-100
                        rounded-xl
                        px-4
                        py-2
                        text-xs
                        ">


                            All Region


                        </button>



                    </div>










                    <div class="overflow-x-auto">


                        <table class="w-full text-sm">


                            <thead>


                                <tr class="
                                text-gray-400
                                border-b
                                ">


                                    <th class="text-left py-3">

                                        Lokasi

                                    </th>


                                    <th>

                                        Peserta

                                    </th>


                                    <th>

                                        Booking

                                    </th>


                                    <th>

                                        Popularitas

                                    </th>


                                </tr>


                            </thead>






                            <tbody>



                                @forelse($lokasiBooking as $lokasi)




                                <tr class="border-b">


                                    <td class="py-4 flex items-center gap-3">



                                        <span class="text-xl">

                                            🇮🇩

                                        </span>




                                        <div>


                                            <b>

                                                {{ $lokasi->lokasi }}

                                            </b>



                                            <p class="
                                            text-xs
                                            text-gray-400
                                            ">

                                                Indonesia

                                            </p>


                                        </div>



                                    </td>





                                    <td class="text-center">


                                        {{ $lokasi->peserta }}


                                    </td>





                                    <td class="text-center">


                                        {{ $lokasi->total_booking }}


                                    </td>





                                    <td class="text-green-600 text-center">


                                        {{ 
                                            $totalBooking > 0 
                                            ? round(($lokasi->total_booking/$totalBooking)*100)
                                            : 0
                                        }}%


                                    </td>




                                </tr>





                                @empty



                                <tr>

                                    <td colspan="4"
                                    class="text-center py-5 text-gray-400">


                                        Belum ada data booking


                                    </td>

                                </tr>



                                @endforelse




                            </tbody>


                        </table>


                    </div>





                </div>












                <!-- MAP CARD -->


                <div class="
                bg-[#10251d]
                rounded-[30px]
                p-6
                text-white
                ">



                    <div class="
                    flex
                    justify-between
                    mb-5
                    ">



                        <h3 class="font-bold">

                            Global Destination

                        </h3>




                        <span class="
                        bg-white/20
                        px-3
                        py-1
                        rounded-full
                        text-xs
                        ">


                            Indonesia


                        </span>



                    </div>






                    <div class="
                    h-64
                    bg-gradient-to-br
                    from-green-800
                    to-green-500
                    rounded-3xl
                    flex
                    items-center
                    justify-center
                    relative
                    overflow-hidden
                    ">




                        <i class="
                        fa-solid
                        fa-map-location-dot
                        text-7xl
                        text-white/40
                        "></i>






                        @if($lokasiBooking->count())


                        <div class="
                        absolute
                        bottom-5
                        left-5
                        bg-white/20
                        backdrop-blur
                        rounded-xl
                        px-4
                        py-3
                        ">


                            <p class="text-xs text-gray-200">

                                Booking tertinggi

                            </p>




                            <b>

                                {{ $lokasiBooking->first()->lokasi }}

                            </b>



                        </div>


                        @endif





                    </div>




                </div>






            </div>

                    </main>


    </div>


</div>


@endsection