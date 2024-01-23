<script setup>

</script>

<template>
    <div class="bg-amber-50 dark:bg-gray-800 py-12 border-t-2 border-gray-200">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row space-y-6 lg:space-y-0 items-center justify-between">
                <div class="flex space-x-6 items-center justify-center">
                    <img src="/images/cv.png" alt="cv attolou" class="w-24">
                </div>
                <p class="dark:text-gray-100 text-slate-700 text-[15px] font-medium">
                    &copy; ATL Technologie {{ (new Date()).getFullYear() }}.  All right reserved.
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
