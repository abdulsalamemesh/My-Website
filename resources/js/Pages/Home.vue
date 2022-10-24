<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import VueWriter from 'vue-writer'
import ScrollArrow from "@/Components/ScrollArrow.vue";
import {computed, onMounted} from "vue";
import {usePage} from "@inertiajs/inertia-vue3";
import {currentLocation, isDark} from "../store";

const selectableLocale = computed(() => {
    return usePage().props.value.locale
})

const enTitles = [
    ' am a Fullstack Developer.',
    ' build things for the web.',
    ' enjoy solving problems.',
    ' love to work in team.',
];
const deTitles = [
    ' bin Fullstack-Entwickler.',
    ' entwickle Dinge für die Web.',
    ' löse gerne Probleme.',
    ' arbeite gerne im Team.',
];
onMounted(() => {

    const content = document.getElementById('content');
    const home = document.getElementById('home');
    const about = document.getElementById('about');
    const experience = document.getElementById('experience');

    content.addEventListener('scroll', function (e) {
        if (e.currentTarget.scrollTop >= home.offsetTop && e.currentTarget.scrollTop < about.offsetTop - 50) {
            currentLocation.value = 'home'
        } else if (e.currentTarget.scrollTop > about.offsetTop - 50 && e.currentTarget.scrollTop < experience.offsetTop - 50) {
            currentLocation.value = 'about'
        } else {
            currentLocation.value = 'experience'
        }
    });
})
</script>

