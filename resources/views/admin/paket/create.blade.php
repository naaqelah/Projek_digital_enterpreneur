@extends('layouts.admin')

@section('content')

<div>

    <!-- HEADER -->
    <div class="mb-8">

        <h1 class="text-2xl font-bold text-[#496B2E]">
            Tambah Paket Canyoning
        </h1>

        <p class="text-gray-500 text-sm mt-1">
            Tambahkan paket petualangan baru CANYVENTURE
        </p>

    </div>



    <!-- FORM -->

    <div class="bg-white rounded-2xl shadow p-8 max-w-4xl">


        <form 
            action="{{ route('paket.store') }}" 
            method="POST"
            enctype="multipart/form-data">

            @csrf


            <div class="grid grid-cols-2 gap-6">



<!-- FOTO PAKET -->

<div class="col-span-2">


    <div class="
    border-2
    border-dashed
    border-gray-300
    rounded-xl
    p-8
    text-center
    w-full
    ">


        <i class="
        fa-solid
        fa-image
        text-4xl
        text-[#496B2E]
        ">
        </i>


<label
for="gambar"
id="uploadText"
class="
block
mt-4
text-red-500
cursor-pointer
font-medium
underline
">

    Pilih Foto

</label>



        <input

        id="gambar"

        name="gambar"

        type="file"

        accept="image/*"

        class="hidden"

        >


    </div>



    <!-- GARIS TEPAT DI BAWAH UPLOAD -->

    <div class="
    mt-8
    border-b
    border-gray-200
    "></div>


</div>



                <!-- NAMA -->

                <div>

                    <label class="block text-sm font-semibold mb-2">
                        Nama Paket
                    </label>


                    <input
                        type="text"
                        name="nama_paket"
                        placeholder="Contoh: Curug Lembah Hijau"
                        class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#496B2E]">


                </div>






                <!-- LOKASI -->

                <div>

                    <label class="block text-sm font-semibold mb-2">
                        Lokasi
                    </label>


                    <input
                        type="text"
                        name="lokasi"
                        placeholder="Contoh: Bogor, Jawa Barat"
                        class="w-full border rounded-xl px-4 py-3">


                </div>







 <!-- KATEGORI -->

<div>

<label class="block text-sm font-semibold mb-2">
    Kategori
</label>


<div class="relative">


    <input 
    type="hidden"
    name="kategori"
    id="kategoriValue">



    <button
    type="button"
    onclick="document.getElementById('kategoriMenu').classList.toggle('hidden')"

    class="
    w-full
    flex
    justify-between
    items-center
    px-4
    py-3
    border
    rounded-xl
    bg-white
    text-gray-700
    ">


        <span id="kategoriText">
            Pilih kategori
        </span>


        <i class="fa-solid fa-chevron-down"></i>


    </button>





    <div

    id="kategoriMenu"

    class="
    hidden
    absolute
    w-full
    mt-2
    bg-white
    border
    rounded-xl
    shadow-lg
    z-50
    ">


        <div

        onclick="setKategori('Pemula')"

        class="
        px-4
        py-3
        hover:bg-gray-100
        cursor-pointer
        ">

            Pemula

        </div>



        <div

        onclick="setKategori('Adventure')"

        class="
        px-4
        py-3
        hover:bg-gray-100
        cursor-pointer
        ">

            Adventure

        </div>



        <div

        onclick="setKategori('Extreme')"

        class="
        px-4
        py-3
        hover:bg-gray-100
        cursor-pointer
        ">

            Extreme

        </div>


    </div>


</div>

</div>



                <!-- DURASI -->

                <div>

                    <label class="block text-sm font-semibold mb-2">
                        Durasi
                    </label>


                    <input
                        type="text"
                        name="durasi"
                        placeholder="Contoh: 5 Jam"
                        class="w-full border rounded-xl px-4 py-3">


                </div>







                <!-- KAPASITAS -->

                <div>

                    <label class="block text-sm font-semibold mb-2">
                        Kapasitas Peserta
                    </label>


                    <input
                        type="number"
                        name="kapasitas"
                        placeholder="Contoh: 10"
                        class="w-full border rounded-xl px-4 py-3">


                </div>







                <!-- HARGA -->

                <div>

                    <label class="block text-sm font-semibold mb-2">
                        Harga
                    </label>


                    <input
                        type="number"
                        name="harga"
                        placeholder="Masukan harga dalam Rupiah"
                        class="w-full border rounded-xl px-4 py-3">


                </div>







                <!-- DESKRIPSI -->


                <div class="col-span-2">


                    <label class="block text-sm font-semibold mb-2">
                        Deskripsi Paket
                    </label>



                    <textarea

                        name="deskripsi"

                        rows="4"

                        placeholder="Jelaskan pengalaman canyoning..."

                        class="w-full border rounded-xl px-4 py-3">

                    </textarea>



                </div>



            </div>







            <!-- BUTTON -->

            <div class="flex justify-end gap-3 mt-8">



                <a
                    href="{{ route('paket.index') }}"
                    class="px-6 py-3 rounded-xl border text-gray-600">

                    Batal

                </a>





                <button
                    type="submit"
                    class="bg-[#496B2E] text-white px-6 py-3 rounded-xl font-semibold">


                    Simpan Paket


                </button>



            </div>



        </form>



    </div>


</div>

<script>


const inputFoto = document.getElementById('gambar');

const uploadText = document.getElementById('uploadText');



inputFoto.addEventListener('change', function(){


    if(this.files.length > 0){


        uploadText.innerHTML = this.files[0].name;


        uploadText.classList.remove(
            'text-red-500'
        );


        uploadText.classList.add(
            'text-black'
        );


    }


});


</script>

<script>

function setKategori(value){

    document.getElementById('kategoriText').innerHTML = value;

    document.getElementById('kategoriValue').value = value;

    document
    .getElementById('kategoriMenu')
    .classList.add('hidden');

}


</script>
@endsection