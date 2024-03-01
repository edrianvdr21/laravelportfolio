@extends('layout')

@section('content')

<div class="flex flex-col items-center">
    <h1 class="font-bold text-gray-800 uppercase text-2xl sm:text-3xl md:text-4xl lg:text-5xl hover:text-gray-700" id="projects">
        Featured Projects
    </h1>
    <p class="text-xs sm:text-sm md:text-base lg:text-lg text-center  text-gray-600">
        Here are the projects I made during my time in college.
    </p>
</div>

<div class="grid grid-cols-1 sm:grid-cols-12 gap-4 hover:bg-primary hover:text-white mb-4">
    <div class="px-2 sm:px-0 sm:col-span-4 sm:col-start-2 flex items-center justify-center py-4">
        <img src="{{ asset('images/projects/2.4 CCSS Logo.png') }}" alt="CCSS Logo with a microchip and gear icons with a background of cracked barriers and text saying, DMCFI - College of Computer Studies and Systems." class="w-full">
    </div>
    <div class="sm:col-span-6 flex flex-col justify-center text-center text items-center sm:text-left sm:items-start px-10 sm:px-0">
        <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-serif font-bold mb-2">
            CCSS Logo
        </h2>
        <div class="flex flex-wrap gap-2 justify-center md:justify-start">
            <span class="inline-block bg-primary text-white px-3 py-1 rounded-full text-sm">Logo</span>
            <span class="inline-block bg-primary text-white px-3 py-1 rounded-full text-sm">Graphic</span>
        </div>
        <p class="text-xs">
            I created the official logo of our college department, College of Computer Studies and Systems. The symbolic figure represents the expertise in technological advancement and innovation inspired by the institution’s core values which are Faith and Excellence that are represented with microchip and the gear icons respectively.
        </p>
        <button type="submit" class="font-bold bg-white text-primary border border-primary py-2 px-4 rounded-md mt-4 hover:bg-primary hover:text-white hover:border-white focus:bg-primary focus:text-white focus:border-white focus:outline-none transition duration-300">
            View More Details
        </button>
    </div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-12 gap-4 hover:bg-primary hover:text-white mb-4">
    <div class="px-2 sm:px-0 sm:col-span-4 sm:col-start-2 flex items-center justify-center py-4">
        <img src="{{ asset('images/projects/2.3 MightyJuan.png') }}" alt="Screenshot of MighyJuan's user interface">
    </div>
    <div class="sm:col-span-6 flex flex-col justify-center text-center text items-center sm:text-left sm:items-start px-10 sm:px-0">
        <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-serif font-bold mb-2">
            MightyJuan
        </h2>
        <div class="flex flex-wrap gap-2 justify-center md:justify-start">
            <span class="inline-block bg-white text-primary px-3 py-1 rounded-full text-sm">Bootstrap</span>
            <span class="inline-block bg-white text-primary px-3 py-1 rounded-full text-sm">PHP</span>
            <span class="inline-block bg-white text-primary px-3 py-1 rounded-full text-sm">Code Igniter</span>
            <span class="inline-block bg-white text-primary px-3 py-1 rounded-full text-sm">MySQL</span>
        </div>
        <p class="text-xs leading-relaxed">
            MightyJuan is a project made during Blue Hacks 2023, a 24-hour hackathon conducted in ATeneo De Manila University. The theme was given on that day where the students must come up with an idea and a mock up for the proposed system under the given theme during the event.
        </p>
        <button type="submit" class="font-bold bg-white text-primary border border-primary py-2 px-4 rounded-md mt-4 hover:bg-primary hover:text-white hover:border-white focus:bg-primary focus:text-white focus:border-white focus:outline-none transition duration-300">
            View More Details
        </button>
    </div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-12 gap-4 hover:bg-primary hover:text-white mb-4">
    <div class="px-2 sm:px-0 sm:col-span-4 sm:col-start-2 flex items-center justify-center py-4">
        <img src="{{ asset('images/projects/2.2 PWD Database.png') }}" alt="Screenshot of PWD Database's user interface">
    </div>
    <div class="sm:col-span-6 flex flex-col justify-center text-center text items-center sm:text-left sm:items-start px-10 sm:px-0">
        <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-serif font-bold mb-2">
            PWD Database
        </h2>
        <div class="flex flex-wrap gap-2 justify-center md:justify-start">
            <span class="inline-block bg-primary text-white px-3 py-1 rounded-full text-sm">PHP</span>
            <span class="inline-block bg-primary text-white px-3 py-1 rounded-full text-sm">MySQL</span>
            <span class="inline-block bg-primary text-white px-3 py-1 rounded-full text-sm">WCAG</span>
        </div>
        <p class="text-xs leading-relaxed">
            This is a school project intended to practice database management, thus, I created a database system for persons with disability with PHP (native) and MySQL with features CRUD, searching, and filtering data.
        </p>
        <button type="submit" class="font-bold bg-white text-primary border border-primary py-2 px-4 rounded-md mt-4 hover:bg-primary hover:text-white hover:border-white focus:bg-primary focus:text-white focus:border-white focus:outline-none transition duration-300">
            View More Details
        </button>
    </div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-12 gap-4 hover:bg-primary hover:text-white mb-4">
    <div class="px-2 sm:px-0 sm:col-span-4 sm:col-start-2 flex items-center justify-center py-4">
        <img src="{{ asset('images/projects/2.1 PWD LIFE.png') }}" alt="Screenshot of PWD LIFE's user interface">
    </div>
    <div class="sm:col-span-6 flex flex-col justify-center text-center text items-center sm:text-left sm:items-start px-10 sm:px-0">
        <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-serif font-bold mb-2">
            PWD LIFE
        </h2>
        <div class="flex flex-wrap gap-2 justify-center md:justify-start">
            <span class="inline-block bg-white text-primary px-3 py-1 rounded-full text-sm">HTML</span>
            <span class="inline-block bg-white text-primary px-3 py-1 rounded-full text-sm">CSS</span>
            <span class="inline-block bg-white text-primary px-3 py-1 rounded-full text-sm">JavaScript Igniter</span>
            <span class="inline-block bg-white text-primary px-3 py-1 rounded-full text-sm">WCAG</span>
        </div>
        <p class="text-xs leading-relaxed">
            This is a school project to hone the fundamental knowledge with HTML, CSS, and Javascript. Since I chose to target the persons with disability users, I designed this website following the Web Content Accessibility Guidelines to ensure its accessibility features.
        </p>
        <button type="submit" class="font-bold bg-white text-primary border border-primary py-2 px-4 rounded-md mt-4 hover:bg-primary hover:text-white hover:border-white focus:bg-primary focus:text-white focus:border-white focus:outline-none transition duration-300">
            View More Details
        </button>
    </div>
</div>

@include('components.contact')

@endsection