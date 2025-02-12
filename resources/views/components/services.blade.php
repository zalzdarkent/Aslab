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
