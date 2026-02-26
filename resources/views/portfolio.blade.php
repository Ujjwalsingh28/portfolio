<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ujjwal Singh Portfolio</title>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
body{background:#000;font-family:Poppins;}
html{scroll-behavior:smooth;}
.yellow{color:#facc15}
.bg-yellow{background:#facc15}

.card{background:#111;transition:0.3s;}
.card:hover{transform:translateY(-6px);box-shadow:0 0 25px rgba(250,204,21,0.25);}

section{opacity:0;transform:translateY(40px);transition:0.6s;}
section.show{opacity:1;transform:translateY(0);}
</style>
</head>

<body class="text-white">

<!-- NAV -->
<nav id="navbar"
class="fixed top-0 left-0 w-full z-50 bg-black/70 backdrop-blur border-b border-gray-800 flex justify-between px-8 md:px-16 py-5">
<h1 class="font-bold text-xl">Ujjwal Singh</h1>

<div class="space-x-6 text-sm">
<a href="#" class="yellow">Home</a>
<a href="#about">About</a>
<a href="#resume">Resume</a>
<a href="#projects">Projects</a>
</div>
</nav>


<!-- HERO -->
<section class="px-8 md:px-16 pt-32 pb-24">
<p class="yellow mb-2">HELLO!</p>

<h1 class="text-5xl md:text-6xl font-bold">
I'm <span class="yellow">Ujjwal Singh</span>
</h1>

<p class="text-2xl mt-4 text-gray-300">
<span id="typing"></span>
</p>

<p class="mt-4 text-gray-400">A Software Developer</p>

<div class="mt-6 flex gap-4 flex-wrap">
<a href="https://github.com/Ujjwalsingh28"
class="bg-yellow text-black px-6 py-3 rounded-full">
MY WORKS
</a>

<a href="/resume/Ujjwal Singh.pdf" download
class="border px-6 py-3 rounded-full hover:bg-white hover:text-black transition">
DOWNLOAD CV
</a>
</div>
</section>


<!-- ABOUT -->
<section id="about" class="px-8 md:px-16 py-20 grid md:grid-cols-2 gap-16">

<div>
<div class="flex gap-4">
<img src="/image/ujjwal.png" class="w-28 h-28 rounded object-cover">

<div class="text-sm space-y-1">
<p><b>Name:</b> Ujjwal Singh</p>
<p><b>Role:</b> Laravel Developer</p>
<p><b>Experience:</b> 6 Months</p>
<p><b>Location:</b> India</p>
</div>
</div>

<div class="mt-10 space-y-6">
<div>
<p>Laravel 90%</p>
<div class="bg-gray-800 h-2 mt-1">
<div class="bg-yellow h-2 w-[90%]"></div>
</div>
</div>

<div>
<p>PHP 85%</p>
<div class="bg-gray-800 h-2 mt-1">
<div class="bg-yellow h-2 w-[85%]"></div>
</div>
</div>

<div>
<p>MySQL 80%</p>
<div class="bg-gray-800 h-2 mt-1">
<div class="bg-yellow h-2 w-[80%]"></div>
</div>
</div>

<div>
<p>Django 50%</p>
<div class="bg-gray-800 h-2 mt-1">
<div class="bg-yellow h-2 w-[50%]"></div>
</div>
</div>
</div>
</div>


<div>
<h2 class="text-4xl font-bold mb-6">About Me</h2>

<p class="text-gray-400 leading-7">
Motivated backend developer with strong experience in Laravel APIs,
authentication systems, admin panels and scalable applications.
</p>

<div class="mt-6 text-sm space-y-2">
<p><b>Email:</b> ujjwalsingh28003@gmail.com</p>
<p><b>Language:</b> Hindi, English</p>
<p><b>Education:</b> Diploma in Computer Science & Engineering</p>
</div>

<a href="https://www.linkedin.com/in/ujjwal-singh-664a54339"
target="_blank"
class="bg-yellow text-black px-6 py-2 mt-6 rounded-full inline-block">
LinkedIn
</a>
</div>

</section>



<!-- RESUME -->
<section id="resume" class="px-8 md:px-16 py-24">
<h2 class="text-center text-4xl font-bold">Resume</h2>

<div class="h-[2px] bg-yellow w-24 mx-auto my-6"></div>

<div class="grid md:grid-cols-2 gap-10">

<div class="card p-8 rounded-lg">
<p class="yellow font-semibold">2025</p>
<h3 class="text-xl font-semibold mt-2">Backend Developer Intern</h3>
<p class="text-gray-400 mt-3 text-sm">
Technobren Infotech Pvt Ltd  
Built REST APIs and authentication systems.
</p>
</div>

<div class="card p-8 rounded-lg">
<p class="yellow font-semibold">2025</p>
<h3 class="text-xl font-semibold mt-2">Laravel Developer</h3>
<p class="text-gray-400 mt-3 text-sm">
Developed admin panels and backend systems.
</p>
</div>

</div>
</section>

<!-- EDUCATION -->
<h3 class="text-center text-2xl font-semibold mt-20 mb-12">Education</h3>

<div class="grid md:grid-cols-2 gap-10">

<div class="card p-8 rounded-lg">
<p class="yellow font-semibold">2022 - 2025</p>
<h3 class="text-xl font-semibold mt-2">Diploma in Computer Science & Engineering</h3>
<p class="text-gray-400 mt-3 text-sm leading-6">
Completed Diploma with focus on programming, database systems,
web development and backend technologies.
</p>
</div>

<div class="card p-8 rounded-lg">
<p class="yellow font-semibold">2020 - 2022</p>
<h3 class="text-xl font-semibold mt-2">Higher Secondary Education</h3>
<p class="text-gray-400 mt-3 text-sm leading-6">
Completed 12th with science stream and strong interest in technology.
</p>
</div>

</div>

<!-- PROJECTS -->
<section id="projects" class="px-8 md:px-16 py-24">
<h2 class="text-center text-3xl font-bold mb-12">Projects</h2>

<div class="grid md:grid-cols-3 gap-8">

<div class="card p-6 rounded-lg">
<h3 class="text-xl font-semibold">Croose</h3>
<p class="text-gray-400 text-sm mt-3">
Laravel backend with APIs and admin panel.
</p>
</div>

<div class="card p-6 rounded-lg">
<h3 class="text-xl font-semibold">PET-CARE</h3>
<p class="text-gray-400 text-sm mt-3">
Pet care management web app.
</p>
</div>

<div class="card p-6 rounded-lg">
<h3 class="text-xl font-semibold">UP-TOUR</h3>
<p class="text-gray-400 text-sm mt-3">
Travel website using Django.
</p>
</div>

</div>
</section>


<script>
const text="Laravel Backend Developer";
let i=0;
function type(){
if(i<text.length){
document.getElementById("typing").innerHTML+=text.charAt(i);
i++;
setTimeout(type,60);
}}
type();

const observer=new IntersectionObserver(entries=>{
entries.forEach(entry=>{
if(entry.isIntersecting){entry.target.classList.add('show');}
});
});
document.querySelectorAll('section').forEach(sec=>observer.observe(sec));

window.addEventListener("scroll",function(){
const nav=document.getElementById("navbar");
if(window.scrollY>50){
nav.classList.add("bg-black");
}else{
nav.classList.remove("bg-black");
}
});
</script>
<!-- FOOTER -->
<footer class="bg-[#0a0a0a] border-t border-gray-800 px-8 md:px-16 py-10">

<div class="grid md:grid-cols-3 gap-8">

<!-- Left -->
<div>
<h3 class="text-xl font-semibold mb-3">Ujjwal Singh</h3>
<p class="text-gray-400 text-sm leading-6">
Laravel Backend Developer passionate about building scalable,
secure and production ready web applications.
</p>
</div>

<!-- Center -->
<div>
<h4 class="font-semibold mb-3">Quick Links</h4>
<ul class="space-y-2 text-gray-400 text-sm">
<li><a href="#" class="hover:text-yellow-400 transition">Home</a></li>
<li><a href="#about" class="hover:text-yellow-400 transition">About</a></li>
<li><a href="#resume" class="hover:text-yellow-400 transition">Resume</a></li>
<li><a href="#projects" class="hover:text-yellow-400 transition">Projects</a></li>
</ul>
</div>

<!-- Right -->
<div>
<h4 class="font-semibold mb-3">Connect</h4>
<div class="flex gap-4 text-gray-400 text-sm">

<a href="https://github.com/Ujjwalsingh28"
target="_blank"
class="hover:text-yellow-400 transition">
GitHub
</a>

<a href="https://www.linkedin.com/in/ujjwal-singh-664a54339"
target="_blank"
class="hover:text-yellow-400 transition">
LinkedIn
</a>

<a href="mailto:ujjwalsingh28003@gmail.com"
class="hover:text-yellow-400 transition">
Email
</a>

</div>
</div>

</div>

<div class="border-t border-gray-800 mt-10 pt-6 text-center text-gray-500 text-sm">
© 2025 Ujjwal Singh. All Rights Reserved.
</div>

</footer>

</body>
</html>