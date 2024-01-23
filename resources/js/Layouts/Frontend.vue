<script setup>
import Header from "@/Components/Frontend/Header.vue";
import Footer from "@/Components/Frontend/Footer.vue";
</script>

<template>
    <div class="bg-gray-200 dark:bg-slate-900">
        <!----Header--->
        <Header />
        <!----Main--->
        <main class="min-h-screen transition-all">
            <slot />
        </main>
        <!----Footer--->
        <Footer />
    </div>
</template>

<style>
body {
    scroll-behavior: smooth;
    font-family: 'Poppins', sans-serif;
}

@keyframes slide-up {
    0% {
        transform: scale(0);
        opacity: 0;
    }

    100% {
        transform:scale(1);
        opacity: 1;
    }
}

.animate-slide-up {
    animation-name: slide-up;
    animation-duration: 3s;
    animation-timing-function: ease-in-out;
    animation-fill-mode: forwards;
}
.animate-slide-up-image {
    animation-name: slide-up;
    animation-duration: 5s;
    animation-timing-function: ease-in-out;
    animation-fill-mode: forwards;
}

</style>
