<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { ref, onMounted, onUnmounted } from "vue";

import Logo from "../../images/logo.png";
import heroImage from "../../images/hero-student.png";
import IconTech from "../../images/section_logo_teknologi.png";
import IconClock from "../../images/section_logo_clock.png";
import IconMateri from "../../images/section_logo_materi.png";
import IconFile from "../../images/section_logo_file.png";
import imageAbout from "../../images/Section_Image-About.png";
import IconHamburger from "../../images/icon_hamburger.svg";
import ButtonSidebar from "../../images/button_back.svg";
import IconHome from "../../images/icon_home.svg";
import IconAbout from "../../images/icon_about.svg";
import IconContact from "../../images/icon_contact.svg";

//State to get data BtnScrolltoTop
const btnBacktoTop = document.querySelector("#buttonBacktoTop");

//State to control open/close sidebar
const isSidebarOpen = ref(false);
//State to control scroll
const isScrolled = ref(false);
// State Button Back to Up
const scrollBack = ref(false);

// State to detect scroll and check position scroll
const handleScroll = () => {
    //State to actived glassmorphism effect if scroll > 20px
    isScrolled.value = window.scrollY > 20;
    //State to actived button if scroll > 20px
    scrollBack.value = window.scrollY > 20;
};

// Function to scroll back to top
const scrollToTop = () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
};

// State Decision to Button ScrolltoTop
// function manageBtnScrlBack(action) {
//     if (action === "open") {
//         btnBacktoTop.classList.add("hidden");
//     } else {
//         btnBacktoTop.classList.remove("hidden");
//     }
// }

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
});
</script>

