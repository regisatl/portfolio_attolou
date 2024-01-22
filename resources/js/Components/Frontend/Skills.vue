<script setup>
defineProps({
    skills: Object,
});
</script>

<template>
    <section class="bg-amber-50 dark:bg-slate-800">
        <div class="container mx-auto">
            <div class="grid grid-cols-8 md:grid-flow-col">
                <div class="flex items-center justify-center" v-for="skill in skills" :key="skill.id">
                    <img :src="skill.image" :alt="skill.name" class="lg:h-12"/>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold">{{ skill.name }}</h3>
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
