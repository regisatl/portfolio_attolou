<script setup>

</script>
<template>
    <section id="home"
        class="lg:h-[85vh] flex items-center bg-amber-50 dark:bg-gray-900 py-32 lg:py-0 overflow-hidden animate-slide-up">
        <div class="container mx-auto h-full">
            <div class="flex flex-col md:flex-row items-center h-full">
                <div class="flex-1 flex-col items-center lg:items-start">
                    <p class="text-lg text-[#40a4fb] dark:text-amber-100 text-md mb-[22px] font-semibold">Hey, I'm Régis
                        ATTOLOU </p>
                    <h1
                        class="text-4xl leading-[44px] md:text-5xl md:leading-light lg:text-7xl lg:leading-[1 ] font-bold md:tracking-[-2px] dark:text-gray-100 text-slate-800">
                        I Build & Design <br /> Web Interfaces.
                    </h1>
                    <p
                        class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-lg lg:text-justify dark:text-gray-300 text-slate-700">
                        I create digital landscapes where functionality meets aesthetics. My work involves crafting
                        user-friendly interfaces that not only look visually appealing but also provide seamless navigation
                        for the end-user. I believe in the power of design to enhance the user experience, and I strive to
                        incorporate this belief into every interface I build.
                    </p>
                    <button
                        class="btn btn-md dark:bg-blue-500 hover:bg-slate-700 text-gray-100 bg-slate-800 md:btn-lg transition-all px-4 py-3 dark:text-gray-50 font-semibold dark:hover:bg-blue-600 rounded-lg shadow-lg">Work
                        with
                        me</button>
                </div>
                <div
                    class="flex flex-1 justify-end items-center h-full mt-8 md:mt-0 md:ms-2 transform hover:scale-110 transition duration-700">
                    <img class="object-cover rounded-lg bg-white/5 ring-1 ring-white/1 animate-slide-up-image" src="/images/img/hero8.jpg"
                        alt="Hero image">
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
