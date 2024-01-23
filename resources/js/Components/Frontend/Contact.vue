<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

defineProps({
    skills: Object,
});

const showMessage = ref(false);

const form = useForm({
    name: "",
    email: "",
    message: "",
});

const setShowMessage = (value) => {
    showMessage.value = value;
}

const cleanForm = () => {
    setShowMessage(true);
    form.reset();
    setTimeout(() => setShowMessage(false), 2000);
}

const submit = () => {
    form.post(route('contact'), {
        preserveScroll: true,
        onSuccess: () => {
            cleanForm()
        }
    });
}

</script>

<template>
    <section class="section dark:bg-slate-800 py-12 bg-amber-50">
        <div class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2
                    class="subtitle-title text-3xl lg:text-4xl md:text-xl sm:text-xl font-medium lg:font-extrabold md:font-bold text-slate-800 dark:text-amber-100">
                    Contact Me</h2>
                <p class="lg:text-lg md:text-lg sm:text-md text-slate-700 dark:text-gray-100 mt-4">
                    Feel free to reach out to me.
                </p>
            </div>

            <div class="flex flex-col lg:flex-row md:flex-row md:items-center md:gap-x-2 lg:gap-x-8">
                <div class="flex flex-1 flex-col items-start space-y-8 mb-12 lg:mb-0 lg:pt-2">
                    <div class="flex flex-col lg:flex-row gap-x-4">
                        <div
                            class="text-[#40a4fb] rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                            </svg>
                        </div>
                        <div class="">
                            <h4 class="font-semibold text-xl mb-1 text-slate-800 dark:text-amber-100">Have a question ?
                            </h4>
                            <p class="text-slate-800 dark:text-gray-100 font-medium">I am here to help you.</p>
                            <p><span class="text-slate-800 dark:text-gray-100 text-sm">Email me at :</span>
                                <a href="mailto:regisattolou21@outlook.fr"
                                    class="text-[#40a4fb] hover:text-blue-500 font-medium text-sm">
                                    regisattolou21@outlook.fr</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-x-4">
                        <div
                            class="text-[#40a4fb] rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                            </svg>
                        </div>
                        <div class="">
                            <h4 class="font-semibold text-xl mb-1 text-slate-800 dark:text-amber-100">Current Location
                            </h4>
                            <p class="font-normal text-sm mb-1 text-slate-800 dark:text-gray-100">Abomey-Calavi /
                                Tokan-Jésuko / MS ATTOLOU</p>
                            <p class="font-normal text-sm mb-1 text-slate-800 dark:text-gray-100">Services clients
                                worldwide</p>
                        </div>
                    </div>
                </div>
                <form @submit.prevent="submit" class="space-y-8 w-full max-w-md">
                    <div v-if="showMessage" class="p-4 bg-emerald-500 dark:bg-emerald-400 dark:text-gray-900 text-gray-100 rounded-lg">Thank you for contacting
                        me</div>
                    <div class="flex gap-8">
                        <div>
                            <input v-model="form.name" type="text" name="name" id="" placeholder="Your name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#40a4fb] focus:border-[#40a4fb] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#40a4fb] dark:focus:border-[#40a4fb]"
                                required />
                            <span v-if="form.errors.name" class="text-sm font-medium m-2 text-red-500">{{ form.errors.name
                            }}</span>
                        </div>
                        <div>
                            <input v-model="form.email" type="email" name="email" id="" placeholder="Your email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#40a4fb] focus:border-[#40a4fb] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#40a4fb] dark:focus:border-[#40a4fb]"
                                required />
                            <span v-if="form.errors.email" class="text-sm font-medium m-2 text-red-500">{{ form.errors.email
                            }}</span>
                        </div>
                    </div>
                    <span v-if="form.errors.message" class="text-sm font-medium m-2 text-red-500">{{ form.errors.message
                    }}</span>
                    <textarea v-model="form.message" id="message" rows="4" name="message"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#40a4fb] focus:border-[#40a4fb] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#40a4fb] dark:focus:border-[#40a4fb]"
                        placeholder="Write your message..." spellcheck="false" style="resize:none" required></textarea>
                    <button type="submit"
                        class="text-gray-100 bg-slate-800 hover:bg-slate-900 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#40a4fb] dark:hover:bg-blue-600  dark:border-[#40a4fb] w-full">Send
                    </button>
                </form>
            </div>
        </div>
    </section>
</template>


<style>body {
    font-family: 'Poppins', sans-serif;
}</style>
