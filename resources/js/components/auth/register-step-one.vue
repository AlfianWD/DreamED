<script setup>
console.log("RegisterStepOne berhasil dimuat");

const model = defineModel({
    type: Object,
    required: true,
});

const emit = defineEmits(["next"]);

const handleSubmit = () => {
    console.log("handleSubmit berhasil dijalankan");
    console.log("Data Form saat ini:", model.value);
    emit("next");
};
</script>

<template>
    <div class="ml-2">
        <form @submit.prevent="handleSubmit">
            <div class="flex flex-col mt-14 md:mt-10 md:flex-row md:gap-12">
                <!-- First Name -->
                <div class="mb-4 w-full">
                    <label
                        class="block text-[20px] font-semibold mb-4"
                        for="first-name"
                    >
                        First Name
                    </label>
                    <input
                        id="first-name"
                        v-model="model.firstName"
                        class="shadow border border-amber-500 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none"
                        type="text"
                        placeholder="Input First Name"
                    />
                </div>

                <!-- Last Name -->
                <div class="mb-4 w-full">
                    <label
                        class="block text-[20px] font-semibold mb-4"
                        for="last-name"
                    >
                        Last Name
                    </label>
                    <input
                        id="last-name"
                        v-model="model.lastName"
                        class="shadow border border-amber-500 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none"
                        type="text"
                        placeholder="Input Last Name"
                    />
                </div>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-[20px] font-semibold mb-4" for="email"
                    >Email</label
                >
                <input
                    id="email"
                    v-model="model.Email"
                    class="shadow border border-amber-500 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none"
                    type="email"
                    placeholder="Enter your email address"
                />
            </div>

            <!-- Btn Next -->
            <div class="flex justify-end mt-20">
                <button
                    class="bg-purple-500 text-white hover:bg-purple-800 hover:text-white font-reguler py-2 px-20 rounded-lg w-full border border-black focus:outline-none focus:shadow-outline"
                    type="submit"
                >
                    Next
                </button>
            </div>
        </form>
    </div>
</template>
