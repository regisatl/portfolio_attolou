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
                            class="mt-1 block w-full pl-3 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:ring-border-indigo-500 sm:text-sm rounded-md">
                            <option value="" selected disabled>Select one category skill</option>
                            <option v-for="skill in skills" :key="skill.id" :value="skill.id">{{ skill.name }}</option>
                        </select>
                        <InputError class="mt-2" :message="$page.props.errors.skill_id" />
                    </div>
                    <div class="mb-3">
                        <InputLabel for="name" value="Name" />
                        <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus
                            aria-autocomplete="name" />
                        <InputError class="mt-2" :message="$page.props.errors.name" />
                    </div>
                    <div class="mb-3">
                        <InputLabel for="project_url" value="Project_Url" />
                        <TextInput id="project_url" type="text" class="mt-1 block w-full" v-model="form.project_url"
                            autofocus aria-autocomplete="project_url" />
                        <InputError class="mt-2" :message="$page.props.errors.project_url" />
                    </div>
                    <div>
                        <InputLabel for="image" value="Image" />
                        <TextInput id="image" type="file"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 py-3 px-2"
                            @input="form.image = $event.target.files[0]" />
                        <InputError class="mt-2" :message="$page.props.errors.image" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton class="w-full flex justify-center py-3" :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing">
                            Create
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


<style>
body {
    font-family: 'Poppins', sans-serif;
}
</style>
