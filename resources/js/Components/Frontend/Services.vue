<script setup>
import {
    AcademicCapIcon,
    BookOpenIcon,
    CubeTransparentIcon,
    BriefcaseIcon,
} from "@heroicons/vue/24/outline";

</script>

<template>
    <section class="section bg-gray-100 dark:bg-slate-100 py-8">
        <div class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2 id="services"
                    class="section-title text-3xl lg:text-4xl md:text-xl sm:text-xl font-medium lg:font-extrabold md:font-bold text-slate-800 dark:text-gray-800">
                    What I do for clients</h2>
                <p class="text-gray-700 dark:text-gray-500 subtitle mt-2">
                    I'm a web developer based in Benin at VIPP INTERSTIS.
                </p>
            </div>
            <div class="grid lg:grid-cols-4 gap-9 py-8">
                <div
                    class="relative isolate overflow-hidden dark:bg-slate-800 p-6 rounded-2xl shadow-2xl transform hover:scale-110 transition duration-1000 animate-slide-up-image">
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
                    <div class="text-[#40a4fb] rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
                        <AcademicCapIcon class="" />
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-slate-800 dark:text-gray-100">Web Developer</h3>
                    <p class="text-gray-700 dark:text-gray-300 text-justify text-sm">
                        A web developer is a programmer who specializes in the development of World Wide Web applications using a client–server model. The applications typically use HTML, CSS, and JavaScript in the client, and any general-purpose programming language in the server. HTTP is used for communications between client and server
                    </p>
                </div>
                <div
                    class="relative isolate overflow-hidden dark:bg-slate-800 p-6 rounded-2xl shadow-2xl transform hover:scale-110 transition duration-1000 animate-slide-up-image">
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
                    <div class="text-[#40a4fb] rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
                        <CubeTransparentIcon class="" />
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-slate-800 dark:text-gray-100">Web Design</h3>
                    <p class="text-gray-700 dark:text-gray-300 text-justify text-sm">
                        A web designer designs and creates websites. They are responsible for both the visual aspect of the website and its technical functioning, as well as the user experience. A well-designed website combines captivating design and ease of navigation
                    </p>
                </div>
                <div
                    class="relative isolate overflow-hidden dark:bg-slate-800 p-6 rounded-2xl shadow-2xl transform hover:scale-110 transition duration-500 animate-slide-up-image">
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
                    <div class="text-[#40a4fb] rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
                        <BriefcaseIcon class="" />
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-slate-800 dark:text-gray-100">Branding</h3>
                    <p class="text-gray-700 dark:text-gray-300 text-justify text-sm">
                        Branding generally refers to a marketing or advertising action that seeks to position a brand favorably in the consumer’s mind. A branding approach theoretically seeks more qualitative medium and long-term advertising effects (attitude, awareness, image, etc.) than more or less immediate quantitative effects (immediate sales in e-commerce, visits to points of sale, etc.)
                    </p>
                </div>
                <div
                    class="relative isolate overflow-hidden dark:bg-slate-800 p-6 rounded-2xl shadow-2xl transform hover:scale-110 transition duration-500 animate-slide-up-image">
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
                    <div class="text-[#40a4fb] rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
                        <BookOpenIcon class="" />
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-slate-800 dark:text-gray-100">SEO</h3>
                    <p class="text-gray-700 dark:text-gray-300 text-justify text-sm">
                        SEO is the practice of optimizing websites, web pages, and content for the purposes of ranking higher in search engines, like Google
                    </p>
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
