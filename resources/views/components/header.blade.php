<header class="bg-primary text-white ">
    <div class="grid grid-cols-1 sm:grid-cols-12 gpa-4 text-center">
        <div class="sm:col-span-8">
            <div x-data="{ batch: 0, batches: [
                {
                    h1: 'Hi! I\'m Edrian...',
                    paragraph1: 'a 24-year old WEB DEVELOPER from the Philippines, and...',
                    paragraph2: 'Did you know?',
                    button: 'What\'s that?'
                },
                {
                    h1: 'Now you\'ll know...',
                    paragraph1: 'I had a hard time looking at the camera while taking that picture you\'re seeing now.',
                    paragraph2: 'Because...',
                    button: 'Because of what?'
                },
                {
                    h1: 'I am legally blind!',
                    paragraph1: 'Yes, I do have an eye condition that worsened my central vision, that\'s why I now mostly rely on my peripheral vision,, and this eye disease is called LHON ',
                    paragraph2: '',
                    button: 'Is that inborn?'
                },
                {
                    h1: 'No, it\'s not inborn.',
                    paragraph1: 'I had a perfect eyesight when I was born, but LHON was triggered when I was 15 years old due to my genetics. It\'s actually a very rare eye condition, but I guess, I was too lucky to get this.',
                    paragraph2: '',
                    button: 'Tell me more, please!'
                },
                {
                    h1: 'Here\'s my dream!',
                    paragraph1: 'Being fund of computer since I was 7 years old, I decided to pursue BS in Computer Science to transform the world of technology for my fellow visually impaired persons. Yes, a pretty ambitious dream, but well, it\'s free to dream big.',
                    paragraph2: '',
                    button: 'WHAT A DREAM!'
                },
                {
                    h1: 'Want more?',
                    paragraph1: 'It seems like you find me interesting given that you\'re already at this point.',
                    paragraph2: '',
                    button: 'Let\'s connect!'
                },
            ] }" class="px-2">
                <template x-for="(item, index) in batches" :key="index">
                    <div x-show="batch === index" class="batch-content">
                        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-5xl font-serif font-bold mt-8 mb-4 " x-text="item.h1"></h1>
                        <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl px-4 sm:px-6 md:px-8 lg:px-10 mb-4" x-text="item.paragraph1"></p>
                        <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl px-4 sm:px-6 md:px-8 lg:px-10 mb-4" x-text="item.paragraph2"></p>
                        <button @click="batch === batches.length - 1 ? window.location.href='/about' : batch = index + 1" class="bg-white text-primary border border-primary hover:bg-primary hover:text-white hover:border hover:border-white focus:bg-primary focus:text-white focus:border focus:border-white focus:outline-none py-2 px-6 rounded-full text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl font-semibold shadow-md transition duration-300" x-text="item.button"></button>
                </template>
            </div>
        </div>
        <div class="sm:col-span-4 flex justify-center">
            <img src="{{ asset('images/EVDR 02.png') }}" alt="Edrian Delos Reyes on a blue polo shirt with white collar and a black jacket" class="w-80 h-auto object-cover">
        </div>
    </div>
</header>