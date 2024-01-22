<script setup>


defineProps({
    skills: Object,
});

</script>

<template>
    <section class="dark:bg-slate-800 py-12 bg-amber-50">
        <div class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2
                    class="subtitle-title text-3xl lg:text-4xl md:text-xl sm:text-xl font-medium lg:font-extrabold md:font-bold text-slate-800 dark:text-amber-100">
                    Contact Me</h2>
                <p class="lg:text-lg md:text-lg sm:text-md text-slate-700 dark:text-amber-100 mt-4">
                    Feel free to reach out to me.
                </p>
            </div>
            <div class="flex flex-col lg:flex-row lg:gap-x-8">
                <div class="flex flex-1 flex-col items-start space-y-8 mb-12 lg:mb-0 lg:pt-2">
                    <div class="flex flex-col lg:flex-row gap-x-4">
                        <div
                            class="text-blue-500 rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                        </div>
                        <div class=""></div>
                    </div>
                </div>
            </div>
            <form class="space-y-8 w-full max-w-md"></form>
        </div>
    </section>
</template>


<style>
body {
    font-family: 'Poppins', sans-serif;
}
</style>
