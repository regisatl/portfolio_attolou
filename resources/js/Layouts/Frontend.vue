<script setup>
import Header from "@/Components/Frontend/Header.vue";
import Footer from "@/Components/Frontend/Footer.vue";
</script>

<template>
    <div class="bg-gray-200 dark:bg-slate-900">
        <!----Header--->
        <Header />
        <!----Main--->
        <main class="min-h-screen">
             <slot />
        </main>
        <!----Footer--->
        <Footer />
    </div>
</template>

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>
