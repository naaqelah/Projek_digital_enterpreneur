@extends('layouts.admin')


@section('content')


<div>


<!-- HEADER -->

<div class="mb-8">


<h1 class="text-2xl font-bold text-[#496B2E]">
Edit Paket Canyoning
</h1>


<p class="text-gray-500 text-sm mt-1">
Perbarui informasi paket petualangan CANYVENTURE
</p>


</div>





<!-- FORM -->

<div class="
bg-white
rounded-2xl
shadow
p-8
max-w-4xl
">


<form 
action="{{ route('paket.update',$paket->id) }}"
method="POST"
enctype="multipart/form-data">

@csrf
@method('PUT')



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


<label class="
block
text-sm
font-semibold
mb-2
">

Nama Paket

</label>


<input

type="text"

name="nama_paket"

value="{{ $paket->nama_paket }}"

class="
w-full
border
rounded-xl
px-4
py-3
">


</div>







<!-- LOKASI -->

<div>


<label class="
block
text-sm
font-semibold
mb-2
">

Lokasi

</label>


<input
type="text"
name="lokasi"
value="{{ $paket->lokasi }}"

class="
w-full
border
rounded-xl
px-4
py-3
">


</div>








<!-- KATEGORI -->

<div>


<label class="
block
text-sm
font-semibold
mb-2
">

Kategori

</label>


<select
name="kategori"
class="
w-full
border
rounded-xl
px-4
py-3
">


<option value="Pemula"
{{ $paket->kategori == 'Pemula' ? 'selected' : '' }}>
Pemula
</option>


<option value="Adventure"
{{ $paket->kategori == 'Adventure' ? 'selected' : '' }}>
Adventure
</option>


<option value="Extreme"
{{ $paket->kategori == 'Extreme' ? 'selected' : '' }}>
Extreme
</option>


</select>


</div>







<!-- DURASI -->

<div>


<label class="
block
text-sm
font-semibold
mb-2
">

Durasi

</label>


<input
type="text"
name="durasi"

value="{{ $paket->durasi }}"

class="
w-full
border
rounded-xl
px-4
py-3
">


</div>








<!-- KAPASITAS -->

<div>


<label class="
block
text-sm
font-semibold
mb-2
">

Kapasitas Peserta

</label>


<input
type="number"
name="kapasitas"

value="{{ $paket->kapasitas }}"

class="
w-full
border
rounded-xl
px-4
py-3
">


</div>







<!-- HARGA -->

<div>


<label class="
block
text-sm
font-semibold
mb-2
">

Harga

</label>


<input
type="number"
name="harga"

value="{{ $paket->harga }}"

class="
w-full
border
rounded-xl
px-4
py-3
">


</div>







<!-- DESKRIPSI -->

<div class="col-span-2">


<label class="
block
text-sm
font-semibold
mb-2
">

Deskripsi Paket

</label>


<textarea

name="deskripsi"

rows="4"

class="
w-full
border
rounded-xl
px-4
py-3
">

{{ $paket->deskripsi }}

</textarea>


</div>



</div>







<!-- BUTTON -->

<div class="
flex
justify-end
gap-3
mt-8
">


<a href="/admin/paket"

class="
px-6
py-3
rounded-xl
border
text-gray-600
">

Batal

</a>



<button
type="submit"
class="
bg-[#496B2E]
text-white
px-6
py-3
rounded-xl
font-semibold
">
Update Paket
</button>



</div>



</form>


</div>


</div>


@endsection