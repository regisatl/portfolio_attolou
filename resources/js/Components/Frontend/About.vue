<script setup></script>
<template>
    <section class="section bg-amber-50 dark:bg-slate-900">
        <div class="container mx-auto lg:py-14 md:py-8 sm:py-8">
            <div class="flex flex-col xl:flex-row sm:py-2 gap-24 animate-slide-up-image">
                <img src="/images/img/hero4.jpg"
                    class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 my-5 rounded-2xl bg-white/5 ring-1 ring-white/1 transform hover:scale-105 transition duration-700"
                    alt="about">
                <div class="flex flex-col items-center text-center lg:items-start lg:text-left my-5">
                    <div class="flex flex-col">
                        <h2 id="about"
                            class="text-3xl lg:text-4xl md:text-xl sm:text-xl font-medium lg:font-extrabold md:font-bold mb-3 text-slate-800 dark:text-amber-100">
                            About Me
                        </h2>
                        <p class="mb-4 text-[#40a4fb] dark:text-gray-300 font-semibold">Freelance frontend and backend web
                            developer</p>
                        <hr class="mb-8 opacity-90 dark:opacity-5" />
                        <p class="mb-8 dark:text-gray-400">
                            My name is Régis F. M. ATTOLOU and I am a student-intern at HIGHFIVE UNIVERSITY located in the
                            premises of VIPP INTERTIS BENIN. I am a Junior Web Developer with the ability to develop any
                            type of website, database designs, design flyers, logos, invitation/personal/etc... cards, and
                            any other related with graphics.
                        </p>
                        <p class="mb-8 dark:text-gray-400">
                            My dream is to create my personal business bringing together all areas of working life such as:
                            Sewing, Carpentry, Mechanics, IT workshops etc...
                            I am sociable and very friendly with everyone even if sometimes I become very weird and
                            ridiculous.
                            I am very passionate about computers and everything related to technology. Passions provides
                            incontestable arguments to circumvent obstacles.
                            <br /><br />Dreams are not the things we see in our sleep, dreams are the things that keep us
                            from sleeping. It's all about money.
                        </p>
                    </div>
                    <a href="#contact"
                        class="btn btn-md bg-slate-800 hover:bg-slate-600 dark:bg-blue-500 dark:hover:bg-blue-600 text-gray-100 rounded-lg shadow-lg py-3 px-5 font-semibold">
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<style>
body {
    scroll-behavior: smooth;
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
