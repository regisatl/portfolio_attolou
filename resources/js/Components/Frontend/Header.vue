<script setup>
import { ref } from "vue";
const showMobileMenuNavbar = ref("false");
const showMobileMenuLogo = ref("false");

const showMenuNavbar = () => {
    showMobileMenuNavbar.value =!showMobileMenuNavbar.value;
}

const showMenuLogo = () => {
    showMobileMenuLogo.value =!showMobileMenuLogo.value;
}

const clickBody = () => {
    showMobileMenuNavbar.value = false;
    showMobileMenuLogo.value = false;
}

</script>

<template>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5">
            <a href="#"
                class="flex items-center rtl:space-x-reverse hover:animate-bounce transition duration- delay-150 ease-in-out relative">
                <img src="/images/cv.png" class="h-10" alt="CV Logo" />
                <span
                    class="self-center text-2xl font-bold whitespace-nowrap dark:text-white uppercase text-[#9dc451] absolute left-8 top-1">urriculum
                    Vitae</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse relative">
                <button type="button" @click="showMenuLogo"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/images/photo.jpg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-b-lg dark:rounded-lg shadow dark:bg-gray-800 dark:divide-gray-600 transition duration-300 absolute top-8 right-12 lg:top-5 lg:right-0"
                :class="{hidden : showMobileMenuLogo}"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">Admin ATTOLOU</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">adminattolou@gmail.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-emerald-500 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-emerald-500 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-emerald-500 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
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
            <div class="items-center justify-between w-full md:flex md:w-auto md:order-1 transition duration-300" :class="{hidden : showMobileMenuNavbar}" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-emerald-500 md:hover:bg-transparent md:hover:text-emerald-700 md:p-0 dark:text-white md:dark:hover:text-emerald-500 dark:hover:bg-emerald-500 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition duration-500 transform hover:scale-110">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-emerald-500 md:hover:bg-transparent md:hover:text-emerald-700 md:p-0 dark:text-white md:dark:hover:text-emerald-500 dark:hover:bg-emerald-500 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition duration-500 transform hover:scale-110">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-emerald-500 md:hover:bg-transparent md:hover:text-emerald-700 md:p-0 dark:text-white md:dark:hover:text-emerald-500 dark:hover:bg-emerald-500 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition duration-500 transform hover:scale-110">Skills</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-emerald-500 md:hover:bg-transparent md:hover:text-emerald-700 md:p-0 dark:text-white md:dark:hover:text-emerald-500 dark:hover:bg-emerald-500 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition duration-500 transform hover:scale-110">Projects</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-emerald-500 md:hover:bg-transparent md:hover:text-emerald-700 md:p-0 dark:text-white md:dark:hover:text-emerald-500 dark:hover:bg-emerald-500 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition duration-500 transform hover:scale-110">Contact</a>
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
