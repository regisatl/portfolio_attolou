<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    project: Object,
});
</script>

<template>
    <Link href="project.project_url"
        class="group flex flex-col items-center text-center cursor-pointer animate-slide-up ">
    <div class="card bg-white  transform hover:scale-105 transition duration-700 shadow-lg rounded-lg py-5 px-20">
        <div class="mb-6">
            <img :src="project.image" :alt="project.name" class="rounded-2xl h-56 animate-slide-up-image">
        </div>
        <div class="flex flex-col justify-center items-center gap-5">
            <span
                class="group-hover:text-emerald-600 dark:text-gray-400 dark:group-hover:text-emerald-500 capitalize text-slate-800 font-medium text-sm mb-3">{{
                    project.skill.name }}</span>
            <h3
                class="group-hover:text-emerald-600 dark:text-gray-400 dark:group-hover:text-emerald-500 capitalize text-slate-800 font-medium text-sm mb-3">
                {{ project.name }}</h3>
        </div>
    </div>
    </Link>
</template>


<style>
body {
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
