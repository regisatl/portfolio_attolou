<script setup>
import Projects from "@/Components/Frontend/Projects.vue";

defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>
    <section id="portfolio" class="section dark:bg-slate-950 bg-amber-50 min-h-screen py-8">
        <div class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2 class="text-3xl lg:text-4xl md:text-xl sm:text-xl font-medium lg:font-extrabold md:font-bold text-slate-800 dark:text-amber-100 py-5">My Latest work</h2>
                <p class="text-lg text-slate-600 dark:text-gray-100 mb-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                </p>
            </div>
            <Projects :skills="skills" :projects="projects"/>
        </div>
    </section>
</template>


<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>
