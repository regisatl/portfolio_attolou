<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    project: Object,
});
</script>

<template>
    <Link href="project.project_url" class="group flex flex-col items-center text-center cursor-pointer">
        <div class="mb-6">
            <img :src="project.image" :alt="project.name" class="rounded-2xl h-56">
        </div>
        <div class="flex gap-5">
            <span class="group-hover:text-emerald-600 capitalize text-slate-800 font-medium text-sm mb-3">{{ project.skill.name }}</span>
            <h3 class="group-hover:text-emerald-600 capitalize text-slate-800 font-medium text-sm mb-3">{{ project.name }}</h3>
        </div>
    </Link>
</template>


<style>
body {
    font-family: 'Poppins', sans-serif;
}
</style>
