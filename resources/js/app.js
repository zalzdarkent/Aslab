import './bootstrap';
import 'flowbite';
import AOS from 'aos';
import 'aos/dist/aos.css'; // Import CSS AOS
import 'animate.css';
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

AOS.init(); // Inisialisasi AOS
AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});

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

themeToggleBtn.addEventListener('click', function () {

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

document.addEventListener("DOMContentLoaded", function () {
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

document.addEventListener("DOMContentLoaded", function () {
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


document.addEventListener('DOMContentLoaded', function () {
    // Fungsi untuk menentukan section yang aktif
    function setActiveSection() {
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');

        // Posisi scroll + offset
        const scrollPosition = window.scrollY + 100;

        // Periksa setiap section
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                // Hapus kelas aktif dari semua link
                navLinks.forEach(link => {
                    link.classList.remove('text-blue-700', 'md:text-blue-700',
                        'dark:text-blue-500');
                    link.classList.add('text-gray-900', 'dark:text-white');
                });

                // Tambah kelas aktif ke link yang sesuai
                const activeLink = document.querySelector(`.nav-link[href="#${sectionId}"]`);
                if (activeLink) {
                    activeLink.classList.remove('text-gray-900', 'dark:text-white');
                    activeLink.classList.add('text-blue-700', 'md:text-blue-700',
                        'dark:text-blue-500');
                }
            }
        });
    }

    // Tambahkan event listener untuk scroll
    window.addEventListener('scroll', setActiveSection);

    // Jalankan sekali saat halaman dimuat
    setActiveSection();

    // Smooth scroll saat klik link
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            targetSection.scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});

// carousel card profile
document.addEventListener('alpine:init', () => {
    Alpine.data('carouselData', () => ({
        activeSlide: 0,
        slides: [0, 1, 2],
        autoplayInterval: null,

        init() {
            // Memulai autoplay saat komponen diinisialisasi
            this.startAutoplay();

            // Menghentikan autoplay saat mouse hover
            this.$el.addEventListener('mouseenter', () => this.stopAutoplay());
            this.$el.addEventListener('mouseleave', () => this.startAutoplay());
        },

        startAutoplay() {
            this.autoplayInterval = setInterval(() => {
                this.next();
            }, 3000); // Ganti slide setiap 3 detik
        },

        stopAutoplay() {
            if (this.autoplayInterval) {
                clearInterval(this.autoplayInterval);
            }
        },

        next() {
            this.activeSlide = this.activeSlide === this.slides.length - 1 ? 0 : this.activeSlide + 1;
        },

        prev() {
            this.activeSlide = this.activeSlide === 0 ? this.slides.length - 1 : this.activeSlide - 1;
        },

        goToSlide(index) {
            this.activeSlide = index;
        }
    }));
});

// activity
document.addEventListener("DOMContentLoaded", function () {
    let items = document.querySelectorAll(".activity-item");
    let loadMoreBtn = document.getElementById("loadMore");
    let visibleItems = 3;

    // Sembunyikan semua kecuali 6 pertama
    items.forEach((item, index) => {
        if (index >= visibleItems) item.style.display = "none";
    });

    // Tampilkan tombol jika lebih dari 6 activity
    if (items.length > visibleItems) {
        loadMoreBtn.classList.remove("hidden");
    }

    loadMoreBtn.addEventListener("click", function () {
        items.forEach((item, index) => {
            if (index < visibleItems + 6) {
                item.style.display = "block";
            }
        });

        visibleItems += 6;

        if (visibleItems >= items.length) {
            loadMoreBtn.style.display = "none";
        }
    });
});

// loader
window.addEventListener('load', () => {
    document.getElementById('loadingSpinner').style.display = 'none';
});