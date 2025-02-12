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
                    @foreach ($anggotas as $item)
                        <div data-aos="zoom-in" data-aos-duration="2000" class="flex-none w-full md:w-1/3 px-4">
                            <div
                                class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                                <div class="flex flex-col items-center">
                                    <!-- Profile Image -->
                                    <div
                                        class="w-32 h-32 mb-4 overflow-hidden rounded-full border-4 border-blue-500 transition-transform duration-300 hover:scale-105">
                                        <img src="{{ asset('storage/' . $item->photo) }}" alt="Profile 1"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <!-- Profile Info -->
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ $item->name }}
                                    </h3>
                                    <p class="text-blue-600 dark:text-blue-400 font-medium mb-1">
                                        {{ $item->jabatan->name }}</p>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                        Divisi{{ ' ' . $item->divisi->name }}</p>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">{{ $item->prodi->name }}
                                    </p>
                                    <!-- Social Media Icons -->
                                    <div class="flex space-x-4">
                                        <a href="{{ $item->facebook }}" target="_blank"
                                            class="text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-blue-400 transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path
                                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                                            </svg>
                                        </a>
                                        <a href="{{ $item->instagram }}" target="_blank"
                                            class="text-gray-600 hover:text-pink-600 dark:text-gray-400 dark:hover:text-pink-400 transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="{{ $item->github }}" target="_blank"
                                            class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors duration-300">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="{{ $item->twitterx }}" target="_blank"
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
                    @endforeach
                </div>

                <!-- Carousel Controls -->
                <button @click="activeSlide = activeSlide === 0 ? slides.length - 1 : activeSlide - 1"
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-blue-700 dark:bg-blue-800 p-2 rounded-full shadow-lg hover:bg-blue-800 dark:hover:bg-blue-700 transition-colors duration-300">
                    <svg class="w-6 h-6 text-white dark:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
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
