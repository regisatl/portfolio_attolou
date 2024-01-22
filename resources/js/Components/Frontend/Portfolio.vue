<script setup>
import Projects from "@/Components/Frontend/Projects.vue";

defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>
    <section id="portfolio" class="section dark:bg-slate-800 min-h-[1400px]">
        <div class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2 class="text-4xl font-bold">My Latest work in Portfolio</h2>
                <p class="text-lg">
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
