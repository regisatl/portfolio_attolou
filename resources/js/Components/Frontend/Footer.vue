<script setup>

</script>

<template>
    <div class="bg-light-secondary dark:bg-gray-800 py-12">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row space-y-6 lg:space-y-0 items-center justify-between">
                <div class="flex space-x-6 items-center justify-center">
                    <img src="/images/cv.png" alt="cv attolou" class="w-24">
                </div>
                <p class="text-gray-100 text-[15px]">
                    &copy; {{ (new Date()).getFullYear() }}.  All right reserved.
                </p>
            </div>
        </div>
    </div>
</template>

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>
