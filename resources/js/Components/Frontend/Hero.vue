<script setup>

</script>
<template>
    <section id="home"
        class="lg:h-[90vh] flex items-center bg-amber-50 dark:bg-gray-950 lg:py-80 py-40 overflow-hidden animate-slide-up">
        <div class="container mx-auto h-full" v-motion:initial="{opacity:0, y:100,}" :visible="{opacity:1, y:0,}">
            <div class="flex flex-col md:flex-row items-center h-full">
                <div class="flex-1 flex-col items-center lg:items-start">
                    <p class="text-lg text-[#40a4fb] dark:text-gray-100 text-md mb-[22px] font-semibold">Hey, I'm Régis
                        ATTOLOU </p>
                    <h1
                        class="text-4xl leading-[44px] md:text-5xl md:leading-light lg:text-7xl lg:leading-[1 ] font-bold md:tracking-[-2px] dark:text-amber-100 text-slate-800">
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
                    <div class="flex items-center gap-x-4 pt-12">
                        <h5 class="flex items-center text-slate-800 dark:text-white text-lg">
                            Follow me on :
                        </h5>
                        <div class="flex items-center social icons">
                            <a href="https://www.facebook.com/ferencattolou21/" title="Facebook"
                                class="text-slate-800 hover:text-blue-500 dark:text-gray-100 transform duration-300 transition-all hover:scale-105 mr-3 sm:mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                </svg>
                            </a>
                            <a href="https://wa.me/c/22990919096" title="Whatsapp"
                                class="text-slate-800 hover:text-blue-500 dark:text-gray-100 transform duration-300 transition-all hover:scale-105 mr-3 sm:mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                </svg>
                            </a>
                            <a href="https://twitter.com/RegisAttolou06" title="Twitter"
                                class="text-slate-800 hover:text-blue-500 dark:text-gray-100 transform duration-300 transition-all hover:scale-105 mr-3 sm:mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path
                                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/in/régis-attolou-b0bba9260/" title="LinkedIn"
                                class="text-slate-800 hover:text-blue-500 dark:text-gray-100 transform duration-300 transition-all hover:scale-105 mr-3 sm:mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                                </svg>
                            </a>
                            <a href="https://github.com/regisatl" title="Github"
                                class="text-slate-800 hover:text-blue-500 dark:text-gray-100 transform duration-300 transition-all hover:scale-105 mr-3 sm:mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-github" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                                </svg>
                            </a>
                            <a href="https://join.skype.com/invite/Emh5IAjoypCC" title="Skype"
                                class="text-slate-800 hover:text-blue-500 dark:text-gray-100 transform duration-300 transition-all hover:scale-105 mr-3 sm:mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-skype" viewBox="0 0 16 16">
                                    <path
                                        d="M4.671 0c.88 0 1.733.247 2.468.702a7.42 7.42 0 0 1 6.02 2.118 7.37 7.37 0 0 1 2.167 5.215q0 .517-.072 1.026a4.66 4.66 0 0 1 .6 2.281 4.64 4.64 0 0 1-1.37 3.294A4.67 4.67 0 0 1 11.18 16c-.84 0-1.658-.226-2.37-.644a7.42 7.42 0 0 1-6.114-2.107A7.37 7.37 0 0 1 .529 8.035q0-.545.08-1.081a4.644 4.644 0 0 1 .76-5.59A4.68 4.68 0 0 1 4.67 0zm.447 7.01c.18.309.43.572.729.769a7 7 0 0 0 1.257.653q.737.308 1.145.523c.229.112.437.264.615.448.135.142.21.331.21.528a.87.87 0 0 1-.335.723c-.291.196-.64.289-.99.264a2.6 2.6 0 0 1-1.048-.206 11 11 0 0 1-.532-.253 1.3 1.3 0 0 0-.587-.15.72.72 0 0 0-.501.176.63.63 0 0 0-.195.491.8.8 0 0 0 .148.482 1.2 1.2 0 0 0 .456.354 5.1 5.1 0 0 0 2.212.419 4.6 4.6 0 0 0 1.624-.265 2.3 2.3 0 0 0 1.08-.801c.267-.39.402-.855.386-1.327a2.1 2.1 0 0 0-.279-1.101 2.5 2.5 0 0 0-.772-.792A7 7 0 0 0 8.486 7.3a1 1 0 0 0-.145-.058 18 18 0 0 1-1.013-.447 1.8 1.8 0 0 1-.54-.387.73.73 0 0 1-.2-.508.8.8 0 0 1 .385-.723 1.76 1.76 0 0 1 .968-.247c.26-.003.52.03.772.096q.412.119.802.293c.105.049.22.075.336.076a.6.6 0 0 0 .453-.19.7.7 0 0 0 .18-.496.72.72 0 0 0-.17-.476 1.4 1.4 0 0 0-.556-.354 3.7 3.7 0 0 0-.708-.183 6 6 0 0 0-1.022-.078 4.5 4.5 0 0 0-1.536.258 2.7 2.7 0 0 0-1.174.784 1.9 1.9 0 0 0-.45 1.287c-.01.37.076.736.25 1.063" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-1 justify-end items-center h-full mt-8 md:mt-0 md:ms-2 transform hover:scale-110 transition duration-700">
                    <img class="object-cover rounded-lg bg-white/5 ring-1 ring-white/1 animate-slide-up-image"
                        src="/images/img/hero8.jpg" alt="Hero image">
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
        transform: scale(1);
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
}</style>
