<script setup>
import { Link } from '@inertiajs/vue3';

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
                    <div class="flex flex-col items-start space-y-4">
                        <h3
                            class="subtitle-title text-xl lg:text-2xl md:text-xl sm:text-xl font-medium lg:font-extrabold md:font-bold text-slate-800 dark:text-amber-100">
                            Email</h3>
                        <p class="lg:text-lg md:text-lg sm:text-md text-slate-700 dark:text-amber-100">
                            <Link href="mailto:regisattolou21@outlook.fr">regisattolou21@outlook.fr</Link>
                        </p>
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
