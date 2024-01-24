<script setup>
import Project from "@/Components/Frontend/Project.vue";
import { ref } from "vue";
const props = defineProps({
    skills: Object,
    projects: Object
});

const filteredProjects = ref(props.projects.data);
const selectedSkill = ref('all');

const filterProjects = (id) => {
    if (id === "all") {
        filteredProjects.value = props.projects.data;
        selectedSkill.value = id;
    } else {
        filteredProjects.value = props.projects.data.filter(project => {
            return project.skill.id === id;
        });
        selectedSkill.value = id;
    }
}

</script>

<template>
    <div class="container mx-auto">
        <nav class="mb-12 border-b-2 border-slate-800 dark:text-dark-navy-100">
            <ul class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-y-4">
                <li class="cursor-pointer capitalize m-4">
                    <button @click="filterProjects('all')"
                        class="flex text-center px-4 py-2 text-slate-800 hover:text-gray-100 transition-all duration-500 rounded-lg shadow-lg border-2 border-emerald-500 hover:bg-emerald-600 font-medium dark:text-gray-100"
                        :active="[selectedSkill === 'all' ? 'text-gray-100 bg-[#40a4fb] dark:text-[#40a4fb]' : '']"
                        :class="[selectedSkill === 'all' ? 'text-gray-100 hover:bg-emerald-500 dark:text-white' : '']">All</button>
                </li>
                <li class="cursor-pointer capitalize m-4" v-for="projectSkill in skills.data" :key="projectSkill.id">
                    <button @click="filterProjects(projectSkill.id)"
                        class="flex text-center text-slate-800 hover:text-gray-100 transition-all duration-500 rounded-lg shadow-lg px-4 py-2 border-2 border-[#40a4fb] hover:bg-[#40a4fb] font-medium dark:text-gray-100"  :active="[selectedSkill === projectSkill.id ? ' text-gray-100 bg-[#40a4fb]dark:text-[#40a4fb]' : '']" :class="[selectedSkill === projectSkill.id ? 'text-[#40a4fb]dark:text-gray-100' : '']">{{
                            projectSkill.name }}</button>
                </li>
            </ul>
        </nav>
        <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
            <Project v-for="project in filteredProjects" :key="project.id" :project="project" />
        </section>
    </div>
</template>


<style>
body {
    font-family: 'Poppins', sans-serif;
}
</style>
