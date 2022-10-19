<script setup>
import VueWriter from 'vue-writer'
import {useDark, useToggle} from "@vueuse/core";
import {ref} from "vue";

const isDark = useDark()
const toggleDark = useToggle(isDark)
const showNav = ref(false)
const title = [
    'I build things for the web.',
    'I am focused to solve complex problems.',
    'I love to work in teams.',
    'I am a Fullstack Developer.',
    'let\'s work together to achieve the impossible',
];

</script>

<template>
    <div class="h-screen font-montserrat flex flex-col md:flex-row">
        <div
            class="border-b-4 border-indigo-600 md:border-b-0 bg-indigo-200 dark:bg-black px-5 md:px-12 min-w-[14rem] md:py-6 min-h-[5rem] flex md:flex-col justify-between items-center ">
            <button @click="toggleDark()"
                    class="rounded-full p-1 bg-indigo-600 dark:bg-indigo-600">
                <template v-if="isDark">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-9 w-9 text-white fill-current border-2 border-white rounded-full p-1.5">
                        <path
                            d="M332.3 426.4c-93.13 17.75-178.5-53.63-178.5-147.6c0-54.25 29-104 76-130.9c7.375-4.125 5.45-15.12-2.8-16.62C108.7 109.4 0 200 0 320c0 106 85.76 192 191.8 192c59.25 0 113.2-26.79 148.9-71.04C346.1 434.5 340.3 424.8 332.3 426.4z"/>
                        <path class="opacity-40"
                              d="M288 63.1l12.42 29.78c.6094 1.225 2.211 2.219 3.578 2.219s2.967-.9941 3.576-2.219l12.42-29.78l29.79-12.42C351 50.97 352 49.36 352 47.1c0-1.365-.9922-2.967-2.211-3.576l-29.79-12.42l-12.42-29.79c-.6094-1.227-2.209-2.217-3.576-2.217s-2.969 .9902-3.578 2.217l-12.42 29.79L258.2 44.42c-1.217 .6094-2.209 2.211-2.209 3.576c0 1.359 .9922 2.971 2.209 3.58L288 63.1zM507.6 216.9L448 192l-24.88-59.63C421.8 129.8 419 127.1 416 127.1s-5.75 1.75-7.125 4.375L384 192l-59.63 24.88C321.8 218.3 320 221 320 224s1.75 5.75 4.375 7.125L384 256l24.88 59.63C410.3 318.3 413 320 416 320s5.75-1.75 7.125-4.375L448 256l59.63-24.88C510.3 229.8 512 227 512 224S510.3 218.3 507.6 216.9z"/>
                    </svg>
                </template>
                <template v-else>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-9 w-9 text-white fill-current border-2 border-white rounded-full p-1.5">
                        <path d="M256 144C194.1 144 144 194.1 144 256c0 61.86 50.14 112 112 112s112-50.14 112-112C368 194.1 317.9 144 256 144z"/>
                        <path class="opacity-40"
                              d="M108.9 74.97c-9.344-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l45.25 45.28c4.672 4.688 10.83 7.031 16.97 7.031S149.5 158.9 154.2 154.2c9.375-9.375 9.375-24.56 0-33.93L108.9 74.97zM256 0C242.8 0 232 10.75 232 24v64C232 101.3 242.8 112 256 112s24-10.75 24-24v-64C280 10.75 269.3 0 256 0zM112 256c0-13.25-10.75-24-24-24h-64C10.75 232 0 242.8 0 256s10.75 24 24 24h64C101.3 280 112 269.3 112 256zM374.8 161.2c6.141 0 12.3-2.344 16.97-7.031l45.25-45.28c9.375-9.375 9.375-24.56 0-33.94s-24.59-9.375-33.94 0l-45.25 45.28c-9.375 9.375-9.375 24.56 0 33.93C362.5 158.9 368.7 161.2 374.8 161.2zM256 400c-13.25 0-24 10.75-24 24v64C232 501.3 242.8 512 256 512s24-10.75 24-24v-64C280 410.8 269.3 400 256 400zM120.2 357.8l-45.25 45.28c-9.375 9.375-9.375 24.56 0 33.94c4.688 4.688 10.83 7.031 16.97 7.031s12.3-2.344 16.97-7.031l45.25-45.28c9.375-9.375 9.375-24.56 0-33.93S129.6 348.4 120.2 357.8zM488 232h-64c-13.25 0-24 10.75-24 24s10.75 24 24 24h64C501.3 280 512 269.3 512 256S501.3 232 488 232zM391.8 357.8c-9.344-9.375-24.56-9.372-33.94 .0031s-9.375 24.56 0 33.93l45.25 45.28c4.672 4.688 10.83 7.031 16.97 7.031s12.28-2.344 16.97-7.031c9.375-9.375 9.375-24.56 0-33.94L391.8 357.8z"/>
                    </svg>
                </template>
            </button>
            <div class="hidden md:block md:space-y-6">
                <div class="text-black dark:text-white">
                    Home
                </div>
                <div class="text-black dark:text-white">
                    Home
                </div>
                <div class="text-black dark:text-white">
                    Home
                </div>
                <div class="text-black dark:text-white">
                    Home
                </div>
            </div>
            <div>
                <button @click="showNav = !showNav" class="p-1 md:hidden">
                    <svg v-show="showNav === false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6 w-6 text-indigo-600 fill-current">
                        <path
                            d="M416 224H31.1C14.33 224 0 238.3 0 256s14.33 32 31.1 32h384C433.7 288 448 273.7 448 256S433.7 224 416 224zM416 384H31.1C14.33 384 0 398.3 0 415.1S14.33 448 31.1 448h384C433.7 448 448 433.7 448 416S433.7 384 416 384zM416 64H31.1C14.33 64 0 78.33 0 95.1S14.33 128 31.1 128h384C433.7 128 448 113.7 448 96S433.7 64 416 64z"/>
                    </svg>
                    <svg v-show="showNav === true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-6 w-6 text-indigo-600 fill-current">
                        <path
                            d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>
                    </svg>
                </button>
            </div>
        </div>
        <transition
            enter-active-class="transition-all ease-in-out duration-500"
            enter-from-class="transform opacity-0 "
            enter-to-class="transform opacity-100"
            leave-active-class="transition-all ease-in-out duration-150"
            leave-from-class="transform opacity-100 "
            leave-to-class="transform opacity-0 "
        >
            <div v-show="showNav" class="bg-indigo-600 md:hidden px-2 pb-2 pt-1">
                <div class="flex flex-col justify-center items-center space-y-2 bg-indigo-200 dark:bg-black p-6 ">
                    <a href="#" class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-indigo-600 text-center py-2 px-6"
                       @click="showNav = false">
                        <span>-</span>
                        About me
                        <span>-</span>
                    </a>
                    <a href="#" class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-indigo-600 text-center py-2 px-6"
                       @click="showNav = false">
                        <span>-</span>
                        Experience
                        <span>-</span>
                    </a>
                    <a href="#" class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-indigo-600 text-center py-2 px-6"
                       @click="showNav = false">
                        <span>-</span>
                        Education
                        <span>-</span>
                    </a>
                    <a href="#" class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-indigo-600 text-center py-2 px-6"
                       @click="showNav = false">
                        <span>-</span>
                        Kontakt
                        <span>-</span>
                    </a>
                </div>
            </div>
        </transition>
        <div class="grow overflow-y-auto scroll-smooth scrollbar" @click="showNav = false">

            <div class="h-screen flex flex-col justify-center bg-indigo-50 dark:bg-black" id="nav">
                <div class="max-w-7xl mx-auto w-full grow flex justify-center items-center px-6 md:px-8">
                    <div class="flex flex-col h-[60vh] items-center md:items-start w-full sm:max-w-3xl md:space-y-3">
                        <div >
                            <div class="md:text-xl dark:text-yellow-400 font-light font-[Kalam]" >&#x201C;&lt;div>&#x201E;</div>
                            <p class="ml-12 text-3xl md:text-5xl lg:text-6xl dark:text-white font-semibold">Hi <span class="wave">&#128075;</span>, </p>
                            <p class="ml-12 text-xl md:text-2xl lg:text-3xl dark:text-white font-semibold">My name is</p>
                            <p class="ml-12 text-3xl md:text-5xl lg:text-6xl dark:text-white font-semibold">Abdulsalam Emesh</p>
                            <p class="ml-12 text-xl md:text-2xl lg:text-3xl dark:text-yellow-400 font-semibold">...</p>
                            <VueWriter :array="title" :start="2000" :eraseSpeed="25" :typeSpeed="100"/>
                            <div class="md:text-xl dark:text-yellow-400 font-light font-[Kalam]" >&#x201C;&lt;/div>&#x201E;</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="h-screen flex flex-col justify-center bg-indigo-50 dark:bg-black" id="nav">
                <div class="max-w-7xl mx-auto w-full grow flex justify-center items-center">
                    <div class="flex flex-col justify-center items-center">
                        <p class="text-3xl text-red-500 dark:text-white font-semibold">I am a sa</p>
                        <VueWriter :array="title" :start="1000" :eraseSpeed="50" :typeSpeed="150"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<style>
