<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Daftar - Canyventure</title>

@vite('resources/css/app.css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<style>

@keyframes zoomImage {
from{
    transform:scale(1);
}
to{
    transform:scale(1.08);
}
}


@keyframes fadeIn {
from{
    opacity:0;
    transform:translateY(20px);
}
to{
    opacity:1;
    transform:translateY(0);
}
}


.image-animation{
    animation:zoomImage 15s infinite alternate;
}


.register-card{
    animation:fadeIn .8s ease;
}

</style>


</head>


<body class="
min-h-screen
overflow-x-hidden
bg-[#F8F8F5]
">



<div class="
min-h-screen
w-full
flex
">





<!-- ================= LEFT IMAGE ================= -->


<div class="
hidden
lg:block
w-1/2
min-h-screen
relative
overflow-hidden
">

<a 
href="{{ url('/') }}"
class="
absolute
top-8
left-8
z-20
w-12
h-12
rounded-full
bg-white/20
backdrop-blur-md
flex
items-center
justify-center
text-white
text-xl
hover:bg-white/40
transition
"
>

<i class="fa-solid fa-arrow-left"></i>

</a>


<img

src="{{ asset('images/register.jpg') }}"

class="
absolute
w-full
h-full
object-cover
image-animation
"

>


<div class="
absolute
inset-0
bg-black/40
">
</div>



<div class="
absolute
bottom-16
left-12
text-white
max-w-lg
">


<h1 class="
text-5xl
font-bold
leading-tight
">

Bergabung<br>
Dengan<br>
Canyventure!

</h1>



<p class="
mt-5
text-lg
text-gray-200
">

Daftar sekarang dan mulai petualangan
canyoning terbaik bersama kami.

</p>



</div>



</div>











<!-- ================= RIGHT FORM ================= -->


<div class="
w-full
lg:w-1/2
flex
items-center
justify-center
px-10
py-16
">






<div class="
w-full
max-w-md
register-card
">






<div class="
bg-white
rounded-3xl
shadow-xl
p-7
">





<h3 class="
text-2xl
font-bold
text-[#496B2E]
text-center
">

Buat Akun Baru

</h3>



<p class="
text-gray-500
text-sm
mt-2
text-center
">

Lengkapi data diri Anda untuk bergabung bersama Canyventure.

</p>








<form action="{{ route('register') }}" method="POST">

@csrf





<label class="
text-sm
font-medium
text-gray-700
">

Nama Lengkap

</label>


<input

type="text"

name="name"

placeholder="Masukkan nama lengkap"

class="
mt-2
mb-4
w-full
rounded-xl
border
px-4
py-3
outline-none
focus:ring-2
focus:ring-[#496B2E]
"

>
@error('name')
    <span class="text-red-500 text-sm">{{ $message }}</span>
@enderror








<label class="
text-sm
font-medium
text-gray-700
">

Email

</label>


<input

type="email"

name="email"

placeholder="Masukkan email"

class="
mt-2
mb-4
w-full
rounded-xl
border
px-4
py-3
outline-none
focus:ring-2
focus:ring-[#496B2E]
"

>
@error('email')
    <span class="text-red-500 text-sm">{{ $message }}</span>
@enderror








<label class="
text-sm
font-medium
text-gray-700
">

Kata Sandi

</label>



<div class="relative">
    
    
    <input
    
    id="password"
    
    type="password"
    
    name="password"
    
placeholder="Buat kata sandi"

class="
mt-2
mb-4
w-full
rounded-xl
border
px-4
py-3
outline-none
focus:ring-2
focus:ring-[#496B2E]
"

>

@error('password')
    <span class="text-red-500 text-sm">{{ $message }}</span>
@enderror


<button

type="button"

onclick="showPassword('password','eye1')"

class="
absolute
right-4
top-4
text-gray-400
">


<i id="eye1" class="fa-solid fa-eye"></i>


</button>



</div>









<label class="
text-sm
font-medium
text-gray-700
">

Konfirmasi Kata Sandi

</label>



<div class="relative">


<input

id="password_confirmation"

type="password"

name="password_confirmation"

placeholder="Ulangi kata sandi"

class="
mt-2
w-full
rounded-xl
border
px-4
py-3
outline-none
focus:ring-2
focus:ring-[#496B2E]
"

>



<button

type="button"

onclick="showPassword('password_confirmation','eye2')"

class="
absolute
right-4
top-4
text-gray-400
">


<i id="eye2" class="fa-solid fa-eye"></i>


</button>



</div>









<button

type="submit"

class="
relative
overflow-hidden

mt-6
w-full

bg-[#496B2E]
text-white

py-3
rounded-xl

font-semibold

transition-all
duration-300

hover:shadow-xl
hover:-translate-y-1

active:bg-black
active:scale-95

group

">


<span class="relative z-10">
Daftar
</span>


<span class="
absolute
inset-0
bg-white/20
translate-x-[-100%]

group-hover:translate-x-[100%]

transition-transform
duration-700
">

</span>


</button>







</form>









<p class="
text-center
text-sm
text-gray-500
mt-5
">

Sudah memiliki akun?


<a

href="{{ route('login') }}"

class="
text-[#496B2E]
font-semibold
">

Masuk

</a>


</p>






</div>



</div>



</div>







</div>







<script>

function showPassword(id,eyeId){

let password=document.getElementById(id);

let eye=document.getElementById(eyeId);


if(password.type==="password"){

password.type="text";

eye.classList.remove("fa-eye");

eye.classList.add("fa-eye-slash");


}else{


password.type="password";

eye.classList.remove("fa-eye-slash");

eye.classList.add("fa-eye");


}

}

</script>





</body>

</html>