<script setup>
import { Head } from '@inertiajs/vue3';
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import Promote from "@/Components/Frontend/Promote.vue";
import About from "@/Components/Frontend/About.vue";
import Skills from "@/Components/Frontend/Skills.vue";
import Portfolio from "@/Components/Frontend/Portfolio.vue";

defineProps({
    skills: Object,
    projects: Object
});

</script>

<template>
    <Head title="Welcome to portfolio Attolou" />
    <FrontendLayout>
        <!---Hero primary-->
        <Hero />
        <!---Promot tail-100-->
        <Promote />
        <!---About secondary-->
        <About />
        <!---Skills  tail-100-->
        <Skills :skills="skills" />
        <!---Portfolio primary-->
        <Portfolio :skills="skills" :projects="projects"/>
        <!---Services secondary-->
        <!---Contact primary-->
    </FrontendLayout>
</template>

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>

