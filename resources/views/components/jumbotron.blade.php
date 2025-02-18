<section id="home" class="bg-white dark:bg-gray-900 pt-16 md:pt-24 lg:pt-32">
    <div
        class="absolute inset-0 bg-[radial-gradient(circle,_rgba(0,0,0,0.1)_2px,_transparent_2px)]
 [background-size:12px_12px] dark:bg-[radial-gradient(circle,_rgba(255,255,255,0.1)_2px,_transparent_2px)]
 [mask-image:linear-gradient(to_bottom,rgba(0,0,0,0)_0%,rgba(0,0,0,1)_50%,rgba(0,0,0,0)_100%)]
 [webkit-mask-image:linear-gradient(to_bottom,rgba(0,0,0,0)_0%,rgba(0,0,0,1)_50%,rgba(0,0,0,0)_100%)">
        <div class="absolute inset-0 bg-black opacity-40"></div> <!-- Overlay -->
    </div>
    <div
        class="flex flex-col-reverse items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-12 lg:gap-8 xl:gap-0 lg:py-16">
        <!-- Teks -->
        <div class="lg:col-span-7 animate__animated animate__backInLeft">
            <h1
                class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-gray-900 dark:text-white">
                Empowering Minds with Advanced Computer Technology
            </h1>
            <p class="max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl text-gray-900 dark:text-white">
                Our computer lab provides students with the latest technology and software tools to enhance
                learning, foster collaboration, and prepare for the future of tech.
            </p>
            <a href="#about"
                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-[#1D4ED8] hover:bg-[#6183E4] focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 transform transition-all duration-300 group">
                Start Your Journey
                <svg class="w-5 h-5 ml-2 -mr-1 transition-transform transform group-hover:translate-x-2 group-hover:rotate-90"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>

        <!-- Gambar -->
        <div
            class="animate__animated animate__backInRight flex justify-center lg:col-span-5 order-last lg:order-none">
            <img class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl floating"
                src="{{ asset('images/maskot.png') }}" alt="mockup">
        </div>
    </div>
</section>
