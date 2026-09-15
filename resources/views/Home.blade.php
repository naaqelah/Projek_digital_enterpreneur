@extends('layouts.app')


@section('content')





<!-- NAVBAR -->

<nav 
class="
fixed 
top-0
left-0
w-full
z-50
bg-white/90
backdrop-blur-md
">

<div 
class="
max-w-7xl
mx-auto
px-8
h-[70px]
flex
items-center
justify-between
">


<!-- LOGO -->

<div class="flex items-center gap-3">

    <img 
        src="{{ asset('images/icon.png') }}"
        class="
        w-10
        h-10
        object-contain
        "
        alt="Canyventure Icon"
    >

    <h1
    class="
    text-2xl
    font-extrabold
    tracking-wide
    text-[#496B2E]
    ">
        CANYVENTURE.
    </h1>

</div>



<!-- MENU -->

<div
class="
hidden
md:flex
items-center
gap-10
text-sm
font-semibold
text-[#1B2A1A]
">


<a
class="
text-[#69A43B]
border-b-2
border-[#69A43B]
pb-1
">

Beranda

</a>


<a>
Paket Canyoning
</a>


<a>
Tentang Kami
</a>


<a>
Pesanan Saya
</a>



</div>




<div class="flex items-center gap-3">

    @auth

<div class="flex items-center gap-4">

    <span class="
    text-[#496B2E]
    font-semibold
    ">
        Halo, {{ explode(' ', Auth::user()->name)[0] }}
    </span>


    <form action="{{ route('logout') }}" method="POST">

        @csrf

      <button
class="
px-6
py-1.5
rounded-xl
bg-[#496B2E]
text-white
font-semibold
hover:bg-[#385222]
transition
">
    Keluar
</button>  
    </form>

</div>


@else


<div class="flex items-center gap-3">

    <!-- LOGIN -->

    <a href="{{ route('login') }}"
    class="
    px-6
    py-1.5
    rounded-xl
    border
    border-[#496B2E]
    text-[#496B2E]
    font-semibold
    hover:bg-[#496B2E]
    hover:text-white
    transition
    ">
        Masuk
    </a>



    <!-- REGISTER -->

    <a href="{{ route('register') }}"
    class="
    px-6
    py-1.5
    rounded-xl
    bg-[#496B2E]
    text-white
    font-semibold
    hover:bg-[#385222]
    transition
    ">
        Daftar
    </a>


</div>


@endauth

    

</div>



</div>

</nav>





<!-- HERO -->

<section

class="
relative
h-[550px]
bg-cover
bg-center
flex
items-center
justify-center
"

style="
background-image:
linear-gradient(
rgba(0,0,0,.45),
rgba(0,0,0,.45)
),
url('/images/hero.jpg');
"

>



<div
class="
text-center
text-white
max-w-4xl
px-6
mt-10
">


<h1

class="
text-4xl
md:text-5xl
font-bold
leading-tight
">

Temukan Keindahan Alam.
<br>

Mulai Petualangan Canyoning-mu.

</h1>




<p

class="
mt-6
text-base
md:text-lg
text-gray-200
max-w-3xl
mx-auto
">

Mudahkan booking canyoning, pilih paket terbaik, dan nikmati petualangan alam
yang aman, nyaman, serta terpercaya bersama pemandu profesional.

</p>



<button

class="
mt-7
bg-[#496B2E]
hover:bg-[#385222]
px-8
py-3
rounded-full
font-semibold
transition
">

Lihat Selengkapnya
→

</button>



</div>


</section>



<!-- SEARCH BAR -->

<div
class="
relative
z-20
max-w-[790px]
mx-auto
-mt-[38px]
bg-[#F3F1E5]
rounded-full
p-4
shadow-lg
">


<div
class="
bg-white
rounded-full
h-[55px]
flex
items-center
overflow-hidden
">


<!-- PILIH LOKASI -->

<div
class="
flex-1
h-full
flex
items-center
justify-between
px-6
border-r
border-gray-200
">


<div
class="
flex
items-center
gap-3
text-gray-400
text-sm
">

<i class="fa-solid fa-location-dot text-[#496B2E]"></i>

<span>
Pilih Lokasi
</span>


</div>


<i class="fa-solid fa-angle-down text-[#496B2E] text-sm"></i>


</div>





<!-- JENIS PAKET -->


<div
class="
flex-1
h-full
flex
items-center
justify-between
px-6
border-r
border-gray-200
">


<div
class="
flex
items-center
gap-3
text-gray-400
text-sm
">


<span>
Jenis Paket
</span>


</div>


<i class="fa-solid fa-angle-down text-[#496B2E] text-sm"></i>


</div>






<!-- PILIH TANGGAL -->


<div
class="
flex-1
h-full
flex
items-center
justify-between
px-6
border-r
border-gray-200
">


<div
class="
flex
items-center
gap-3
text-gray-400
text-sm
">


<span>
Pilih Tanggal
</span>


</div>



<i class="fa-solid fa-angle-down text-[#496B2E] text-sm"></i>


</div>





<!-- BUTTON -->


<button

class="
h-[45px]
px-8
mx-2
bg-[#496B2E]
text-white
rounded-full
text-sm
font-semibold
flex
items-center
gap-3
">

Lihat Semuanya

<i class="fa-solid fa-arrow-right"></i>


</button>



</div>


</div>

<!-- WELCOME SECTION -->

<section class="bg-[#FAF9F4] py-16">


    <div class="max-w-[850px] mx-auto px-6 translate-x-8">


        <div class="flex items-center justify-center gap-8">


            <!-- IMAGE -->

            <div class="relative flex-shrink-0">


                <img
                src="/images/curug_3.jpg"
                class="
                w-[280px]
                h-[160px]
                object-cover
                border-4
                border-white
                shadow-md
                "
                >



                <!-- LOGO -->

                <div
                class="
                absolute
                -left-[22px]
                -top-[22px]
                w-[70px]
                h-[70px]
                rounded-full
                overflow-hidden
                border-2
                border-white
                shadow-lg
                bg-white
                ">


                    <img
                    src="/images/icon.png"
                    class="
                    w-full
                    h-full
                    object-cover
                    "
                    >


                </div>


            </div>





            <!-- TEXT -->

            <div class="w-[420px]">


                <h2
                class="
                text-[24px]
                font-bold
                text-[#496B2E]
                mb-3
                "
                >

                    Selamat Datang di Canyventure

                </h2>




                <p
                class="
                text-[13px]
                leading-relaxed
                text-gray-500
                "
                >

                    Platform booking canyoning yang menghadirkan petualangan alam
                    dengan mudah, aman, dan terpercaya. CANYVENTURE membantu
                    menemukan paket, memilih jadwal, dan menikmati pengalaman
                    canyoning terbaik.

                </p>




                <button

                class="
                mt-5
                bg-[#496B2E]
                text-white
                px-7
                py-2.5
                rounded-full
                text-sm
                font-semibold
                "

                >

                    Tentang Kami
                    →

                </button>


            </div>


        </div>


    </div>


</section>


<!-- PILIHAN PAKET -->

<section class="py-24 bg-white">


<div class="max-w-7xl mx-auto px-6">


<div class="text-center mb-12">

<h2 class="text-4xl font-bold text-[#1B2A1A]">
Pilihan Paket Canyoning
</h2>

<p class="mt-4 text-gray-500">
Temukan berbagai destinasi canyoning terbaik untuk pengalaman petualangan yang tak terlupakan.
</p>

</div>



<div class="grid md:grid-cols-3 gap-8">



@foreach([


[
'image'=>'curug_1.jpg',
'label'=>'Pemula',
'title'=>'Curug Lembah Hijau',
'location'=>'Bogor, Jawa Barat',
'type'=>'Pemula',
'duration'=>'5 Jam',
'people'=>'10 Orang',
'price'=>'300.000'
],


[
'image'=>'curug_2.jpg',
'label'=>'Adventure',
'title'=>'Curug Air Terjun Bidadari',
'location'=>'Sukabumi, Jawa Barat',
'type'=>'Pecinta petualangan',
'duration'=>'4 Jam',
'people'=>'8 Orang',
'price'=>'500.000'
],


[
'image'=>'curug_3.jpg',
'label'=>'Extreme',
'title'=>'Curug Sungai Pelangi',
'location'=>'Garut, Jawa Barat',
'type'=>'Pecinta tantangan',
'duration'=>'6 Jam',
'people'=>'10 Orang',
'price'=>'750.000'
]


] as $paket)



<div
class="
rounded-3xl
overflow-hidden
bg-white
shadow-lg
hover:-translate-y-2
transition
">


<div class="relative">


<img
src="/images/{{$paket['image']}}"
class="
w-full
h-64
object-cover
">


<span

class="
absolute
bottom-4
left-4
bg-[#B2D959]
text-[#1B2A1A]
px-4
py-1
rounded-full
text-sm
font-semibold
">

{{$paket['label']}}

</span>


</div>




<div class="p-6">


<h3
class="
text-xl
font-bold
">

{{$paket['title']}}

</h3>


<p class="text-sm text-gray-500 mt-2">
📍 {{$paket['location']}}
</p>


<div class="mt-4 text-sm space-y-2">


<p>
🌊 {{$paket['type']}}
</p>


<p>
⏱ {{$paket['duration']}}
</p>


<p>
👥 Maks {{$paket['people']}}
</p>


</div>



<div
class="
mt-5
text-[#4E7B2D]
font-bold
text-xl
">

Rp {{$paket['price']}}

<span class="text-sm">
/orang
</span>

</div>




<button

class="
mt-5
w-full
bg-[#4E7B2D]
text-white
py-3
rounded-full
hover:bg-[#1B2A1A]
transition
">

Lihat Detail →

</button>


</div>


</div>


@endforeach



</div>


</div>


</section>

<!-- CARA PEMESANAN -->


<section
class="
py-24
bg-[#F7F8F3]
">

<div
class="
max-w-6xl
mx-auto
px-6
">


<h2
class="
text-4xl
font-bold
text-center
">

Mulai Petualanganmu

</h2>


<p
class="
text-center
mt-3
">

Ikuti langkah mudah untuk memesan dan menikmati pengalaman canyoning bersama CANYVENTURE.

</p>



<div
class="
grid
md:grid-cols-4
gap-8
mt-12
">


@foreach([
[
'icon'=>'📍',
'title'=>'Pilih Paket',
'desc'=>'Temukan berbagai pilihan paket canyoning sesuai kebutuhanmu.'
],
[
'icon'=>'📅',
'title'=>'Pilih Jadwal',
'desc'=>'Tentukan tanggal dan waktu perjalanan yang tersedia.'
],
[
'icon'=>'💳',
'title'=>'Pembayaran',
'desc'=>'Lakukan pembayaran untuk mengonfirmasi pemesanan.'
],
[
'icon'=>'🏔',
'title'=>'Mulai Petualangan',
'desc'=>'Nikmati pengalaman canyoning yang aman dan menyenangkan.'
]

] as $item)


<div
class="
bg-white
rounded-3xl
shadow-md
p-8
text-center
">


<div
class="
text-4xl
">

{{$item['icon']}}

</div>


<h3
class="
font-bold
mt-5
">

{{$item['title']}}

</h3>


<p
class="
text-sm
mt-3
text-gray-500
">

{{$item['desc']}}

</p>


</div>


@endforeach


</div>

</div>

</section>


<!-- KENAPA MEMILIH CANYVENTURE -->

<section class="py-24 bg-[#F7F8F3]">


<div class="max-w-7xl mx-auto px-6">


<div class="grid md:grid-cols-2 gap-16 items-center">


<!-- IMAGE -->

<div class="relative">


<img
src="/images/choose.jpg"
class="
rounded-3xl
shadow-xl
w-full
h-[420px]
object-cover
">


<div
class="
absolute
bottom-8
right-5
bg-white
rounded-2xl
shadow-lg
p-5
max-w-xs
">


<div class="text-yellow-400 text-xl">
★★★★★
</div>


<p class="text-sm text-gray-600 mt-2">

"Pengalaman canyoning seru dengan booking mudah dan pemandu profesional."

</p>


</div>


</div>




<!-- CONTENT -->

<div>


<h2
class="
text-4xl
font-bold
text-[#1B2A1A]
">

Kenapa Memilih CANYVENTURE?

</h2>



<div class="mt-8 space-y-5">



@foreach([

[
'title'=>'Paket Beragam',
'desc'=>'Berbagai pilihan canyoning sesuai kebutuhan.'
],

[
'title'=>'Aman dan Terpercaya',
'desc'=>'Didukung pemandu profesional.'
],

[
'title'=>'Booking Mudah',
'desc'=>'Proses pemesanan cepat dan praktis.'
],

[
'title'=>'Pengalaman Berkesan',
'desc'=>'Nikmati keindahan alam yang menakjubkan.'
],

[
'title'=>'Layanan Profesional',
'desc'=>'Dapatkan pelayanan terbaik selama perjalanan.'
]


] as $item)


<div class="flex gap-4 items-start">


<div
class="
bg-[#4E7B2D]
text-white
w-8
h-8
rounded-full
flex
items-center
justify-center
font-bold
">

✓

</div>


<div>

<h3 class="font-bold">

{{$item['title']}}

</h3>


<p class="text-gray-500 text-sm">

{{$item['desc']}}

</p>


</div>


</div>


@endforeach



</div>



</div>



</div>



</div>


</section>

<!-- TESTIMONIAL -->

<section class="py-24 bg-[#F7F8F3]">


<div class="max-w-7xl mx-auto px-6">


<h2
class="
text-center
text-4xl
font-bold
text-[#1B2A1A]
">

Cerita Petualangan Mereka

</h2>



<div
class="
grid
md:grid-cols-3
gap-8
mt-12
">



@foreach([


[
'image'=>'riview_1.jpg',
'name'=>'Fikri Setya',
'review'=>'Pengalaman canyoning yang sangat menyenangkan! Proses booking mudah, informasi paket lengkap, dan pemandu sangat membantu selama perjalanan.'
],


[
'image'=>'riview_2.jpg',
'name'=>'Dina Ilana',
'review'=>'CANYVENTURE memberikan pengalaman pertama yang seru. Pemandu profesional dan perjalanan terasa aman.'
],


[
'image'=>'riview_3.jpg',
'name'=>'Yoga Prasetyo',
'review'=>'Sangat direkomendasikan untuk yang ingin mencoba aktivitas canyoning. Tim profesional dan membuat perjalanan lebih aman.'
],


[
'image'=>'riview_4.jpg',
'name'=>'Andika Pratama',
'review'=>'Pengalaman canyoning sangat menyenangkan. Booking mudah dan pelayanan sangat baik.'
],


[
'image'=>'riview_5.jpg',
'name'=>'Nadia Permata',
'review'=>'Pertama kali mencoba canyoning dan sangat puas. Aman, nyaman, dan menyenangkan.'
],


[
'image'=>'riview_6.jpg',
'name'=>'Rizky Maulana',
'review'=>'Paket wisata lengkap dengan informasi jelas. Pengalaman alam yang luar biasa.'
]


] as $item)



<div
class="
bg-white
rounded-3xl
shadow-lg
p-8
hover:-translate-y-2
transition
">


<!-- USER -->

<div
class="
flex
items-center
gap-5
">


<img

src="/images/{{$item['image']}}"

class="
w-16
h-16
rounded-full
object-cover
border-4
border-white
shadow
">


<div>


<h3
class="
font-bold
text-lg
">

{{$item['name']}}

</h3>



<div
class="
text-yellow-400
text-xl
tracking-wide
">

★★★★★

</div>


</div>


</div>




<!-- REVIEW -->

<p
class="
mt-6
text-gray-500
leading-relaxed
">

{{$item['review']}}

</p>



</div>



@endforeach



</div>



</div>


</section>

<!-- SOCIAL MEDIA -->

<section class="py-20 bg-[#1B2A1A]">


<div class="max-w-6xl mx-auto px-6 text-center text-white">


<h2 class="text-3xl md:text-4xl font-bold">

Ikuti Petualangan CANYVENTURE

</h2>


<p class="mt-4 text-gray-300">

Dapatkan informasi terbaru tentang paket canyoning dan perjalanan seru kami.

</p>



<div class="grid md:grid-cols-3 gap-8 mt-10">


<!-- INSTAGRAM -->

<a
href="#"
class="
bg-white/10
backdrop-blur
rounded-3xl
p-8
hover:bg-white/20
transition
">


<div class="text-4xl">
📸
</div>


<h3 class="mt-4 text-xl font-bold">
Instagram
</h3>


<p class="text-gray-300 mt-2">
@canyventure
</p>


</a>



<!-- WHATSAPP -->

<a
href="#"
class="
bg-white/10
backdrop-blur
rounded-3xl
p-8
hover:bg-white/20
transition
">


<div class="text-4xl">
💬
</div>


<h3 class="mt-4 text-xl font-bold">
WhatsApp
</h3>


<p class="text-gray-300 mt-2">
+62 812-xxxx-xxxx
</p>


</a>




<!-- FACEBOOK -->

<a
href="#"
class="
bg-white/10
backdrop-blur
rounded-3xl
p-8
hover:bg-white/20
transition
">


<div class="text-4xl">
🌐
</div>


<h3 class="mt-4 text-xl font-bold">
Facebook
</h3>


<p class="text-gray-300 mt-2">
CANYVENTURE
</p>


</a>



</div>


</div>


</section>