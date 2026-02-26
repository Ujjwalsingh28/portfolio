<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Portfolio</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>
body{background:#000;}
.yellow{color:#facc15}
.bg-yellow{background:#facc15}
.divider{height:2px;background:#facc15;width:100px;margin:20px auto;}
.big-text{
position:absolute;
font-size:180px;
font-weight:800;
color:rgba(255,255,255,0.04);
z-index:0;
}
</style>
</head>

<body class="text-white font-sans relative">

<!-- NAV -->
<nav class="flex justify-between px-16 py-6 relative z-10">
<h1 class="font-bold text-xl">Ujjwal Singh</h1>
<div class="space-x-10 text-sm">
<a class="yellow">Home</a>
<a>About</a>
<a>Resume</a>
</div>
</nav>


<!-- HERO -->
<section class="px-16 py-24 relative z-10">
<p class="yellow mb-2">HELLO!</p>

<h1 class="text-6xl font-bold">
I'm <span class="yellow">Ujjwal Singh</span>
</h1>

<p class="text-2xl mt-4 text-gray-300">Laravel Backend Engineer</p>
<p class="mt-4 text-gray-400">A Software Developer</p>

<div class="mt-6 flex gap-4">
<a href="https://github.com/Ujjwalsingh28"
   target="_blank"
   class="bg-yellow text-black px-6 py-3 rounded-full">
MY WORKS
</a>

<a href="#" class="border px-6 py-3 rounded-full">
RESUME
</a>
</div>
</section>


<!-- ABOUT -->
<section class="px-16 py-20 grid grid-cols-2 gap-16 relative z-10">

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
I focus on writing clean, optimized and production ready code.
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
<section class="px-16 py-24 relative">

<h2 class="text-center text-4xl font-bold">Resume</h2>
<p class="text-center text-gray-400 mt-4 max-w-2xl mx-auto">
Passionate about continuous learning and skill development.
Strong problem solving ability with real world backend experience.
</p>

<div class="divider"></div>

<h3 class="text-center text-2xl font-semibold mb-12">Experience</h3>

<div class="grid grid-cols-2 gap-10 relative z-10">

    
    <div class="bg-[#111] p-8 rounded-lg">
        <p class="yellow font-semibold">2025</p>
        <h3 class="text-xl font-semibold mt-2">Backend Developer</h3>
        <p class="text-gray-400 mt-3 text-sm leading-6">
            <b>Backend Developer Intern (Laravel) | Technobren Infotech Private Limited.</b>
            - Develop backend logic using Laravel MVC architecture.<br>
            - Create and maintain RESTful APIs.<br>
            - Design and manage MySQL databases and relationships.<br>
            - Implement authentication, validation, and secure backend workflows.<br>
            - Collaborate with frontend developers and project teams.<br>
        </p>
    </div>
    
    <div class="bg-[#111] p-8 rounded-lg">
        <p class="yellow font-semibold">2025</p>
        <h3 class="text-xl font-semibold mt-2">Laravel Developer</h3>
        <p class="text-gray-400 mt-3 text-sm leading-6">
           Built backend APIs, authentication systems and admin panels.
           Handled production deployment and database optimization.
        </p>
    </div>
</div>


<!-- EDUCATION -->
<h3 class="text-center text-2xl font-semibold mt-20 mb-10">Education</h3>

<div class="grid grid-cols-2 gap-10">

<!--div class="bg-[#111] p-8 rounded-lg">
<p class="yellow font-semibold">2023-2026</p>
<h3 class="text-xl font-semibold mt-2">Bachelor of Technology</h3>
<p class="text-gray-400 mt-3 text-sm">
Computer Science & Engineering
</p>
</div-->

<div class="bg-[#111] p-8 rounded-lg">
<p class="yellow font-semibold">2022-2025</p>
<h3 class="text-xl font-semibold mt-2">Diploma</h3>
<p class="text-gray-400 mt-3 text-sm">
Computer Science & Engineering
</p>
</div>

</div>

</section>



<!-- PROJECTS -->
<section class="px-16 py-24">

<h2 class="text-center text-2xl font-semibold mb-12">Projects</h2>

<div class="grid grid-cols-3 gap-8">

<div class="bg-[#111] p-6 rounded-lg">
<h3 class="text-xl font-semibold">Croose</h3>
<p class="text-gray-400 text-sm mt-3 leading-6">
Developed the complete backend for a portfolio and agent-based platform using Laravel. Built
scalable APIs, authentication system, and database structure to support admin and customer
workflows.
</p>
</div>

<div class="bg-[#111] p-6 rounded-lg">
<h3 class="text-xl font-semibold">PET-CARE</h3>
<p class="text-gray-400 text-sm mt-3 leading-6">
(Pet Care Website): A web application that manages pet care services and health
information.
</p>
</div>

<div class="bg-[#111] p-6 rounded-lg">
<h3 class="text-xl font-semibold">UP-TOUR</h3>
<p class="text-gray-400 text-sm mt-3 leading-6">
(Tour & Travel Website): A responsive travel website built using HTML, CSS, JavaScript,
Bootstrap, and Django.
</p>
</div>

</div>

</section>

</body>
</html>