.is-typed {
    font-family: 'montserrat', sans-serif !important;
    @apply text-3xl md:text-5xl lg:text-6xl font-bold text-indigo-600 ml-12;
}

.is-typed span.cursor {
    font-family: 'montserrat', sans-serif !important;
    @apply h-[2px] md:h-[4px] lg:h-[6px] text-indigo-500 dark:text-white inline-flex items-end animate-[blink_1s_infinite];
}

@keyframes blink {
    49% {
        background-color: black;
    }
    50% {
        background-color: transparent;
    }
    99% {
        background-color: transparent;
    }
}

@media only screen and (max-width: 450px) {
    .scrollbar {
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
    }

    .scrollbar::-webkit-scrollbar {
        display: none;
    }
}

@media only screen and (min-width: 451px) and (max-width: 1200px) {
    .scrollbar::-webkit-scrollbar {
        width: 12px;
    }

    .scrollbar::-webkit-scrollbar-track {
        background-color: v-bind(isDark ? 'black': '#eef2ff');
    }

    .scrollbar::-webkit-scrollbar-thumb {
        background-color: #4f46e5;
        border-bottom: 5px transparent solid;
        border-top: 5px transparent solid;
        border-right: 5px transparent solid;
        background-clip: padding-box;
    }
}

@media only screen and (min-width: 1201px) {
    .scrollbar::-webkit-scrollbar {
        width: 18px;
    }

    .scrollbar::-webkit-scrollbar-track {
        background-color: v-bind(isDark ? 'black': '#eef2ff');
    }

    .scrollbar::-webkit-scrollbar-thumb {
        background-color: #4f46e5;
        border-bottom: 6px transparent solid;
        border-top: 6px transparent solid;
        border-right: 6px transparent solid;
        background-clip: padding-box;
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
</style>
