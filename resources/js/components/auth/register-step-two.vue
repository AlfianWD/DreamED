<template>
    <div class="ml-2">
        <form>
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
                        class="shadow border border-amber-500 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none"
                        type="password"
                        placeholder="Enter your password again"
                    />
                </div>
            </div>

            <!-- Btn Back & Next -->
            <div class="flex flex-row mt-20">
                <!-- Btn Back -->
                <button
                    class="bg-amber-500 text-black hover:bg-amber-800 hover:text-white font-reguler py-2 px-20 rounded-lg w-full border border-black focus:outline-none focus:shadow-outline"
                    type="submit"
                >
                    Back
                </button>

                <!-- Btn Next -->
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
