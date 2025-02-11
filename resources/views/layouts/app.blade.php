<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/logo/logolabkom.png') }}">
    <title>Labkom Unsika</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white dark:bg-[#111827]">
    {{-- navbar --}}
    <nav class="bg-white dark:bg-[#111827] fixed w-full z-20 top-0 dark:border-gray-600 shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#home" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo/logolabkom.png') }}" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-900 dark:text-white">Labkom
                    Unsika</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button id="theme-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#home"
                            class="nav-link block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="nav-link block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#services"
                            class="nav-link block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#team"
                            class="nav-link block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                    </li>
                    <li>
                        <a href="#activity"
                            class="nav-link block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Activity</a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="nav-link block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- jumbotron --}}
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
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 transform transition-all duration-300 group">
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

    {{-- counter section --}}
    <section class="bg-white dark:bg-gray-900 py-12 mt-4">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <!-- Card 1 -->
                <div
                    class="relative p-6 bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden group cursor-pointer">
                    <div
                        class="absolute inset-0 bg-blue-600 scale-y-0 origin-bottom transition-transform duration-300 ease-out group-hover:scale-y-100">
                    </div>
                    <div class="relative flex justify-center mb-2">
                        <svg class="w-10 h-10 text-blue-500 transition-colors duration-300 group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>
                    </div>
                    <h2 class="relative text-4xl font-bold text-gray-900 dark:text-white group-hover:text-white count"
                        data-count="120000">0</h2>
                    <p class="relative text-gray-500 dark:text-gray-400 group-hover:text-white">Total Users</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="relative p-6 bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden group cursor-pointer">
                    <div
                        class="absolute inset-0 bg-blue-600 scale-y-0 origin-bottom transition-transform duration-300 ease-out group-hover:scale-y-100">
                    </div>
                    <div class="relative flex justify-center mb-2">
                        <svg class="w-10 h-10 text-green-500 transition-colors duration-300 group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 9l-6 6m0 0l6 6m-6-6h12"></path>
                        </svg>
                    </div>
                    <h2 class="relative text-4xl font-bold text-gray-900 dark:text-white group-hover:text-white count"
                        data-count="3500">0</h2>
                    <p class="relative text-gray-500 dark:text-gray-400 group-hover:text-white">Completed Projects</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="relative p-6 bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden group cursor-pointer">
                    <div
                        class="absolute inset-0 bg-blue-600 scale-y-0 origin-bottom transition-transform duration-300 ease-out group-hover:scale-y-100">
                    </div>
                    <div class="relative flex justify-center mb-2">
                        <svg class="w-10 h-10 text-yellow-500 transition-colors duration-300 group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 8h16M4 16h16"></path>
                        </svg>
                    </div>
                    <h2 class="relative text-4xl font-bold text-gray-900 dark:text-white group-hover:text-white count"
                        data-count="50000">0</h2>
                    <p class="relative text-gray-500 dark:text-gray-400 group-hover:text-white">Hours of Support</p>
                </div>

                <!-- Card 4 -->
                <div
                    class="relative p-6 bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden group cursor-pointer">
                    <div
                        class="absolute inset-0 bg-blue-600 scale-y-0 origin-bottom transition-transform duration-300 ease-out group-hover:scale-y-100">
                    </div>
                    <div class="relative flex justify-center mb-2">
                        <svg class="w-10 h-10 text-red-500 transition-colors duration-300 group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6">
                            </path>
                        </svg>
                    </div>
                    <h2 class="relative text-4xl font-bold text-gray-900 dark:text-white group-hover:text-white count"
                        data-count="250">0</h2>
                    <p class="relative text-gray-500 dark:text-gray-400 group-hover:text-white">Hard Workers</p>
                </div>
            </div>
        </div>
    </section>

    {{-- about us --}}
    <section id="about" class="pt-16 md:pt-24 lg:pt-32 bg-gray-100 dark:bg-gray-800 py-16">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Gambar -->
                <div data-aos="fade-right" data-aos-duration="1000" class="flex justify-center">
                    <img class="w-full max-w-sm md:max-w-md lg:max-w-lg" src="{{ asset('images/maskot-4.png') }}"
                        alt="About Us Image">
                </div>

                <!-- Teks -->
                <div data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-4">About Us</h2>
                    <p class="text-gray-700 dark:text-gray-300 mb-6">
                        We are committed to providing top-notch services with cutting-edge technology.
                        Our team of professionals ensures that your experience is seamless and efficient.
                    </p>
                    <!-- List dengan nomor -->
                    <ol class="max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                        <li>
                            <span class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span> with <span
                                class="font-semibold text-gray-900 dark:text-white">70</span> points
                        </li>
                        <li>
                            <span class="font-semibold text-gray-900 dark:text-white">Jese Leos</span> with <span
                                class="font-semibold text-gray-900 dark:text-white">63</span> points
                        </li>
                        <li>
                            <span class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span> with
                            <span class="font-semibold text-gray-900 dark:text-white">57</span> points
                        </li>
                    </ol>
                    <a href="#"
                        class="mt-10 md:mt-10 lg:mt-10 inline-flex items-center px-5 py-3 text-base font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                        Learn More
                        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Section with Card Carousel --}}
    <section id="services" class="relative pt-10 md:pt-15 lg:pt-24 py-10" x-data="{
        activeSlide: 0,
        slides: [0, 1, 2],
        totalSlides: 3,
    
        next() {
            this.activeSlide = this.activeSlide === this.totalSlides - 1 ? 0 : this.activeSlide + 1
        },
    
        prev() {
            this.activeSlide = this.activeSlide === 0 ? this.totalSlides - 1 : this.activeSlide - 1
        },
    
        isActive(slide) {
            return this.activeSlide === slide
        }
    }">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-8 text-center">Our New Services</h2>
            <p class="text-lg text-gray-700 dark:text-gray-400 text-center mb-12">
                We provide a range of innovative solutions that help your business grow and succeed in a fast-changing
                digital landscape. Explore our services below and see how we can help you achieve your goals.
            </p>

            <!-- Carousel Container -->
            <div class="relative">
                <!-- Previous Button -->
                <button @click="prev" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-6 z-10 group">
                    <span
                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-700/90 dark:bg-blue-600/90 shadow-lg hover:bg-blue-800 dark:hover:bg-blue-700 transition-all duration-300 backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                    </span>
                </button>

                <!-- Cards Container -->
                <div class="flex space-x-4 transition-transform duration-500 ease-out" x-ref="slider"
                    :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                    <!-- Card 1 -->
                    <div data-aos="flip-left" data-aos-duration="2000" class="min-w-full md:min-w-[33.333%] flex justify-center">
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-gray-100 dark:hover:bg-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg transition-transform transform hover:scale-110"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5
                                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white transition-all duration-300 hover:border-b-2 hover:border-blue-500">
                                        Noteworthy technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise
                                    technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-300">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2 transition-all duration-300 transform hover:translate-x-1 hover:scale-110"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div data-aos="flip-up" data-aos-duration="2000" class="min-w-full md:min-w-[33.333%] flex justify-center">
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-gray-100 dark:hover:bg-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg transition-transform transform hover:scale-110"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5
                                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white transition-all duration-300 hover:border-b-2 hover:border-blue-500">
                                        Noteworthy technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise
                                    technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-300">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2 transition-all duration-300 transform hover:translate-x-1 hover:scale-110"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div data-aos="flip-right" data-aos-duration="2000" class="min-w-full md:min-w-[33.333%] flex justify-center">
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-gray-100 dark:hover:bg-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg transition-transform transform hover:scale-110"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5
                                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white transition-all duration-300 hover:border-b-2 hover:border-blue-500">
                                        Noteworthy technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise
                                    technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-300">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2 transition-all duration-300 transform hover:translate-x-1 hover:scale-110"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Next Button -->
                <button @click="next" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-6 z-10 group">
                    <span
                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-700/90 dark:bg-blue-600/90 shadow-lg hover:bg-blue-800 dark:hover:bg-blue-700 transition-all duration-300 backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                    </span>
                </button>

                <!-- Indicators -->
                <div
                    class="absolute -bottom-10 left-1/2 transform -translate-x-1/2 flex space-x-3 rtl:space-x-reverse">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button type="button" class="w-3 h-3 rounded-full transition-all duration-300"
                            :class="isActive(index) ? 'bg-blue-600' : 'bg-blue-300'" @click="activeSlide = index"
                            :aria-current="isActive(index)" :aria-label="'Slide ' + (index + 1)">
                        </button>
                    </template>
                </div>
            </div>

            <!-- View More Button -->
            <div class="flex justify-center mt-16">
                <a href="#"
                    class="inline-flex items-center px-6 py-3 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-300">
                    Lihat Selengkapnya
                    <svg class="rtl:rotate-180 w-4 h-4 ms-2 transition-all duration-300 transform hover:translate-x-1 hover:scale-110"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- User Profile Section with Carousel --}}
    <section id="team" class="py-16 bg-gray-100 dark:bg-gray-800">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-8 text-center">Meet Our Team</h2>
            <p class="text-lg text-gray-700 dark:text-gray-400 text-center mb-12">
                Get to know the talented individuals behind our company who work tirelessly to deliver innovative
                solutions.
            </p>

            {{-- User profile cards carousel --}}
            <div class="relative" x-data="{ activeSlide: 0, slides: [0, 1, 2] }">
                <div class="relative overflow-hidden">
                    <div class="flex transition-transform duration-500 ease-in-out"
                        :style="{ transform: `translateX(-${activeSlide * 100}%)` }">
                        <!-- Card 1 -->
                        <div data-aos="zoom-in" data-aos-duration="2000" class="flex-none w-full md:w-1/3 px-4">
                            <div
                                class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                                <div class="flex flex-col items-center">
                                    <!-- Profile Image -->
                                    <div
                                        class="w-32 h-32 mb-4 overflow-hidden rounded-full border-4 border-blue-500 transition-transform duration-300 hover:scale-105">
                                        <img src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
                                            alt="Profile 1" class="w-full h-full object-cover">
                                    </div>
                                    <!-- Profile Info -->
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">John Doe</h3>
                                    <p class="text-blue-600 dark:text-blue-400 font-medium mb-1">Senior Developer</p>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Engineering Division</p>
                                    <!-- Social Media Icons -->
                                    <div class="flex space-x-4">
                                        <a href="#"
                                            class="text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400 transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path
                                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="text-gray-600 hover:text-pink-600 dark:text-gray-400 dark:hover:text-pink-400 transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="text-gray-600 hover:text-blue-400 dark:text-gray-400 dark:hover:text-blue-300 transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path
                                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="zoom-in-up" data-aos-duration="2000" class="flex-none w-full md:w-1/3 px-4">
                            <div
                                class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                                <div class="flex flex-col items-center">
                                    <!-- Profile Image -->
                                    <div
                                        class="w-32 h-32 mb-4 overflow-hidden rounded-full border-4 border-blue-500 transition-transform duration-300 hover:scale-105">
                                        <img src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
                                            alt="Profile 1" class="w-full h-full object-cover">
                                    </div>
                                    <!-- Profile Info -->
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">John Doe</h3>
                                    <p class="text-blue-600 dark:text-blue-400 font-medium mb-1">Senior Developer</p>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Engineering Division</p>
                                    <!-- Social Media Icons -->
                                    <div class="flex space-x-4">
                                        <a href="#"
                                            class="text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400 transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path
                                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="text-gray-600 hover:text-pink-600 dark:text-gray-400 dark:hover:text-pink-400 transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="text-gray-600 hover:text-blue-400 dark:text-gray-400 dark:hover:text-blue-300 transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path
                                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="zoom-in-down" data-aos-duration="2000" class="flex-none w-full md:w-1/3 px-4">
                            <div
                                class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                                <div class="flex flex-col items-center">
                                    <!-- Profile Image -->
                                    <div
                                        class="w-32 h-32 mb-4 overflow-hidden rounded-full border-4 border-blue-500 transition-transform duration-300 hover:scale-105">
                                        <img src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
                                            alt="Profile 1" class="w-full h-full object-cover">
                                    </div>
                                    <!-- Profile Info -->
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">John Doe</h3>
                                    <p class="text-blue-600 dark:text-blue-400 font-medium mb-1">Senior Developer</p>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Engineering Division</p>
                                    <!-- Social Media Icons -->
                                    <div class="flex space-x-4">
                                        <a href="#"
                                            class="text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400 transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path
                                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="text-gray-600 hover:text-pink-600 dark:text-gray-400 dark:hover:text-pink-400 transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="text-gray-600 hover:text-blue-400 dark:text-gray-400 dark:hover:text-blue-300 transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path
                                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <button @click="activeSlide = activeSlide === 0 ? slides.length - 1 : activeSlide - 1"
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-blue-700 dark:bg-blue-800 p-2 rounded-full shadow-lg hover:bg-blue-800 dark:hover:bg-blue-700 transition-colors duration-300">
                        <svg class="w-6 h-6 text-white dark:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button @click="activeSlide = activeSlide === slides.length - 1 ? 0 : activeSlide + 1"
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-blue-700 dark:bg-blue-800 p-2 rounded-full shadow-lg hover:bg-blue-800 dark:hover:bg-blue-700 transition-colors duration-300">
                        <svg class="w-6 h-6 text-white dark:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                <!-- Carousel Indicators -->
                <div class="flex justify-center mt-4 space-x-2">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="activeSlide = index"
                            :class="{ 'bg-blue-600': activeSlide === index, 'bg-gray-300': activeSlide !== index }"
                            class="w-3 h-3 rounded-full transition-colors duration-300"></button>
                    </template>
                </div>
            </div>
            {{-- View More Button --}}
            <div class="flex justify-center mt-8">
                <a href="#"
                    class="inline-flex items-center px-6 py-3 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-300">
                    Lihat Selengkapnya
                    <svg class="rtl:rotate-180 w-4 h-4 ms-2 transition-all duration-300 transform hover:translate-x-1 hover:scale-110"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    {{-- Garis --}}
    <div class="container mx-auto">
        <div class="w-full max-w-4xl mx-auto border-t border-gray-300 dark:border-none"></div>
    </div>
    {{-- activity --}}
    <section class="relative pt-10 md:pt-15 lg:pt-24 py-10 bg-gray-100 dark:bg-gray-900" id="activity">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-8 text-center">Our New Activity</h2>
            <p class="text-lg text-gray-700 dark:text-gray-400 text-center mb-12">
                We provide a range of innovative solutions that help your business grow and succeed in a fast-changing
                digital landscape.
            </p>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Activity 1 -->
                <div class="relative group activity-item">
                    <div class="relative">
                        <img src="{{ asset('images/Aslab_2025.jpg') }}" alt="Activity 1" class="w-full rounded-xl">
                    </div>
                    <!-- Hover Effect -->
                    <div
                        class="absolute inset-0 bg-black bg-opacity-80 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 rounded-xl">
                        <h3 class="text-white text-xl font-semibold mb-3">Activity Title</h3>
                        <button
                            class="text-white font-semibold py-2 px-4 shadow-md bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-300 flex items-center">
                            Lihat Detail
                            <svg class="w-4 h-4 ml-2 transition-all duration-300 transform group-hover:translate-x-1 group-hover:scale-110"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="relative group activity-item">
                    <div class="relative">
                        <img src="{{ asset('images/Aslab_2025.jpg') }}" alt="Activity 1" class="w-full rounded-xl">
                    </div>
                    <!-- Hover Effect -->
                    <div
                        class="absolute inset-0 bg-black bg-opacity-80 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 rounded-xl">
                        <h3 class="text-white text-xl font-semibold mb-3">Activity Title</h3>
                        <button
                            class="text-white font-semibold py-2 px-4 shadow-md bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-300 flex items-center">
                            Lihat Detail
                            <svg class="w-4 h-4 ml-2 transition-all duration-300 transform group-hover:translate-x-1 group-hover:scale-110"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="relative group activity-item">
                    <div class="relative">
                        <img src="{{ asset('images/Aslab_2025.jpg') }}" alt="Activity 1" class="w-full rounded-xl">
                    </div>
                    <!-- Hover Effect -->
                    <div
                        class="absolute inset-0 bg-black bg-opacity-80 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 rounded-xl">
                        <h3 class="text-white text-xl font-semibold mb-3">Activity Title</h3>
                        <button
                            class="text-white font-semibold py-2 px-4 shadow-md bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-300 flex items-center">
                            Lihat Detail
                            <svg class="w-4 h-4 ml-2 transition-all duration-300 transform group-hover:translate-x-1 group-hover:scale-110"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tombol "Lihat Selengkapnya" -->
            <div class="flex justify-center mt-8">
                <a href="#"
                    class="inline-flex items-center px-6 py-3 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-300"
                    id="loadMore">
                    Lihat Selengkapnya
                    <svg class="rtl:rotate-180 w-4 h-4 ms-2 transition-all duration-300 transform hover:translate-x-1 hover:scale-110"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    {{-- Garis --}}
    <div class="container mx-auto">
        <div class="w-full max-w-4xl mx-auto border-t border-gray-300 dark:border-none"></div>
    </div>
    {{-- FAQ --}}
    <section class="py-16 bg-gray-100 dark:bg-gray-800">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-8 text-center">FAQ</h2>
            <p class="text-lg text-gray-700 dark:text-gray-400 text-center mb-12">
                Get to know the talented individuals behind our company who work tirelessly to deliver innovative
                solutions.
            </p>

            <div id="accordion-open" data-accordion="open">
                <h2 id="accordion-open-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-1" aria-expanded="true"
                        aria-controls="accordion-open-body-1">
                        <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg> What is Flowbite?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                            interactive components built on top of Tailwind CSS including buttons, dropdowns, modals,
                            navbars, and more.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                href="/docs/getting-started/introduction/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start
                            developing websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                        aria-controls="accordion-open-body-2">
                        <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>Is there a Figma file available?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed
                            using the Figma software so everything you see in the library has a design equivalent in our
                            Figma file.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out the <a
                                href="https://flowbite.com/figma/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based
                            on the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-3" aria-expanded="false"
                        aria-controls="accordion-open-body-3">
                        <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg> What are the differences between Flowbite and Tailwind UI?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                            components from Flowbite are open source under the MIT license, whereas Tailwind UI is a
                            paid product. Another difference is that Flowbite relies on smaller and standalone
                            components, whereas Tailwind UI offers sections of pages.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                            Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you
                            from using the best of two worlds.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                        <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                            <li><a href="https://flowbite.com/pro/"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                            <li><a href="https://tailwindui.com/" rel="nofollow"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Garis --}}
    <div class="container mx-auto">
        <div class="w-full max-w-4xl mx-auto border-t border-gray-300 dark:border-none"></div>
    </div>
    {{-- contact --}}
    <section class="relative pt-10 md:pt-15 lg:pt-24 py-10 pb-10 md:pb-15 lg:pb-24 px-10 bg-gray-100 dark:bg-gray-900"
        id="contact">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-8 text-center">Contact Us</h2>
            <p class="text-lg text-gray-700 dark:text-gray-400 text-center mb-12">
                Get to know the talented individuals behind our company who work tirelessly to deliver innovative
                solutions.
            </p>

            <!-- Contact Form and Map -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Left Column (Form) -->
                <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Send Us a Message</h3>
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label for="name"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Full Name</label>
                            <input type="text" id="name" name="name" required
                                placeholder="Enter your full name"
                                class="mt-1 block w-full px-4 py-2 text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 focus:border-transparent placeholder-gray-500 dark:placeholder-gray-400" />
                        </div>
                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email
                                Address</label>
                            <input type="email" id="email" name="email" required
                                placeholder="Enter your email address"
                                class="mt-1 block w-full px-4 py-2 text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 focus:border-transparent placeholder-gray-500 dark:placeholder-gray-400" />
                        </div>
                        <div>
                            <label for="message"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Your Message</label>
                            <textarea id="message" name="message" required rows="4" placeholder="Type your message here"
                                class="mt-1 block w-full px-4 py-2 text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 focus:border-transparent placeholder-gray-500 dark:placeholder-gray-400"></textarea>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit"
                                class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Right Column (Map) -->
                <div class="relative w-full h-96 rounded-lg overflow-hidden">
                    <iframe class="lazy-load"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5457189589297!2d107.30639839999999!3d-6.3232398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977ccb34822e1%3A0x6c4c7c12678610e0!2sUniversitas%20Singaperbangsa%20Karawang%20(UNSIKA)!5e0!3m2!1sid!2sid!4v1739242972745!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    {{-- loader --}}
    <div id="loadingSpinner" class="fixed inset-0 flex justify-center items-center bg-gray-900 bg-opacity-50 z-50">
        <div class="w-16 h-16 border-4 border-t-blue-500 border-transparent rounded-full animate-spin"></div>
    </div>

    <footer class="bg-white dark:bg-gray-800">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="{{ asset('images/logo/logolabkom.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white text-gray-700">Labkom
                            Unsika</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a
                        href="https://flowbite.com/" class="hover:underline">Labkom™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
