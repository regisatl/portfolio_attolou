<script setup>
import { Head } from '@inertiajs/vue3';
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import Promote from "@/Components/Frontend/Promote.vue";

</script>

<template>
    <Head title="Welcome to portfolio Attolou" />
    <FrontendLayout>
        <!---Hero primary-->
        <Hero />
        <!---Promot tail-100-->
        <Promote />
        <!---About secondary-->
        <!---Skills  tail-100-->
        <!---Portfolio primary-->
        <!---Services secondary-->
        <!---Contact primary-->
    </FrontendLayout>
</template>

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>

