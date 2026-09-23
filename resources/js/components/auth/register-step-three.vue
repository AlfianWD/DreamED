<script setup>
import illStudent from "../../../images/Illustration_Student.png";
import illTeacher from "../../../images/Illustration_Teacher.png";

const model = defineModel({
    type: Object,
    required: true,
});

const emit = defineEmits(["Sign In", "Back"]);

const selectRole = (role) => {
    model.value.role = role;
    console.log("Role dipilih:", model.value.role);
};

const roleForm = () => {
    console.log("Data terkirim:", model.value);
    emit("Sign In");
};

const handleBack = () => {
    emit("Back");
};
</script>

<template>
    <div class="ml-2">
        <form @submit.prevent="roleForm">
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
                    class="flex flex-col items-center rounded-3xl py-8 px-12 cursor-pointer border-2 hover:scale-110 active:scale-90"
                    :class="{
                        'bg-gray-300 border-amber-500':
                            model.role === 'student',
                        'bg-gray-300 border-transparent':
                            model.role !== 'student',
                    }"
                    @click="selectRole('student')"
                >
                    <img :src="illStudent" alt="Illustration Student" />

                    <label class="flex items-center mt-6">
                        <span class="font-semibold text-amber-500">
                            Student
                        </span>
                    </label>
                </div>
                <!-- Teacher Card -->
                <div
                    class="flex flex-col items-center rounded-3xl py-8 px-12 cursor-pointer border-2 hover:scale-110 active:scale-90"
                    :class="{
                        'bg-gray-300 border-purple-500':
                            model.role === 'teacher',
                        'bg-gray-300 border-transparant':
                            model.role !== 'teacher',
                    }"
                    @click="selectRole('teacher')"
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
