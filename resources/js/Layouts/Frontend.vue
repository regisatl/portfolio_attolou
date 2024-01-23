<script setup>
import Header from "@/Components/Frontend/Header.vue";
import Footer from "@/Components/Frontend/Footer.vue";
</script>

<template>
    <div class="bg-gray-200 dark:bg-slate-900">
        <!----Header--->
        <Header />
        <!----Main--->
        <main class="min-h-screen animate-slide-up transition-all">
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

/* @keyframes slide-up {
    0% {
        transform: sY(100%);
        opacity: 0;
    }

    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

.animate-slide-up {
    animation-name: slide-up;
    animation-duration: 2s;
    animation-timing-function: ease-in-out;
    animation-fill-mode: forwards;
} */

</style>
