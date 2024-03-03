<nav class="w-full bg-primary text-white" x-data="{ open: false }">
    <div class="flex justify-between items-center block sm:hidden">
        <a href="#" class="md:hidden hover:bg-white text-yellow-500 hover:underline hover:text-primary focus:underline focus:bg-white focus:text-primary focus:outline-none rounded py-2 px-4 mx-2">
            EdrianDelosReyes
        </a>
        <a
            href="#"
            class="md:hidden mr-1 p-2 px-3 hover:bg-white hover:text-primary focus:bg-white focus:text-primary focus:outline-none justify-end items-end"
            @click="open = !open"
        >
        <span class="sr-only">Menu</span>
            <i class="fas fa-bars"></i>
            {{-- <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i> --}}
        </a>
    </div>
    <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
        <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold mt-0 px-6 py-2">
            <a href="/" accesskey="h" class="hidden sm:inline-block hover:bg-white text-yellow-500 hover:underline hover:text-primary focus:underline focus:bg-white focus:text-primary focus:outline-none rounded py-2 px-4 mx-2">
                EdrianDelosReyes
            </a>
            <a href="/about" accesskey="a" class="hover:bg-white hover:text-primary focus:bg-white focus:text-primary focus:outline-none rounded py-2 px-4 mx-2 transition duration-300">ABOUT <span class="hidden md:inline-block">ME</span></a>
            <a href="#projects" accesskey="p" class="hover:bg-white hover:text-primary focus:bg-white focus:text-primary focus:outline-none rounded py-2 px-4 mx-2 transition duration-300"> <span class="hidden md:inline-block">MY</span> PROJECTS</a>
            <a href="#contact" accesskey="c" class="hover:bg-white hover:text-primary focus:bg-white focus:text-primary focus:outline-none rounded py-2 px-4 mx-2 transition duration-300">CONTACT <span class="hidden md:inline-block">ME</span></a>
        </div>
    </div>
</nav>