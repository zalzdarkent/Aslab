<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .active {
            color: #1d4ed8;
            /* Biru untuk mode terang */
            font-weight: bold;
        }

        .dark .active {
            color: #3b82f6;
            /* Biru lebih terang di mode gelap */
        }
    </style>
</head>

<body class="bg-white dark:bg-[#111827]">
    {{-- navbar --}}
    <nav class="bg-white dark:bg-[#111827] fixed w-full z-20 top-0 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap text-gray-900 dark:text-white">Flowbite</span>
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
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#about" id="nav-about"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- jumbotron --}}
    <section class="bg-white dark:bg-gray-900 mt-16 md:mt-24 lg:mt-32">
        <div
            class="flex flex-col-reverse items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-12 lg:gap-8 xl:gap-0 lg:py-16">
            <!-- Teks -->
            <div class="lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-gray-900 dark:text-white">
                    Payments tool for software companies
                </h1>
                <p
                    class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl text-gray-900 dark:text-white">
                    From checkout to global sales tax compliance, companies around the world use Flowbite to simplify
                    their payment stack.
                </p>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>

            <!-- Gambar -->
            <div class="flex justify-center lg:col-span-5 order-last lg:order-none">
                <img class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
            </div>
        </div>
    </section>

    {{-- counter section --}}
    <section class="bg-white dark:bg-gray-900 py-12 mt-4">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <!-- Card 1 -->
                <div class="p-6 bg-white dark:bg-gray-800 shadow rounded-lg">
                    <div class="flex justify-center mb-2">
                        <svg class="w-10 h-10 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900 dark:text-white count" data-count="1200">0</h2>
                    <p class="text-gray-500 dark:text-gray-400">Total Users</p>
                </div>

                <!-- Card 2 -->
                <div class="p-6 bg-white dark:bg-gray-800 shadow rounded-lg">
                    <div class="flex justify-center mb-2">
                        <svg class="w-10 h-10 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 9l-6 6m0 0l6 6m-6-6h12"></path>
                        </svg>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900 dark:text-white count" data-count="350">0</h2>
                    <p class="text-gray-500 dark:text-gray-400">Completed Projects</p>
                </div>

                <!-- Card 3 -->
                <div class="p-6 bg-white dark:bg-gray-800 shadow rounded-lg">
                    <div class="flex justify-center mb-2">
                        <svg class="w-10 h-10 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 8h16M4 16h16"></path>
                        </svg>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900 dark:text-white count" data-count="5000">0</h2>
                    <p class="text-gray-500 dark:text-gray-400">Hours of Support</p>
                </div>

                <!-- Card 4 -->
                <div class="p-6 bg-white dark:bg-gray-800 shadow rounded-lg">
                    <div class="flex justify-center mb-2">
                        <svg class="w-10 h-10 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900 dark:text-white count" data-count="25">0</h2>
                    <p class="text-gray-500 dark:text-gray-400">Hard Workers</p>
                </div>
            </div>
        </div>
    </section>

    {{-- about us --}}
    <section id="about" class="mt-16 md:mt-24 lg:mt-32 bg-gray-100 dark:bg-gray-800 py-16">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Gambar -->
                <div class="flex justify-center">
                    <img class="w-full max-w-sm md:max-w-md lg:max-w-lg"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                        alt="About Us Image">
                </div>

                <!-- Teks -->
                <div>
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
    <section id="services" class="mt-10 md:mt-24 lg:mt-32 py-16">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-8 text-center">Our New Services</h2>
            <p class="text-lg text-gray-700 dark:text-gray-400 text-center mb-12">
                We provide a range of innovative solutions that help your business grow and succeed in a fast-changing
                digital landscape. Explore our services below and see how we can help you achieve your goals.
            </p>
            <div class="flex space-x-4">
                <!-- Card 1 -->
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-gray-100 dark:hover:bg-gray-700">
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
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
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
                <!-- Card 2 -->
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-gray-100 dark:hover:bg-gray-700">
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
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
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
                <!-- Card 3 -->
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-gray-100 dark:hover:bg-gray-700">
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
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
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


    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }

        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });

        document.addEventListener("DOMContentLoaded", function() {
            const aboutSection = document.getElementById("about");
            const aboutNav = document.getElementById("nav-about");

            function checkScroll() {
                const sectionTop = aboutSection.offsetTop - 100; // Adjust untuk navbar tinggi
                const sectionBottom = sectionTop + aboutSection.offsetHeight;
                const scrollY = window.scrollY;

                if (scrollY >= sectionTop && scrollY < sectionBottom) {
                    aboutNav.classList.add("active");
                } else {
                    aboutNav.classList.remove("active");
                }
            }

            window.addEventListener("scroll", checkScroll);
        });

        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll(".count");
            const speed = 100; // Kecepatan animasi

            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute("data-count");
                    const count = +counter.innerText;
                    const increment = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCount, 30);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            });
        });
    </script>
</body>

</html>
