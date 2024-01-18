<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const form = useForm({
    name: '',
    image: null,
});


const submit = () => {
    form.post(route('skills.store'));
};

</script>

<template>
    <Head title="Skills create" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">New Skill</h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white rounded-lg">
                <form class="p-8" @submit.prevent="submit">
                    <div class="mb-3">
                        <InputLabel for="name" value="Name" />
                        <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus
                            aria-autocomplete="username" />
                        <InputError class="mt-2" :message="$page.props.errors.name" />
                    </div>
                    <div>
                        <InputLabel for="image" value="Image" class="mb-1" />
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


<style></style>
