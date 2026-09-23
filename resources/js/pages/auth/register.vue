<script setup>
import { computed, ref, reactive } from "vue";

import registerStepOne from "@/components/auth/register-step-one.vue";
import registerStepTwo from "@/components/auth/register-step-two.vue";

import btnBack from "../../../images/button_back.svg";
import illustrationLearn from "../../../images/illustration_learn.png";

const currentStep = ref(1);

const form = reactive({
    firstName: "",
    lastName: "",
    Email: "",
});

const steps = [
    { id: 1, label: "Basic Info" },
    { id: 2, label: "Password" },
    { id: 3, label: "Role" },
];

const currentStepData = computed(() => {
    return steps.find((step) => step.id === currentStep.value);
});

const nextStep = () => {
    console.log("Data step yang diterima:", form);

    if (currentStep.value < steps.length) {
        currentStep.value++;
    }
};

const backStep = () => {
    if (currentStep.value > steps.lenght) {
        currentStep.value--;
    }
};
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
                <h1 class="text-[22px] font-bold">Create Account</h1>

                <!-- Btn-Back -->
                <a href="/" class="flex items-end">
                    <div
                        class="w-[30px] h-[30px] transition duration-300 bg-black hover:bg-purple-500 hover:scale-110 active:scale-90 cursor-pointer"
                        :style="`mask: url(${btnBack}) no-repeat center / contain; -webkit-mask: url(${btnBack}) no-repeat center / contain;`"
                    ></div>
                </a>
            </div>

            <!-- Marker Form -->
            <div class="flex items-start justify-center md:justify-start">
                <template v-for="(step, index) in steps" :key="step.id">
                    <div class="flex flex-col items-center">
                        <!-- Step Circle -->
                        <div
                            class="flex rounded-full w-[30px] h-[30px] font-semibold items-center justify-center border-2"
                            :class="{
                                'border-black bg-amber-500 text-black':
                                    currentStep > step.id,

                                'border-amber-500 text-amber-500':
                                    currentStep == step.id,

                                'border-gray-500 text-gray-500':
                                    currentStep < step.id,
                            }"
                        >
                            <span v-if="currentStep > step.id"> ✓ </span>
                            <span v-else>
                                {{ step.id }}
                            </span>
                        </div>

                        <span
                            class="mt-2 text-xs font-reguler"
                            :class="{
                                'text-amber-500': currentStep >= step.id,
                                'text-gray-500': currentStep < step.id,
                            }"
                        >
                            {{ step.label }}</span
                        >
                    </div>

                    <!-- Connector -->
                    <div
                        v-if="index < steps.length - 1"
                        class="mx-4 mt-0.1 h-0.5 w-12 shrink-0 translate-y-[14px]"
                        :class="{
                            'bg-amber-500': currentStep > step.id,
                            'bg-gray-500': currentStep <= step.id,
                        }"
                    ></div>
                </template>
            </div>

            <!-- Step One -->
            <registerStepOne
                v-if="currentStep === 1"
                v-model="form"
                @next="nextStep"
            />

            <!-- Step Two -->
            <registerStepTwo
                v-if="currentStep === 2"
                v-model="form"
                @next="nextStep"
                @back="backStep"
            />
        </div>
    </div>
</template>
