<script setup>
import { ref } from "vue";
const showMobileMenuNavbar = ref("false");
const showMobileMenuLogo = ref("false");

const showMenuNavbar = () => {
    showMobileMenuNavbar.value = !showMobileMenuNavbar.value;
}

const showMenuLogo = () => {
    showMobileMenuLogo.value = !showMobileMenuLogo.value;
}

</script>

<template>
    <nav class="bg-amber-50 border-b-2 border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-5">
            <a href="#"
                class="flex items-center rtl:space-x-reverse hover:animate-bounce transition duration- delay-150 ease-in-out relative">
                <img src="/images/cv.png" class="h-10" alt="CV Logo" />
                <span
                    class="self-center text-2xl font-bold whitespace-nowrap dark:text-white uppercase text-[#40a4fb] dark:hover:text-[#40a4fb] absolute left-8 top-1">urriculum
                    Vitae</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse relative">
                <button type="button" @click="showMenuLogo"
                    class="flex text-sm text-[#40a4fb] rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-b-lg dark:rounded-lg shadow dark:bg-gray-800 dark:divide-gray-600 transition duration-300 absolute top-8 right-12 lg:top-10 lg:right-0"
                    :class="{ hidden: showMobileMenuLogo }" id="user-dropdown">
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-emerald-500 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a :href="route('login')"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-emerald-500 dark:text-gray-200 dark:hover:text-white">Sign
                                In</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button" @click="showMenuNavbar"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between w-full md:flex md:w-auto md:order-1 transition duration-300"
                :class="{ hidden: showMobileMenuNavbar }" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg bg-amber-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-amber-50 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#home"
                            class="block py-3 px-4 text-slate-800 hover:text-gray-100 rounded hover:bg-[#40a4fb] md:hover:bg-transparent md:hover:text-[#40a4fb] md:p-0 dark:text-white md:dark:hover:text-[#40a4fb] dark:hover:bg-blue-500 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition duration-500 transform hover:scale-110 active:text-emerald-500">Home</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="block py-3 px-4 text-slate-800 hover:text-gray-100 rounded hover:bg-[#40a4fb] md:hover:bg-transparent md:hover:text-[#40a4fb] md:p-0 dark:text-white md:dark:hover:text-[#40a4fb] dark:hover:bg-[#40a4fb] dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition duration-500 transform hover:scale-110 active:text-emerald-500">About</a>
                    </li>
                    <li>
                        <a href="#skills"
                            class="block py-3 px-4 text-slate-800 hover:text-gray-100 rounded hover:bg-[#40a4fb] md:hover:bg-transparent md:hover:text-[#40a4fb] md:p-0 dark:text-white md:dark:hover:text-[#40a4fb] dark:hover:bg-[#40a4fb] dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition duration-500 transform hover:scale-110 active:text-emerald-500">Skills</a>
                    </li>
                    <li>
                        <a href="#projects"
                            class="block py-3 px-4 text-slate-800 hover:text-gray-100 rounded hover:bg-[#40a4fb] md:hover:bg-transparent md:hover:text-[#40a4fb] md:p-0 dark:text-white md:dark:hover:text-[#40a4fb] dark:hover:bg-[#40a4fb] dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition duration-500 transform hover:scale-110 active:text-emerald-500">Projects</a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="block py-3 px-4 text-slate-800 hover:text-gray-100 rounded hover:bg-[#40a4fb] md:hover:bg-transparent md:hover:text-[#40a4fb] md:p-0 dark:text-white md:dark:hover:text-[#40a4fb] dark:hover:bg-[#40a4fb] dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition duration-500 transform hover:scale-110 active:text-emerald-500">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<style>
body {
    font-family: 'Poppins', sans-serif;
}</style>