<template>
    <AppLayout>
        <!--Home-->
        <div class="h-[calc(100vh-3rem)] md:h-screen flex md:flex-col justify-center bg-slate-100 dark:bg-slate-900 px-4 md:px-6 py-6" id="home">
            <div class="grow flex flex-col">
                <div class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore">&lt;html></div>
                <div class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore">&lt;body></div>
                <div class="grow w-full sm:max-w-7xl mx-auto flex flex-col items-center md:items-start justify-center">
                    <div>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore">&lt;h1></p>
                        <p class="ml-2 text-3xl md:text-5xl lg:text-6xl dark:text-white font-semibold lg:leading-tight cursor-default text-shadow transition-all duration-300">
                            {{ __('Hi') }} <span class="wave">&#128075;</span>, {{ __("I'm") }}
                            <br>
                            Abdulsalam Emesh
                        </p>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore">&lt;br></p>
                        <VueWriter :array="selectableLocale === 'en'? enTitles : deTitles" :start="2000" :eraseSpeed="25" :typeSpeed="100">{{ __('I') }}</VueWriter>

                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore">&lt;/h1></p>
                    </div>
                </div>
                <div class="px-6 md:px-12 w-full flex justify-center items-center space-x-12 md:justify-end">
                    <p class="text-hot-500 dark:text-indigo-600">About</p>
                    <ScrollArrow id="about"/>
                </div>
            </div>
        </div>


        <div class="mx-6 md:mx-12 bg-slate-100 dark:bg-slate-900">
            <div class="border-b-2 border-slate-200 dark:border-slate-600"></div>
        </div>


        <!--About-->
        <div class="min-h-screen flex flex-col justify-center bg-slate-100 dark:bg-slate-900 px-4 md:px-6 py-6" id="about">
            <div class="grow flex flex-col">
                <div class="max-w-7xl mx-auto grow flex flex-col lg:flex-row justify-center items-center lg:space-x-12">
                    <div class="min-w-max rounded-full p-1 lg:p-2 bg-gradient-to-b from-hot-300 to-hot-500 dark:from-indigo-300 dark:to-indigo-600 mb-6">
                        <img src="/me.jpeg" class="rounded-full h-52 w-52 lg:h-72 lg:w-72 object-cover" alt="">
                    </div>
                    <div>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;h2></p>
                        <h2 class="ml-2 text-2xl md:text-4xl lg:text-5xl dark:text-white font-semibold lg:leading-tight cursor-default text-shadow transition-all duration-300">
                            Me, Myself & I
                        </h2>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/h2></p>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;p></p>
                        <p class="ml-2 md:text-xl dark:text-white">
                            I have been on this earth for about {{ new Date().getFullYear() - 1992 }} years and started my journey in <span
                            class="text-hot-500 dark:text-indigo-600 font-semibold">Aleppo, Syria</span>. I
                            have been living in my second home <span class="text-hot-500 dark:text-indigo-600 font-semibold">Xanten, Germany</span> for
                            {{ new Date().getFullYear() - 2016 }} years now. I am one of the lucky ones
                            who turned their hobby and passion into a <span class="text-hot-500 dark:text-indigo-600 font-semibold"> profession</span>. I love structure and
                            order and I also
                            stand for quality. I also like to work in a team, where I learn a lot and quickly. <br> As the saying goes: <span
                            class="text-hot-500 dark:text-indigo-600 font-semibold">  "Alone you are strong, together unbeatable"</span>.
                        </p>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/p></p>
                    </div>
                </div>
                <div class="px-6 md:px-12 w-full flex justify-center items-center space-x-12 md:justify-end">
                    <p class="text-hot-500 dark:text-indigo-600">Experinces</p>
                    <ScrollArrow id="experience"/>
                </div>
            </div>
        </div>


        <div class="mx-6 md:mx-12 bg-slate-100 dark:bg-slate-900">
            <div class="border-b-2 border-slate-200 dark:border-slate-600"></div>
        </div>


        <!--Experience-->
        <div class="min-h-screen flex flex-col justify-center bg-slate-100 dark:bg-slate-900 px-4 md:px-6 py-6" id="experience">
            <div class="grow flex flex-col">
                <div class="max-w-7xl grow mx-auto flex flex-col justify-center items-center">
                    <div>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;h2></p>
                        <h2 class="ml-2 text-2xl md:text-4xl lg:text-5xl dark:text-white font-semibold lg:leading-tight cursor-default text-shadow transition-all duration-300">
                            A summary of My Experiences
                        </h2>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/h2></p>
                    </div>
                </div>
                <div class="w-full max-w-7xl grow mx-auto flex flex-col justify-center">
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore">&lt;section></p>
                    <div class="ml-4 w-full flex flex-col md:flex-row justify-between">
                        <div class="w-1/2 border-l-4 border-hot-500 dark:border-indigo-600 py-4 px-6 dark:text-white divide-y divide-slate-200 dark:divide-slate-600">
                            <div class="py-4">
                                <p class="text-2xl font-semibold">Master in Computer Engineering</p>
                                <p class="text-xl  mt-2">Master in Computer Engineering</p>
                                <p class="mt-4 text-slate-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dicta excepturi facere impedit, in iusto odio praesentium
                                    ratione reprehenderit vel. Adipisci amet beatae cumque est, libero nihil rem! Fugiat, nostrum.</p>
                            </div>
                            <div class="py-4">
                                <p class="text-2xl font-semibold">Master in Computer Engineering</p>
                                <p class="text-xl  mt-2">Master in Computer Engineering</p>
                                <p class="mt-4 text-slate-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dicta excepturi facere impedit, in iusto odio praesentium
                                    ratione reprehenderit vel. Adipisci amet beatae cumque est, libero nihil rem! Fugiat, nostrum.</p>
                            </div>
                        </div>
                        <div class="w-1/2 border-l-2 border-hot-500 dark:border-indigo-600 p-2 dark:text-white">
                            <p class="text-2xl font-semibold">Master in Computer Engineering</p>
                            <p class="text-xl font-semibold">Master in Computer Engineering</p>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dicta excepturi facere impedit, in iusto odio praesentium ratione
                                reprehenderit vel. Adipisci amet beatae cumque est, libero nihil rem! Fugiat, nostrum.</p>

                        </div>
                    </div>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore">&lt;section></p>
                </div>
                <div class="px-6 md:px-12 w-full flex justify-center items-center space-x-12 md:justify-end">
                    <p class="text-hot-500 dark:text-indigo-600">Education</p>
                    <ScrollArrow id="education"/>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style lang="postcss">
.is-typed {
    font-family: 'montserrat', sans-serif !important;
    @apply text-3xl md:text-5xl lg:text-6xl font-bold text-hot-500 dark:text-indigo-600 ml-2 break-words lg:leading-tight cursor-default transition-all duration-300;

}


.is-typed span.cursor {
    font-family: 'montserrat', sans-serif !important;
    @apply h-[2px] md:h-[4px] lg:h-[6px] bg-black dark:bg-white inline-flex items-end animate-[blink_1s_infinite];
}

@keyframes blink {
    49% {
        background-color: v-bind(isDark ? 'white': 'black');
    }
    50% {
        background-color: v-bind(isDark ? '#0f172a': '#f1f5f9');;
    }
    99% {
        background-color: v-bind(isDark ? '#0f172a': '#f1f5f9');;
    }
}


.wave {
    animation-name: wave-animation; /* Refers to the name of your @keyframes element below */
    animation-duration: 2.5s; /* Change to speed up or slow down */
    animation-iteration-count: infinite; /* Never stop waving :) */
    transform-origin: 70% 70%; /* Pivot around the bottom-left palm */
    display: inline-block;
}

