<script setup>
const model = defineModel({
    type: Object,
    required: true,
});

const emit = defineEmits(["next", "back"]);

const passwordForm = () => {
    emit("Next");
};

const handleBack = () => {
    emit("Back");
};
</script>

<template>
    <div class="ml-2">
        <form @submit.prevent="passwordForm">
            <div class="flex flex-col mt-14">
                <!-- Password -->
                <div class="mb-6">
                    <label
                        class="block text-[20px] font-semibold mb-4"
                        for="password"
                        >Password</label
                    >
                    <input
                        id="password"
                        v-model="model.password"
                        class="shadow border border-amber-500 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none"
                        type="password"
                        placeholder="Enter your password"
                    />
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label
                        class="block text-[20px] font-semibold mb-4"
                        for="password"
                        >Confirm Password</label
                    >
                    <input
                        id="Confirm-password"
                        v-model="model.confirmPassword"
                        class="shadow border border-amber-500 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none"
                        type="password"
                        placeholder="Enter your password again"
                    />
                </div>
            </div>

            <!-- Btn Back & Next -->
            <div class="flex flex-row mt-20 gap-6">
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
                    Next
                </button>
            </div>
        </form>
    </div>
</template>
