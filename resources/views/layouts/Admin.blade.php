<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Canyventure</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>


<body class="bg-[#F8F8F3]">


<div class="flex min-h-screen">


    <!-- SIDEBAR -->
<aside 
class="fixed top-0 left-0 h-screen w-60 bg-[#061f19] text-white p-5 flex flex-col z-50 overflow-y-auto">


    <!-- LOGO -->

    <div class="flex items-center gap-3 mb-8">


        <div 
        >
<img src="{{ asset('images/icon_new.png') }}" alt="Logo" class="w-12 h-12 rounded-full object-cover">

        </div>



        <div>

            <h2 class="font-bold text-base">
                CanyVenture
            </h2>


            <p class="text-[11px] text-gray-400">
                Adventure System
            </p>


        </div>


    </div>











    <!-- MENU TITLE -->


    <p class="text-[10px] text-gray-500 uppercase mb-3">
        Menu
    </p>





    <!-- MENU -->


    <nav class="space-y-1">



        <!-- Dashboard -->

        <a href="{{ url('admin') }}"
        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm {{ request()->is('admin') ? 'bg-white/10 text-green-400' : 'text-gray-400' }}">


            <i class="fa-solid fa-chart-line w-4 {{ request()->is('admin') ? 'text-green-400' : 'text-gray-400' }}"></i>


            Dashboard


        </a>






        <!-- Booking -->

        <a href="#"
        class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/10 transition text-sm">


            <i class="fa-solid fa-calendar-check w-4 text-gray-400"></i>


            Booking


        </a>







        <!-- Customer -->

        <a href="#"
        class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/10 transition text-sm">


            <i class="fa-solid fa-users w-4 text-gray-400"></i>


            Customer


        </a>







        <!-- Paket -->


        <a href="{{ url('admin/paket') }}"
        class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/10 transition text-sm {{ request()->is('admin/paket') ? 'bg-white/10 text-green-400' : 'text-gray-400' }}">


            <i class="fa-solid fa-mountain w-4 {{ request()->is('admin/paket') ? 'text-green-400' : 'text-gray-400' }}"></i>


            Paket Wisata


        </a>








        <!-- Reports -->


        <a href="#"
        class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/10 transition text-sm">


            <i class="fa-solid fa-file-lines w-4 text-gray-400"></i>


            Reports


        </a>



    </nav>







    <!-- BOTTOM -->


    <div class="mt-auto pt-6">





        <!-- SETTINGS -->


        <a href="#"
        class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/10 transition text-sm">


            <i class="fa-solid fa-gear w-4 text-gray-400"></i>


            Settings


        </a>







        <!-- PROFILE -->


        <div 
        class="mt-5 pt-5 border-t border-white/10 flex items-center gap-3">


<div 
    class="w-9 h-9 rounded-full bg-[#F9F8F3] flex items-center justify-center text-xs font-bold text-[#064E3B]">

    AD

</div>





            <div>


                <p class="text-sm font-semibold">
                    Admin Canyventure
                </p>


                <p class="text-[11px] text-gray-400">
                    admin@email.com
                </p>


            </div>



        </div>



    </div>




</aside>





    <!-- CONTENT -->


    <main class="flex-1 ml-64 p-6">


        @yield('content')


    </main>



</div>


</body>

</html>