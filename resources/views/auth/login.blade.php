<!DOCTYPE html>
<html lang="id">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login - Canyventure</title>

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


.login-card{
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

src="{{ asset('images/login.jpg') }}"

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
bottom-14
left-12
text-white
max-w-lg
">


<h1 class="
text-5xl
font-bold
leading-tight
">

Petualangan<br>
Canyonmu<br>
Menunggu!

</h1>



<p class="
mt-5
text-lg
text-gray-200
">

Jelajahi keindahan alam Indonesia
bersama Canyventure dengan aman dan nyaman.

</p>


</div>


</div>









<!-- ================= RIGHT ================= -->


<div class="
w-full
lg:w-1/2
min-h-screen
flex
items-center
justify-center
px-10
py-10
">





<div class="
w-full
max-w-md
login-card
">





<!-- CARD -->


<div class="
bg-white
rounded-3xl
shadow-xl
p-6
">





<h3 class="
text-2xl
font-bold
text-[#496B2E]
text-center
">

Selamat Datang!

</h3>




<p class="
text-gray-500
text-sm
mt-1
text-center
">

Selamat datang kembali, silakan masuk ke akun Anda.

</p>







<!-- GOOGLE -->


<button

class="
mt-5
w-full
border
border-gray-300
rounded-xl
py-3
flex
items-center
justify-center
gap-3
text-gray-600
hover:bg-gray-50
transition
"

>


<img

src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg"

class="w-5"

>


Masuk dengan Google


</button>







<!-- DIVIDER -->


<div class="

flex
items-center
gap-3
my-4

">


<div class="
h-px
bg-gray-200
flex-1
">
</div>



<span class="
text-xs
text-gray-400
">

Atau

</span>



<div class="
h-px
bg-gray-200
flex-1
">
</div>



</div>









<form action="{{ route('login') }}" method="POST">

@csrf







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

placeholder="Masukkan kata sandi"

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

onclick="showPassword()"

class="

absolute
right-4
top-4
text-gray-400

">


<i id="eye" class="fa-solid fa-eye"></i>


</button>



</div>











<div class="

flex
justify-between
items-center
mt-4
text-sm

">



<label class="

flex
items-center
gap-2
text-gray-500

">


<input type="checkbox">


Ingat saya


</label>





<a href="#"

class="
text-[#496B2E]
">

Lupa password?

</a>



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
Masuk
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
</button>







</form>









<p class="

text-center
text-sm
text-gray-500
mt-4

">


Belum punya akun?


<a

href="{{ route('register') }}"

class="

text-[#496B2E]
font-semibold

">


Daftar


</a>


</p>








</div>



</div>


</div>






<script>

function showPassword(){

let password = document.getElementById('password');

let eye = document.getElementById('eye');



if(password.type === "password"){

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