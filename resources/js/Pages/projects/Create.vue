<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    skills: Array,
});

const form = useForm({
    name: "",
    image: null,
    skill_id: "",
    project_url: "",
});

const submit = () => {
    form.post(route('projects.store'));
};

</script>

<template>
    <Head title="Projects create" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">New Project</h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8">
                <form @submit.prevent="submit">
                    <div class="mb-3">
                        <select v-model="form.skill_id" id="skill_id" name="skill_id"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:ring-border-indigo-500 sm:text-sm rounded-md">
                            <option value="" selected disabled>Select one category skill</option>
                            <option v-for="skill in skills" :key="skill.id" :value="skill.id">{{ skill.name }}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <InputLabel for="name" value="Name" />
                        <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus
                            aria-autocomplete="name" />
                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>
                    <div class="mb-3">
                        <InputLabel for="project_url" value="Project_Url" />
                        <TextInput id="project_url" type="text" class="mt-1 block w-full" v-model="form.project_url"
                            autofocus aria-autocomplete="projecturl" />
                        <InputError class="mt-2" :message="form.errors.project_" />
                    </div>
                    <div>
                        <InputLabel for="image" value="Image" />
                        <TextInput id="image" type="file" class="mt-1 block w-full"
                            @input="form.image = $event.target.files[0]" />
                        <InputError class="mt-2" :message="form.errors.image" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton class="w-full flex justify-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Create
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


<style></style>
