<script setup>
defineProps({
    skills: Object,
});
</script>

<template>
    <section id="skills" class="dark:bg-slate-800 py-10 bg-white">
        <div class="container mx-auto" v-motion:initial="{opacity:0, y:100,}" :visible="{opacity:1, y:0,}">
            <h2
                class="text-center text-3xl lg:text-4xl md:text-xl sm:text-xl font-medium lg:font-extrabold md:font-bold text-slate-800 dark:text-amber-100 mb-5">
                My Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-y-4 py-8">
                <div class="flex flex-col items-center justify-center" v-for="skill in skills.data" :key="skill.id">
                    <img :src="skill.image" :alt="skill.name" class="h-12 lg:h-12 rounded-full animate-slide-up-image" />
                    <div class="hidden md:block lg:block mt-2">
                        <h3 class="text-sm font-bold dark:text-gray-100">{{ skill.name }}</h3>
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
