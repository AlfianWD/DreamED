<script setup>
import btnBack from "../../../images/button_back.svg";
import illustrationLearn from "../../../images/illustration_learn.png";
</script>
<template>
    <div class="min-h-screen bg-white overflow-x-hidden md:flex">
        <!-- Left Panel -->
        <div
            class="hidden ml-20 md:flex md:1/2 min-h-screen items-center justify-center"
        >
            <div
                class="bg-purple-300 w-[530px] h-[592px] shadow-2xl rounded-2xl flex flex-col items-center justify-center"
            >
                <img
                    :src="illustrationLearn"
                    alt="Ilustration-Learn"
                    class="w-[350px] h-[350px] mb-10"
                />
                <span class="text-lg text-center"
                    >Learn Faster and Anywhere with
                    <strong>DreamED</strong></span
                >
            </div>
        </div>

        <!-- Right Panel -->
        <div class="w-full md:w-1/2 min-h-screen p-8 md:p-10">
            <!-- Header Section -->
            <div
                class="left-0 right-0 flex flex-wrap items-center justify-between mb-16 md:mb-10"
            >
                <!-- Tittle -->
                <h1 class="text-[22px] font-bold">Welcome</h1>

                <!-- Btn-Back -->
                <a href="/" class="flex items-end">
                    <div
                        class="w-[30px] h-[30px] transition duration-300 bg-black hover:bg-purple-500 hover:scale-110 active:scale-90 cursor-pointer"
                        :style="`mask: url(${btnBack}) no-repeat center / contain; -webkit-mask: url(${btnBack}) no-repeat center / contain;`"
                    ></div>
                </a>
            </div>

            <!-- Marker Form -->
            <div class="flex items-start md:items-center">
                <!-- Step Circle -->
                <div
                    class="rounded-full w-[30px] h-[30px] border-amber-500 font-semibold items-center justify-center border-2"
                ></div>

                <!-- Connector -->
                <div class="mx-2 h-0.5 w-12"></div>
            </div>
        </div>
    </div>
</template>
