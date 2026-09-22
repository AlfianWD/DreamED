<template>
    <div class="ml-2">
        <form>
            <div class="flex flex-row mt-10 gap-12">
                <!-- First Name -->
                <div class="mb-4">
                    <label
                        class="block text-[20px] font-semibold mb-4"
                        for="first-name"
                    >
                        First Name
                    </label>
                    <input
                        id="first-name"
                        class="shadow border border-amber-500 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none"
                        type="text"
                        placeholder="Input First Name"
                    />
                </div>

                <!-- Last Name -->
                <div class="mb-4">
                    <label
                        class="block text-[20px] font-semibold mb-4"
                        for="last-name"
                    >
                        Last Name
                    </label>
                    <input
                        id="last-name"
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
                    class="shadow border border-amber-500 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none"
                    type="email"
                    placeholder="Enter your email address"
                />
            </div>

            <!-- Btn Next -->
            <div class="flex justify-end mt-20">
                <a href="/coming-soon">
                    <button
                        class="bg-purple-500 text-white hover:bg-purple-800 hover:text-white font-reguler py-2 px-20 rounded-lg w-full border border-black focus:outline-none focus:shadow-outline"
                        type="button"
                    >
                        Next
                    </button>
                </a>
            </div>
        </form>
    </div>
</template>
