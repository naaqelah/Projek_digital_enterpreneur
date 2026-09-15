@extends('layouts.admin')

@section('content')

<div>


<!-- HEADER -->

<div class="mb-8 flex justify-between items-start">


    <div>

        <h1 class="text-2xl font-bold text-[#496B2E]">
            Paket Canyoning
        </h1>


        <p class="text-gray-500 text-sm mt-1">
            Kelola semua paket petualangan CANYVENTURE
        </p>

    </div>



    <a href="{{ route('paket.create') }}"

    class="
    bg-[#496B2E]
    text-white
    px-5
    py-3
    rounded-xl
    text-sm
    font-semibold
    flex
    items-center
    gap-2
    hover:bg-[#3d5925]
    ">


        <i class="fa-solid fa-plus"></i>

        Tambah Paket


    </a>



</div>





<!-- SEARCH FILTER -->


<div class="bg-white rounded-2xl shadow p-5 mb-8">


<div class="flex justify-between items-center">


<!-- SEARCH -->

<div

class="
border
rounded-xl
px-4
py-3
w-96
text-gray-400
flex
items-center
gap-3
">


<i class="fa-solid fa-search"></i>


<span>
Cari paket...
</span>


</div>






<!-- FILTER -->

<div class="relative w-52">


<button

onclick="toggleKategori()"

type="button"

class="
w-full
flex
justify-between
items-center
px-5
py-3
bg-white
border
border-gray-300
rounded-xl
text-gray-700
">


<span id="kategoriText">

Semua Kategori

</span>


<i class="fa-solid fa-chevron-down"></i>


</button>





<div

id="kategoriDropdown"

class="
hidden
absolute
right-0
mt-2
w-full
bg-white
border
rounded-xl
shadow-lg
z-50
">


<div

onclick="pilihKategori('Semua Kategori')"

class="
px-5
py-3
hover:bg-gray-100
cursor-pointer
">

Semua Kategori

</div>



<div

onclick="pilihKategori('Pemula')"

class="
px-5
py-3
hover:bg-gray-100
cursor-pointer
">

Pemula

</div>




<div

onclick="pilihKategori('Adventure')"

class="
px-5
py-3
hover:bg-gray-100
cursor-pointer
">

Adventure

</div>




<div

onclick="pilihKategori('Extreme')"

class="
px-5
py-3
hover:bg-gray-100
cursor-pointer
">

Extreme

</div>



</div>


</div>



</div>


</div>







<!-- LIST PAKET -->


<div

class="
grid
grid-cols-1
lg:grid-cols-2
gap-5
">


@forelse($pakets as $paket)

<!-- CARD -->

<div

class="
flex
items-center
p-3
bg-white
border
border-black/10
rounded-xl
hover:border-[#496B2E]
transition
">


    <!-- GAMBAR -->

    @if($paket->gambar)


    <img

    src="{{ asset('storage/'.$paket->gambar) }}"

    class="
    w-[130px]
    h-[130px]
    rounded-lg
    object-cover
    flex-shrink-0
    ">


    @else


    <div

    class="
    w-[130px]
    h-[130px]
    rounded-lg
    bg-gray-200
    flex
    items-center
    justify-center
    text-gray-400
    text-sm
    flex-shrink-0
    ">

        No Image

    </div>


    @endif







    <!-- CONTENT -->

    <div class="ml-5">



        <!-- KATEGORI -->


        <span

        class="
        bg-green-100
        text-green-700
        px-3
        py-1
        rounded-full
        text-xs
        ">


            {{ $paket->kategori }}


        </span>





        <!-- NAMA -->


        <h3

        class="
        text-lg
        font-semibold
        text-zinc-900
        mt-3
        ">


            {{ $paket->nama_paket }}


        </h3>





        <!-- LOKASI -->


        <p

        class="
        text-sm
        text-gray-600
        mt-1
        ">


            <i class="fa-solid fa-location-dot"></i>

            {{ $paket->lokasi }}


        </p>





        <!-- HARGA -->


        <p

        class="
        text-lg
        font-bold
        text-[#496B2E]
        mt-2
        ">


            Rp{{ number_format($paket->harga) }}


        </p>





        <!-- DETAIL INFO -->


        <div

        class="
        flex
        items-center
        gap-2
        text-sm
        text-gray-600
        mt-1
        ">


            {{ $paket->durasi }}


            <span>
            •
            </span>


            {{ $paket->kapasitas }} Orang


        </div>







        <!-- BUTTON -->


        <div

        class="
        flex
        gap-2
        mt-4
        ">



            <!-- DETAIL -->


            <a

            href="{{ route('paket.show',$paket->id) }}"

            class="
            px-4
            py-2
            rounded-lg
            border
            border-[#496B2E]
            text-[#496B2E]
            text-sm
            ">


                Detail


            </a>







            <!-- EDIT -->


            <a

            href="{{ route('paket.edit',$paket->id) }}"

            class="
            px-4
            py-2
            rounded-lg
            bg-[#496B2E]
            text-white
            text-sm
            ">


                Edit


            </a>







            <!-- DELETE -->


            <form

            action="{{ route('paket.destroy',$paket->id) }}"

            method="POST">


                @csrf

                @method('DELETE')



                <button

                onclick="return confirm('Yakin hapus paket ini?')"

                class="
                px-3
                py-2
                rounded-lg
                bg-red-500
                text-white
                ">


                    <i class="fa-solid fa-trash"></i>


                </button>


            </form>




        </div>



    </div>



</div>



@empty



<div

class="
col-span-2
bg-white
rounded-xl
p-10
text-center
text-gray-500
">

Belum ada paket canyoning.


</div>


@endforelse



</div>



</div>



<script>


function toggleKategori(){

    document
    .getElementById('kategoriDropdown')
    .classList.toggle('hidden');

}



function pilihKategori(value){


    document
    .getElementById('kategoriText')
    .innerHTML=value;



    document
    .getElementById('kategoriDropdown')
    .classList.add('hidden');


}


</script>



@endsection