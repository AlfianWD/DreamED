<script setup>
import illStudent from "../../../images/Illustration_Student.png";
import illTeacher from "../../../images/Illustration_Teacher.png";
</script>

<template>
    <div class="ml-2">
        <form>
            <!-- Content Section -->
            <div class="flex flex-col items-center justify-center mt-8">
                <h2 class="font-semibold text-[24px]">
                    Please Select Your Role
                </h2>
                <p class="font-reguler text-[16px] mt-2">
                    Select the appropriate role to continue your learning or
                    teaching experience
                </p>
            </div>

            <!-- Role Options -->
            <div class="flex flex-row justify-center gap-14 mt-6">
                <!-- Card Student -->
                <div
                    class="flex flex-col items-center bg-gray-300 rounded-3xl py-8 px-12 cursor-pointer"
                >
                    <img :src="illStudent" alt="Illustration Student" />
                    <label class="flex items-center mt-6"
                        ><span class="font-semibold text-amber-500"
                            >Student</span
                        ></label
                    >
                </div>
                <div
                    class="flex flex-col items-center bg-gray-300 rounded-3xl py-8 px-12 cursor-pointer"
                >
                    <img :src="illTeacher" alt="Illustration Student" />
                    <label class="flex items-center mt-6">
                        <span class="font-semibold text-purple-500"
                            >Teacher</span
                        ></label
                    >
                </div>
            </div>

            <!-- Btn Back & Sign Up -->
            <div class="flex flex-row mt-16 gap-6">
                <!-- Btn Back -->
                <button
                    class="bg-amber-500 text-black hover:bg-amber-800 hover:text-white font-reguler py-2 rounded-lg w-full border border-black focus:outline-none focus:shadow-outline"
                    type="button"
                    @click="handleBack"
                >
                    Back
                </button>

                <!-- Btn Next -->
                <button
                    class="bg-purple-500 text-white hover:bg-purple-800 hover:text-white font-reguler py-2 rounded-lg w-full border border-black focus:outline-none focus:shadow-outline"
                    type="submit"
                >
                    Sign Up
                </button>
            </div>
        </form>
    </div>
</template>