<template>
    <div class="min-h-screen bg-white overflow-x-hidden">
        <!-- Navbar -->
        <nav
            class="fixed top-0 z-40 left-0 right-0 flex flex-wrap items-center justify-between max-w-7xl mx-auto px-4 sm:px-6 py-2 sm:py-2"
            :class="[
                isScrolled
                    ? 'bg-white/30 backdrop-blur-md border-b border-white/20 shadow-lg rounded-full m-4'
                    : 'bg-transparent border-b border-transparent',
            ]"
        >
            <!-- Logo -->
            <img :src="Logo" alt="DreamED Logo" class="h-12 sm:h-16 w-auto" />

            <!-- Menu -->
            <ul class="hidden sm:flex gap-6 font-semibold text-gray-700">
                <li>
                    <a href="#home" class="hover:text-purple-500 transition"
                        >Home</a
                    >
                </li>
                <li>
                    <a href="#about" class="hover:text-purple-500 transition"
                        >About</a
                    >
                </li>
                <li>
                    <a href="#contact" class="hover:text-purple-500 transition"
                        >Contact Us</a
                    >
                </li>
            </ul>

            <!-- Button_CTA -->
            <div
                class="hidden sm:flex gap-2 sm:gap-3 mt-3 sm:mt-0 w-full sm:w-auto justify-center sm:justify-end font-normals"
            >
                <Link
                    class="border border-purple-500 text-purple-500 px-3 sm:px-4 py-1.5 sm:py-2 rounded-lg hover:bg-purple-500 hover:text-white transition text-sm sm:text-base"
                >
                    Sign In
                </Link>
                <Link
                    class="bg-amber-400 px-3 sm:px-4 py-1.5 sm:py-2 rounded-lg hover:bg-amber-500 transition text-sm sm:text-base"
                >
                    Sign Up
                </Link>
            </div>

            <!-- Humberger_Menu -->
            <section class="flex items-end sm:hidden">
                <button
                    type="button"
                    @click="isSidebarOpen = !isSidebarOpen"
                    class="inline-block p-1 focus:outline-none"
                >
                    <div
                        class="w-[30px] h-[30px] transition duration-300 bg-black hover:bg-purple-500 hover:scale-110 active:scale-90 cursor-pointer"
                        :style="`mask: url(${IconHamburger}) no-repeat center / contain; -webkit-mask: url(${IconHamburger}) no-repeat center / contain;`"
                    ></div>
                </button>
            </section>
        </nav>

        <!-- Sidebar-Menu -->
        <aside
            id="sidebar-menu"
            class="fixed sm:hidden top-0 right-0 w-64 z-40 h-full transition-transform duration-300 bg-amber-400 px-6 py-6"
            :class="isSidebarOpen ? 'translate-x-0' : 'translate-x-full'"
            aria-label="sidebar"
        >
            <!-- Tiitle Sidebar -->
            <div class="flex item-center gap-3 font-semibold flex-wrap mb-10">
                <button
                    v-if="isSidebarOpen"
                    @click="isSidebarOpen = false"
                    class="justify-start w-[26px] h-[26px] py-1"
                >
                    <img :src="ButtonSidebar" alt="buttonSidebar" />
                </button>
                <h1 class="text-[22px]">SIDEBAR</h1>
            </div>

            <!-- Menu_Sidebar -->
            <div class="flex-1 overflow-y-auto mb-10">
                <ul class="flex flex-col gap-4 font-semibold text-black">
                    <li>
                        <a
                            href="#home"
                            class="flex items-center gap-4 px-4 py-2.5 rounded-full hover:text-purple-500 hover:bg-black hover:shadow-lg group transition-colors duration-200 w-fit"
                        >
                            <div
                                class="w-[24px] h-[24px] bg-black group-hover:bg-purple-500 flex-shrink-0"
                                :style="`mask: url(${IconHome}) no-repeat center / contain; -webkit-mask: url(${IconHome}) no-repeat center / contain;`"
                            ></div>
                            <h3>Home</h3>
                        </a>
                    </li>
                    <li>
                        <a
                            href="#about"
                            class="flex items-center gap-3 px-4 py-2.5 rounded-full hover:text-purple-500 hover:bg-black hover:shadow-lg group transition-colors duration-200 w-fit"
                        >
                            <div
                                class="w-[24px] h-[24px] bg-black group-hover:bg-purple-500 flex-shrink-0"
                                :style="`mask: url(${IconAbout}) no-repeat center / contain; -webkit-mask: url(${IconAbout}) no-repeat center / contain;`"
                            ></div>
                            <h3>About</h3>
                        </a>
                    </li>
                    <li>
                        <a
                            href="#contact"
                            class="flex items-center gap-4 px-4 py-2.5 rounded-full hover:text-purple-500 hover:bg-black hover:shadow-lg group transition-colors duration-200 w-fit"
                        >
                            <div
                                class="w-6 h-6 bg-black group-hover:bg-purple-500 shrink-0"
                                :style="`mask: url(${IconContact}) no-repeat center / contain; -webkit-mask: url(${IconContact}) no-repeat center / contain;`"
                            ></div>
                            <h3>Contact</h3>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Button_CTA -->
            <div class="flex item-center gap-6 m-4">
                <Link
                    class="border border-black text-black px-3 sm:px-4 py-1.5 sm:py-2 rounded-lg hover:bg-purple-500 hover:text-white transition text-sm sm:text-base"
                >
                    Sign In
                </Link>
                <Link
                    class="bg-black text-amber-500 px-3 sm:px-4 py-1.5 sm:py-2 rounded-lg hover:text-white transition text-sm sm:text-base"
                >
                    Sign Up
                </Link>
            </div>
        </aside>

        <!-- Overlay Background -->
        <div
            v-if="isSidebarOpen"
            @click="isSidebarOpen = false"
            class="fixed inset-0 bg-black/25 z-30 sm:hidden"
        ></div>

        <!-- Button_Back-to-Top  -->
        <button
            id="butonBacktoTop"
            v-show="scrollBack"
            @click="scrollToTop"
            class="fixed flex flex-col items-center gap-2 group bottom-10 right-10 sm:bottom-20 sm:right-20 z-40 trasition-all duration-300 hover:scale-110 drop-shadow-sm"
            aria-label="buttonScrolltoTop"
            :class="{ hidden: !isScrolled || isSidebarOpen }"
        >
            <i
                class="fa-solid fa-circle-up text-[36px] text-amber-500 group-hover:text-amber-600 transition-color duration-300"
            ></i>

            <!-- Description -->
            <span
                class="bg-amber-400 font-semibold text-xs rounded-full px-1/2 p-2 group-hover:text-white transition-colors duration-300"
            >
                Back to Top
            </span>
        </button>

        <!-- Hero -->
        <section
            id="home"
            class="max-w-7xl mx-auto px-4 sm:px-6 pt-8 sm:pt-12 md:pt-16 grid lg:grid-cols-2 gap-8 items-center animate-fade-up"
        >
            <div class="sm:text-center lg:text-left p-10 mb-10">
                <h1
                    class="text-4xl text-semibold text-shadow text-shadow-x-md text-shadow-y-md text-shadow-blur-5 sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-tight"
                >
                    <span class="text-purple-500">Learn</span>
                    Faster
                    <br />
                    <span class="text-amber-400">Grow</span>
                    Better
                </h1>
                <p
                    class="mt-4 sm:mt-6 text-base sm:text-lg lg:text-xl text-gray-600 max-w-md mx-auto lg:mx-0"
                >
                    Flexible, interactive and accessible learning platform for
                    everyone.
                </p>
            </div>

            <div class="hidden sm:flex justify-center items-end">
                <img
                    :src="heroImage"
                    alt="Hero"
                    class="w-full max-w-sm md:max-w-md lg:max-w-2xl -mb-1"
                />
            </div>
        </section>

        <!-- CTA -->
        <section
            class="bg-purple-500 py-8 sm:py-10 text-center -mt-0.5 animate-fade-up"
            style="animation-delay: 0.2s"
        >
            <h2
                class="text-white text-xl sm:text-2xl md:text-3xl font-semibold px-4"
            >
                Join now to start your educational journey
            </h2>
            <Link
                class="inline-block mt-4 sm:mt-6 bg-amber-400 px-8 sm:px-10 py-2.5 sm:py-3 rounded-full font-semibold shadow-lg hover:bg-amber-500 transition text-sm sm:text-base"
            >
                Join Now
            </Link>
        </section>

        <!-- Benefits -->
        <section
            class="max-w-7xl mx-auto px-4 sm:px-6 py-16 sm:py-20 md:py-24 animate-fade-up"
            style="animation-delay: 0.4s"
        >
            <h2
                class="text-center text-2xl sm:text-3xl md:text-4xl font-bold text-amber-400"
            >
                Why choose us to upgrade your education?
            </h2>
            <p
                class="text-center text-lg sm:text-xl font-semibold mt-4 sm:mt-6 text-gray-700"
            >
                Here are the benefits you can get if you join us
            </p>

            <div
                class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mt-10 sm:mt-12 md:mt-16"
            >
                <div
                    class="shadow-md sm:shadow-lg rounded-2xl p-4 sm:p-6 bg-white border border-gray-100 hover:shadow-xl transition transform hover:-translate-y-1 duration-300"
                >
                    <img
                        :src="IconTech"
                        alt="Leading Technology"
                        class="w-10 h-10 object-contain mb-2"
                    />
                    <h3
                        class="font-bold text-base sm:text-lg mb-2 text-gray-800"
                    >
                        Leading Technology
                    </h3>
                    <p class="text-xs sm:text-sm leading-relaxed">
                        Advanced and responsive learning technology.
                    </p>
                </div>
                <div
                    class="shadow-md sm:shadow-lg rounded-2xl p-4 sm:p-6 bg-white border border-gray-100 hover:shadow-xl transition transform hover:-translate-y-1 duration-300"
                >
                    <img
                        :src="IconMateri"
                        alt="Variety of Material"
                        class="w-10 h-10 object-contain mb-2"
                    />
                    <h3
                        class="font-bold text-base sm:text-lg mb-2 text-gray-800"
                    >
                        Variety of Materials
                    </h3>
                    <p class="text-xs sm:text-sm leading-relaxed">
                        Access learning materials from various fields.
                    </p>
                </div>
                <div
                    class="shadow-md sm:shadow-lg rounded-2xl p-4 sm:p-6 bg-white border border-gray-100 hover:shadow-xl transition transform hover:-translate-y-1 duration-300"
                >
                    <img
                        :src="IconClock"
                        alt="Flexsibility Time and Space"
                        class="w-10 h-10 object-contain mb-2"
                    />
                    <h3
                        class="font-bold text-base sm:text-lg mb-2 text-gray-800"
                    >
                        Flexible Learning
                    </h3>
                    <p class="text-xs sm:text-sm leading-relaxed">
                        Learn anytime and anywhere.
                    </p>
                </div>
                <div
                    class="shadow-md sm:shadow-lg rounded-2xl p-4 sm:p-6 bg-white border border-gray-100 hover:shadow-xl transition transform hover:-translate-y-1 duration-300"
                >
                    <img
                        :src="IconFile"
                        alt="Free Certificate"
                        class="w-10 h-10 object-contain mb-2"
                    />
                    <h3
                        class="font-bold text-base sm:text-lg mb-2 text-gray-800"
                    >
                        Free Certificate
                    </h3>
                    <p class="text-xs sm:text-sm leading-relaxed">
                        Earn certificates after completing courses.
                    </p>
                </div>
            </div>
        </section>

        <!-- About -->
        <section
            id="about"
            class="max-w-7xl mx-auto px-4 sm:px-6 py-16 sm:py-20 grid lg:grid-cols-2 gap-12 items-center animate-fade-up"
            style="animation-delay: 0.6s"
        >
            <div class="flex justify-center">
                <img :src="imageAbout" alt="Image-About" />
            </div>
            <div>
                <h2
                    class="text-3xl sm:text-4xl font-bold mb-4 sm:mb-6 text-gray-800"
                >
                    What is DreamED?
                </h2>
                <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                    DreamED is an innovative online learning platform designed
                    to provide interactive, flexible and accessible learning
                    experiences for everyone.
                </p>
            </div>
        </section>

        <!-- Contact -->
        <section
            id="contact"
            class="py-16 sm:py-20 text-center animate-fade-up"
            style="animation-delay: 0.8s"
        >
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800">
                Contact Us
            </h2>
            <p class="mt-3 sm:mt-4 text-gray-600">
                Contact us, let us know how we can help.
            </p>
            <div
                class="flex justify-center gap-6 sm:gap-10 flex-wrap text-4xl sm:text-5xl mt-8 sm:mt-10"
            >
                <span>✉️</span>
                <span>💼</span>
                <span>📷</span>
                <span>𝕏</span>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-purple-500 text-white text-center py-6 sm:py-8">
            © 2026 DreamED. All rights reserved.
        </footer>
    </div>
</template>

<!-- Animasi CSS -->
<style scoped>
@keyframes fade-up {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
.animate-fade-up {
    animation: fade-up 0.8s ease forwards;
}
</style>