@keyframes wave-animation {
    0% {
        transform: rotate(0.0deg)
    }
    10% {
        transform: rotate(14.0deg)
    }
    /* The following five values can be played with to make the waving more or less extreme */
    20% {
        transform: rotate(-8.0deg)
    }
    30% {
        transform: rotate(14.0deg)
    }
    40% {
        transform: rotate(-4.0deg)
    }
    50% {
        transform: rotate(10.0deg)
    }
    60% {
        transform: rotate(0.0deg)
    }
    /* Reset for the last half to pause */
    100% {
        transform: rotate(0.0deg)
    }
}

.text-shadow {
    text-shadow: none
}


@media only screen and (max-width: 1200px) {
    .text-shadow:hover {
        text-shadow: -0.15rem -0.15rem v-bind(isDark ? '#4f46e5': '#F9004D')
    }

    .is-typed:hover {
        text-shadow: -0.15rem -0.15rem v-bind(isDark ? 'white': 'black')
    }

}


@media only screen and (min-width: 1201px) {
    .text-shadow:hover {
        text-shadow: -0.2rem -0.2rem v-bind(isDark ? '#4f46e5': '#F9004D')
    }

    .is-typed:hover {
        text-shadow: -0.2rem -0.2rem v-bind(isDark ? 'white': 'black')
    }

}

/*.text-flicker-in-glow-1 {*/
/*    -webkit-animation: text-flicker-in-glow 2s linear both;*/
/*    animation: text-flicker-in-glow 2s linear both;*/
/*}*/

/*.text-flicker-in-glow-2 {*/
/*    -webkit-animation: text-flicker-in-glow 2s linear 300ms both;*/
/*    animation: text-flicker-in-glow 2s linear 300ms both;*/
/*}*/

/*.text-flicker-in-glow-3 {*/
/*    -webkit-animation: text-flicker-in-glow 2s linear 600ms both;*/
/*    animation: text-flicker-in-glow 2s linear 600ms both;*/
/*}*/

@-webkit-keyframes text-flicker-in-glow {
    0% {
        opacity: 0;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    10% {
        opacity: 0;
        text-shadow: none;
    }
    10.1% {
        opacity: 1;
        text-shadow: none;
    }
    10.2% {
        opacity: 0;
        text-shadow: none;
    }
    20% {
        opacity: 0;
        text-shadow: none;
    }
    20.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    20.6% {
        opacity: 0;
        text-shadow: none;
    }
    30% {
        opacity: 0;
        text-shadow: none;
    }
    30.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    30.5% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    30.6% {
        opacity: 0;
        text-shadow: none;
    }
    45% {
        opacity: 0;
        text-shadow: none;
    }
    45.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    50% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    55% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    55.1% {
        opacity: 0;
        text-shadow: none;
    }
    57% {
        opacity: 0;
        text-shadow: none;
    }
    57.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    60% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    60.1% {
        opacity: 0;
        text-shadow: none;
    }
    65% {
        opacity: 0;
        text-shadow: none;
    }
    65.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    75% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    75.1% {
        opacity: 0;
        text-shadow: none;
    }
    77% {
        opacity: 0;
        text-shadow: none;
    }
    77.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    85% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    85.1% {
        opacity: 0;
        text-shadow: none;
    }
    86% {
        opacity: 0;
        text-shadow: none;
    }
    86.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    100% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
}

@keyframes text-flicker-in-glow {
    0% {
        opacity: 0;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    10% {
        opacity: 0;
        text-shadow: none;
    }
    10.1% {
        opacity: 1;
        text-shadow: none;
    }
    10.2% {
        opacity: 0;
        text-shadow: none;
    }
    20% {
        opacity: 0;
        text-shadow: none;
    }
    20.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    20.6% {
        opacity: 0;
        text-shadow: none;
    }
    30% {
        opacity: 0;
        text-shadow: none;
    }
    30.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    30.5% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    30.6% {
        opacity: 0;
        text-shadow: none;
    }
    45% {
        opacity: 0;
        text-shadow: none;
    }
    45.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    50% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    55% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    55.1% {
        opacity: 0;
        text-shadow: none;
    }
    57% {
        opacity: 0;
        text-shadow: none;
    }
    57.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    60% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    60.1% {
        opacity: 0;
        text-shadow: none;
    }
    65% {
        opacity: 0;
        text-shadow: none;
    }
    65.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    75% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    75.1% {
        opacity: 0;
        text-shadow: none;
    }
    77% {
        opacity: 0;
        text-shadow: none;
    }
    77.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    85% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    85.1% {
        opacity: 0;
        text-shadow: none;
    }
    86% {
        opacity: 0;
        text-shadow: none;
    }
    86.1% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
    100% {
        opacity: 1;
        text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#F9004D')
    }
}


</style>
