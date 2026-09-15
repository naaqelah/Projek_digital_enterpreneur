@extends('layouts.admin')

@section('content')


<div>


<!-- HEADER -->

<div class="flex justify-between items-center mb-8">


    <div>

        <h1 class="text-2xl font-bold text-[#496B2E]">
            Detail Paket Canyoning
        </h1>


        <p class="text-gray-500 text-sm mt-1">
            Informasi lengkap paket petualangan CANYVENTURE
        </p>

    </div>




    <a href="{{ route('paket.index') }}"
    class="
    border
    px-5
    py-3
    rounded-xl
    text-sm
    text-gray-600
    ">

        <i class="fa-solid fa-arrow-left"></i>

        Kembali

    </a>


</div>







<!-- DETAIL CARD -->

<div class="
bg-white
rounded-3xl
shadow
overflow-hidden
">



<div class="
grid
grid-cols-2
">





<!-- IMAGE -->

<div>


@if($paket->gambar)


<img

src="{{ asset('storage/'.$paket->gambar) }}"

class="
w-full
h-full
min-h-[450px]
object-cover
">


@else


<div class="
w-full
h-[450px]
bg-gray-200
flex
items-center
justify-center
text-gray-400
">

Tidak ada gambar

</div>


@endif


</div>









<!-- CONTENT -->

<div class="p-8">





<span

class="
bg-green-100
text-green-700
px-4
py-2
rounded-full
text-sm
">


{{ $paket->kategori }}


</span>








<h2 class="
text-3xl
font-bold
mt-5
text-gray-800
">

{{ $paket->nama_paket }}

</h2>








<p class="
text-gray-500
mt-3
">


<i class="fa-solid fa-location-dot"></i>


{{ $paket->lokasi }}


</p>









<!-- INFO -->

<div class="
mt-6
space-y-3
">



<div class="
flex
justify-between
bg-[#F8F8F3]
rounded-xl
p-4
">


<span>
Durasi
</span>


<span class="font-semibold">

{{ $paket->durasi }}

</span>


</div>






<div class="
flex
justify-between
bg-[#F8F8F3]
rounded-xl
p-4
">


<span>
Kapasitas
</span>


<span class="font-semibold">

{{ $paket->kapasitas }} Orang

</span>


</div>






<div class="
flex
justify-between
bg-[#F8F8F3]
rounded-xl
p-4
">


<span>
Harga
</span>


<span class="
font-bold
text-[#496B2E]
">


Rp{{ number_format($paket->harga) }}


</span>


</div>




</div>









<!-- DESKRIPSI -->


<div class="mt-7">


<h3 class="
font-bold
text-lg
mb-2
">

Deskripsi

</h3>



<p class="
text-gray-500
leading-relaxed
">

{{ $paket->deskripsi }}


</p>



</div>









<!-- BUTTON -->


<div class="
flex
gap-3
mt-8
">



<a href="{{ route('paket.edit',$paket->id) }}"

class="
flex-1
bg-[#496B2E]
text-white
py-3
rounded-xl
text-center
font-semibold
">


<i class="fa-solid fa-pen"></i>

Edit Paket


</a>







<form

action="{{ route('paket.destroy',$paket->id) }}"

method="POST"
class="flex-1"
>


@csrf

@method('DELETE')



<button

onclick="return confirm('Hapus paket ini?')"

class="
w-full
bg-red-500
text-white
py-3
rounded-xl
font-semibold
">


<i class="fa-solid fa-trash"></i>

Hapus


</button>



</form>




</div>






</div>






</div>



</div>


@endsection