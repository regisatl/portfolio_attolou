<script setup>
</script>

<template>
    <div class="bg-whiteani mate-slide-up">
        <div class="container mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
            <h2 id="promote"
                class="text-3xl text-center lg:text-4xl md:text-xl sm:text-xl font-medium lg:font-extrabold md:font-bold mb-3 text-slate-800 dark:text-amber-100">
                Promote</h2>
            <div
                class="relative isolate overflow-hidden dark:bg-gray-950 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                <svg viewBox="0 0 1024 1024"
                    class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0"
                    aria-hidden="true">
                    <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)"
                        fill-opacity="0.7" />
                    <defs>
                        <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                            <stop stop-color="#7775D6" />
                            <stop offset="1" stop-color="#E935C1" />
                        </radialGradient>
                    </defs>
                </svg>
                <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                    <h3 class="text-sm font-bold tracking-tight text-slate-800 dark:text-amber-100 sm:text-4xl">Boost your
                        productivity.<br />Start using our app today.</h3>
                    <p class="mt-6 text-lg leading-8 dark:text-gray-100 text-slate-500">Discover a connected work experience
                        where smarter, more efficient work happens, all supercharged by AI. Revolutionize your note-taking
                        experience and boost your productivity with Bing AI..</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                        <a href="#"
                            class="rounded-lg px-3.5 py-2.5 text-sm font-semibold text-gray-100 dark:bg-blue-500 dark:hover:bg-blue-600 shadow-lg bg-slate-800 hover:bg-slate-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                            started</a>
                        <a href="#" class="text-sm font-semibold leading-6 dark:text-gray-100 ">Learn more <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
                <div class="relative mt-16 h-80 lg:mt-8 transform hover:scale-110 transition duration-700">
                    <img class="absolute lg:left-0 md:left-10 md:top-0 lg:top-12 right-0 w-[43rem] max-w-none bg-white/5 ring-1 ring-white/1 rounded-lg animate-slide-up-image"
                        src="/images/img/hero9.jpg" alt="App screenshot" />
                </div>
            </div>
        </div>
    </div>
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
