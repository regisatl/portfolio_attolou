<script setup>
defineProps({
    skills: Object,
});
</script>

<template>
    <section class="dark:bg-slate-800 py-12">
        <div class="container mx-auto">
            <h2 class="text-center lg:text-3xl font-bold text-slate-800 dark:text-gray-100 mb-5">My Skills</h2>
            <div class="grid grid-cols-8 md:grid-flow-col">
                <div class="flex items-center justify-center" v-for="skill in skills.data" :key="skill.id">
                    <img :src="skill.image" :alt="skill.name" class="lg:h-12 rounded-full"/>
                    <div class="ml-4">
                        <h3 class="text-sm font-bold">{{ skill.name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>
