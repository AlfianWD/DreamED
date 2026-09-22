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

            <!-- Form Section -->
            <div class="ml-2">
                <form>
                    <!-- Email -->
                    <div class="mb-4">
                        <label
                            class="block text-[20px] font-semibold mb-4"
                            for="email"
                            >Email</label
                        >
                        <input
                            id="email"
                            class="shadow border border-amber-500 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none"
                            type="email"
                            placeholder="Enter your email address"
                        />
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label
                            class="block text-[20px] font-semibold mb-4"
                            for="password"
                            >Password</label
                        >
                        <input
                            id="password"
                            class="shadow border border-amber-500 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none"
                            type="password"
                            placeholder="Enter your password"
                        />
                    </div>

                    <!-- Forgot Password & Sign In -->
                    <div class="flex flex-col justify-center">
                        <a
                            href="/coming-soon"
                            class="text-[14px] font-semibold m-4 hover:text-purple-500 self-end"
                            >Forgot your password?</a
                        >
                        <a href="/coming-soon">
                            <button
                                class="bg-purple-500 text-white hover:bg-purple-800 hover:text-white font-reguler py-2 px-4 rounded-lg w-full border border-black focus:outline-none focus:shadow-outline"
                                type="button"
                            >
                                Sign In
                            </button>
                        </a>
                    </div>

                    <!-- Divider -->
                    <div class="flex items-center justify-center gap-6 py-4">
                        <div class="flex-1 h-px bg-black" />
                        <p>or</p>
                        <div class="flex-1 h-px bg-black" />
                    </div>

                    <!-- Google Sign in -->
                    <button
                        type="button"
                        class="flex items-center justify-center gap-4 w-full py-2 font-semibold hover:opacity-70 transition"
                    >
                        <!-- Google Icon -->
                        <svg
                            class="w-6 h-6"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M21.35 12.27C21.35 11.57 21.29 10.9 21.16 10.25H12V14.08H17.09C16.87 15.31 16.18 16.35 15.13 17.05V19.55H18.34C20.22 17.82 21.35 15.27 21.35 12.27Z"
                                fill="#4285F4"
                            />
                            <path
                                d="M12 21.5C14.7 21.5 16.96 20.61 18.34 19.55L15.13 17.05C14.24 17.65 13.11 18.01 12 18.01C9.39 18.01 7.18 16.25 6.39 13.88H3.07V16.46C4.45 19.44 7.52 21.5 12 21.5Z"
                                fill="#34A853"
                            />
                            <path
                                d="M6.39 13.88C6.19 13.28 6.08 12.65 6.08 12C6.08 11.35 6.19 10.72 6.39 10.12V7.54H3.07C2.38 8.91 2 10.43 2 12C2 13.57 2.38 15.09 3.07 16.46L6.39 13.88Z"
                                fill="#FBBC05"
                            />
                            <path
                                d="M12 5.99C13.47 5.99 14.79 6.5 15.83 7.5L18.41 4.92C16.85 3.46 14.69 2.5 12 2.5C7.52 2.5 4.45 4.56 3.07 7.54L6.39 10.12C7.18 7.75 9.39 5.99 12 5.99Z"
                                fill="#EA4335"
                            />
                        </svg>

                        <span> Google </span>
                    </button>

                    <!-- Create Account -->
                    <div class="flex items-center justify-center gap-2 mt-12">
                        <span>Don't have a account?</span>
                        <a
                            href="/register"
                            class="font-semibold hover:text-purple-500"
                            >Create Account</a
                        >
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
