<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{


    // Tampilkan semua paket
    public function index()
    {

        $pakets = Paket::all();

        return view(
            'admin.paket.index',
            compact('pakets')
        );

    }




    // Halaman tambah paket
    public function create()
    {

        return view('admin.paket.create');

    }






    // Simpan paket baru
    public function store(Request $request)
    {


        $request->validate([

            'nama_paket' => 'required',

            'lokasi' => 'required',

            'kategori' => 'required',

            'durasi' => 'required',

            'kapasitas' => 'required',

            'harga' => 'required',

            'deskripsi' => 'required',

        ]);



        $gambar = null;



        if($request->hasFile('gambar')){


            $gambar = $request
                ->file('gambar')
                ->store('paket','public');


        }




        Paket::create([


            'nama_paket' => $request->nama_paket,

            'lokasi' => $request->lokasi,

            'kategori' => $request->kategori,

            'durasi' => $request->durasi,

            'kapasitas' => $request->kapasitas,

            'harga' => $request->harga,

            'deskripsi' => $request->deskripsi,

            'gambar' => $gambar,


        ]);




        return redirect()

            ->route('paket.index')

            ->with(
                'success',
                'Paket berhasil ditambahkan'
            );


    }







    // Detail paket
    public function show(Paket $paket)
    {


        return view(
            'admin.paket.show',
            compact('paket')
        );


    }







    // Edit
    public function edit(Paket $paket)
    {


        return view(
            'admin.paket.edit',
            compact('paket')
        );


    }






// Update
public function update(Request $request, Paket $paket)
{

    $request->validate([

        'nama_paket' => 'required',
        'lokasi' => 'required',
        'kategori' => 'required',
        'durasi' => 'required',
        'kapasitas' => 'required',
        'harga' => 'required',
        'gambar' => 'nullable|image|max:2048',

    ]);



    // Jika upload gambar baru

    if($request->hasFile('gambar')){


        $gambar = $request
            ->file('gambar')
            ->store('paket','public');


        $paket->gambar = $gambar;

    }




    $paket->nama_paket = $request->nama_paket;

    $paket->lokasi = $request->lokasi;

    $paket->kategori = $request->kategori;

    $paket->durasi = $request->durasi;

    $paket->kapasitas = $request->kapasitas;

    $paket->harga = $request->harga;

    $paket->deskripsi = $request->deskripsi;



    $paket->save();



    return redirect()

        ->route('paket.index')

        ->with(

            'success',

            'Paket berhasil diperbarui'

        );

}
    

    // Hapus
    public function destroy(Paket $paket)
    {


        $paket->delete();



        return redirect()

            ->route('paket.index')

            ->with(
                'success',
                'Paket berhasil dihapus'
            );


    }


}