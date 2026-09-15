<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    // Halaman Register
    public function register()
    {
        return view('auth.register');
    }



    // Simpan data Register
    public function storeRegister(Request $request)
    {

        $request->validate([

            'name' => 'required',

            'email' => 'required|email|unique:users',

            'password' => 'required|min:6'

        ]);

$user = User::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>Hash::make($request->password),
    'role'=>'user'
]);

        Auth::login($user);

        return redirect('/')
            ->with('success','Registrasi berhasil');

    }







    // Halaman Login
    public function login()
    {
        return view('auth.login');
    }







    // Proses Login
    public function authenticate(Request $request)
    {


        $credentials = $request->validate([

            'email' => 'required|email',

            'password' => 'required'

        ]);





if(Auth::attempt($credentials))
{

    $request->session()->regenerate();


    if(Auth::user()->role == 'admin')
    {
        return redirect('/admin');
    }


    return redirect('/');

}


if(Auth::attempt($credentials))
{

    $request->session()->regenerate();


    if(Auth::user()->role == 'admin')
    {
        return redirect('/admin');
    }


    return redirect('/');

}
        return back()

            ->with('error','Email atau password salah');


    }








    // Logout

    public function logout(Request $request)

    {


        Auth::logout();



        $request->session()->invalidate();



        $request->session()->regenerateToken();




        return redirect('/');


    }


}