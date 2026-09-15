<script setup>
import { Head, Link } from "@inertiajs/vue3";

import Logo from "../../../images/Logo.png";
import IconContraction from "../../../images/icon_contraction.svg";
</script>

<template>
    <Head tittle="coming-soon" />

    <div class="min-h-screen bg-amber-400 flex flex-col">
        <!-- Header Section -->
        <div class="max-w-7xl mx-auto flex justify-center">
            <!-- Logo -->
            <img :src="Logo" alt="DreamED Logo" />
        </div>

        <!-- Main Content Section -->
        <main class="flex-1 flex items-center justify-center px-6">
            <!-- Content -->
            <section
                class="w-full max-w-4xl text-center flex flex-col items-center"
            >
                <!-- illustration -->
                <div
                    class="w-[50px] h-[50px] bg-black mb-8"
                    :style="`mask: url(${IconContraction}) no-repeat center / contain; -webkit-mask: url(${IconContraction}) no-repeat center / contain;`"
                ></div>

                <!-- Tittle -->
                <h1 class="text-5xl font-semibold text-black">Coming Soon</h1>

                <!-- Subtittle -->
                <h3 class="mt-8 text-2xl font-reguler text-black">
                    We're building something better
                </h3>

                <!-- Description -->
                <p class="mt-8 text-2xl font-reguler text-black">
                    This feature is currently under development. We're working
                    to make your learning experience better, simpler, and more
                    accessible.
                </p>

                <!-- Button CTA -->
                <Link
                    rel="stylesheet"
                    href="/"
                    class="mt-12 inline-flex items-center justify-center bg-black text-amber-400 px-8 py-3 rounded-lg text-base font-semibold hover:bg-gray-900 duration-300"
                >
                    Back to Home
                </Link>
            </section>
        </main>
    </div>
</template>
