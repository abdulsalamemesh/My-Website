<script setup>
import {useDark, useToggle} from "@vueuse/core";
import {ref} from "vue";

const isDark = useDark()
const toggleDark = useToggle(isDark)
const showNav = ref(false)
import {computed} from "vue";

import {usePage, Link} from '@inertiajs/inertia-vue3'

const currentLocation = ref('home')

function getCurrent(id) {
    currentLocation.value = id
    return '#' + id
}

const selectableLocale = computed(() => {
    if (usePage().props.value.locale == 'de') {
        return 'en';
    }
    return 'de'
})
</script>

<template>
    <div class="h-screen font-montserrat flex flex-col md:flex-row">
        <div
            class="border-b-4 border-gray-300 dark:border-white md:border-b-0 md:border-r-2 bg-slate-100 dark:bg-black px-5 md:px-4 md:py-6 min-h-[5rem] flex md:flex-col justify-between items-center">
            <div class="flex justify-between space-x-4">
                <button @click="toggleDark()"
                        class="rounded-full p-1 bg-hot-500 dark:bg-indigo-600 ring ring-hot-200 dark:ring-indigo-300">
                    <template v-if="isDark">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-7 w-7 text-white fill-current  rounded-full p-1">
                            <path
                                d="M332.3 426.4c-93.13 17.75-178.5-53.63-178.5-147.6c0-54.25 29-104 76-130.9c7.375-4.125 5.45-15.12-2.8-16.62C108.7 109.4 0 200 0 320c0 106 85.76 192 191.8 192c59.25 0 113.2-26.79 148.9-71.04C346.1 434.5 340.3 424.8 332.3 426.4z"/>
                            <path class="opacity-40"
                                  d="M288 63.1l12.42 29.78c.6094 1.225 2.211 2.219 3.578 2.219s2.967-.9941 3.576-2.219l12.42-29.78l29.79-12.42C351 50.97 352 49.36 352 47.1c0-1.365-.9922-2.967-2.211-3.576l-29.79-12.42l-12.42-29.79c-.6094-1.227-2.209-2.217-3.576-2.217s-2.969 .9902-3.578 2.217l-12.42 29.79L258.2 44.42c-1.217 .6094-2.209 2.211-2.209 3.576c0 1.359 .9922 2.971 2.209 3.58L288 63.1zM507.6 216.9L448 192l-24.88-59.63C421.8 129.8 419 127.1 416 127.1s-5.75 1.75-7.125 4.375L384 192l-59.63 24.88C321.8 218.3 320 221 320 224s1.75 5.75 4.375 7.125L384 256l24.88 59.63C410.3 318.3 413 320 416 320s5.75-1.75 7.125-4.375L448 256l59.63-24.88C510.3 229.8 512 227 512 224S510.3 218.3 507.6 216.9z"/>
                        </svg>
                    </template>
                    <template v-else>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-7 w-7 text-slate-100 fill-current rounded-full p-1">
                            <path d="M256 144C194.1 144 144 194.1 144 256c0 61.86 50.14 112 112 112s112-50.14 112-112C368 194.1 317.9 144 256 144z"/>
                            <path class="opacity-40"
                                  d="M108.9 74.97c-9.344-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l45.25 45.28c4.672 4.688 10.83 7.031 16.97 7.031S149.5 158.9 154.2 154.2c9.375-9.375 9.375-24.56 0-33.93L108.9 74.97zM256 0C242.8 0 232 10.75 232 24v64C232 101.3 242.8 112 256 112s24-10.75 24-24v-64C280 10.75 269.3 0 256 0zM112 256c0-13.25-10.75-24-24-24h-64C10.75 232 0 242.8 0 256s10.75 24 24 24h64C101.3 280 112 269.3 112 256zM374.8 161.2c6.141 0 12.3-2.344 16.97-7.031l45.25-45.28c9.375-9.375 9.375-24.56 0-33.94s-24.59-9.375-33.94 0l-45.25 45.28c-9.375 9.375-9.375 24.56 0 33.93C362.5 158.9 368.7 161.2 374.8 161.2zM256 400c-13.25 0-24 10.75-24 24v64C232 501.3 242.8 512 256 512s24-10.75 24-24v-64C280 410.8 269.3 400 256 400zM120.2 357.8l-45.25 45.28c-9.375 9.375-9.375 24.56 0 33.94c4.688 4.688 10.83 7.031 16.97 7.031s12.3-2.344 16.97-7.031l45.25-45.28c9.375-9.375 9.375-24.56 0-33.93S129.6 348.4 120.2 357.8zM488 232h-64c-13.25 0-24 10.75-24 24s10.75 24 24 24h64C501.3 280 512 269.3 512 256S501.3 232 488 232zM391.8 357.8c-9.344-9.375-24.56-9.372-33.94 .0031s-9.375 24.56 0 33.93l45.25 45.28c4.672 4.688 10.83 7.031 16.97 7.031s12.28-2.344 16.97-7.031c9.375-9.375 9.375-24.56 0-33.94L391.8 357.8z"/>
                        </svg>
                    </template>
                </button>
                <Link :href="route('language', [selectableLocale])" class="p-1 ring ring-hot-200 dark:ring-indigo-300 rounded-full" title="Select language">
                    <template v-if="selectableLocale === 'de'">
                        <svg viewBox="0 0 512 512" class="h-7 w-7"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle cx="256" cy="256" r="256" fill="#F0F0F0"/>
                            <g fill="#0052B4">
                                <path d="m52.92 100.14c-20.109 26.163-35.272 56.318-44.101 89.077h133.18l-89.077-89.077z"/>
                                <path d="m503.18 189.22c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.18z"/>
                                <path d="m8.819 322.78c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075h-133.18z"/>
                                <path d="m411.86 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.18l89.076-89.075z"/>
                                <path d="m100.14 459.08c26.163 20.109 56.318 35.272 89.076 44.102v-133.18l-89.076 89.074z"/>
                                <path d="M189.217,8.819c-32.758,8.83-62.913,23.993-89.075,44.101l89.075,89.075V8.819z"/>
                                <path d="m322.78 503.18c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.18z"/>
                                <path d="m370 322.78l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076h-133.18z"/>
                            </g>
                            <g fill="#D80027">
                                <path
                                    d="m509.83 222.61h-220.44v-220.44c-10.931-1.423-22.075-2.167-33.392-2.167-11.319 0-22.461 0.744-33.391 2.167v220.44h-220.44c-1.423 10.931-2.167 22.075-2.167 33.392 0 11.319 0.744 22.461 2.167 33.391h220.44v220.44c10.931 1.423 22.073 2.167 33.392 2.167 11.317 0 22.461-0.743 33.391-2.167v-220.44h220.44c1.423-10.931 2.167-22.073 2.167-33.392 0-11.317-0.744-22.461-2.167-33.391z"/>
                                <path d="m322.78 322.78l114.24 114.24c5.254-5.252 10.266-10.743 15.048-16.435l-97.802-97.802h-31.482v1e-3z"/>
                                <path d="m189.22 322.78h-2e-3l-114.24 114.24c5.252 5.254 10.743 10.266 16.435 15.048l97.802-97.804v-31.479z"/>
                                <path d="m189.22 189.22v-2e-3l-114.24-114.24c-5.254 5.252-10.266 10.743-15.048 16.435l97.803 97.803h31.481z"/>
                                <path d="m322.78 189.22l114.24-114.24c-5.252-5.254-10.743-10.266-16.435-15.047l-97.802 97.803v31.482z"/>
                            </g>
                        </svg>
                    </template>
                    <template v-else-if="selectableLocale === 'en'">
                        <svg viewBox="0 0 512 512" class="h-7 w-7"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.923,345.043C52.094,442.527,145.929,512,256,512s203.906-69.473,240.077-166.957L256,322.783  L15.923,345.043z" fill="#FFDA44"/>
                            <path d="M256,0C145.929,0,52.094,69.472,15.923,166.957L256,189.217l240.077-22.261C459.906,69.472,366.071,0,256,0z"/>
                            <path
                                d="M15.923,166.957C5.633,194.69,0,224.686,0,256s5.633,61.31,15.923,89.043h480.155  C506.368,317.31,512,287.314,512,256s-5.632-61.31-15.923-89.043H15.923z"
                                fill="#D80027"/>
                        </svg>
                    </template>
                </Link>
            </div>

            <div class="hidden md:flex md:space-y-8 flex-col">
                <a href="#home" @click="getCurrent('home')"
                   :class="[currentLocation === 'home' ? 'text-hot-500 dark:text-indigo-600': '']"
                   class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-hot-500 dark:hover:border-indigo-600 text-center px-2 whitespace-nowrap">
                    <span>-</span>
                    Home
                    <span>-</span>
                </a>
                <a href="#about-me" @click="getCurrent('about-me')"
                   :class="[currentLocation === 'about-me' ? 'text-hot-500 dark:text-indigo-600': '']"
                   class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-hot-500 dark:hover:border-indigo-600 text-center px-2 whitespace-nowrap">
                    <span>-</span>
                    About me
                    <span>-</span>
                </a>
                <a href="#"
                   class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-hot-500 dark:hover:border-indigo-600 text-center px-2 whitespace-nowrap">
                    <span>-</span>
                    Experience
                    <span>-</span>
                </a>
                <a href="#"
                   class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-hot-500 dark:hover:border-indigo-600 text-center px-2 whitespace-nowrap">
                    <span>-</span>
                    Education
                    <span>-</span>
                </a>
                <a href="#"
                   class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-hot-500 dark:hover:border-indigo-600 text-center px-2 whitespace-nowrap">
                    <span>-</span>
                    Kontakt
                    <span>-</span>
                </a>
                <a href="#"
                   class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-hot-500 dark:hover:border-indigo-600 text-center px-2 whitespace-nowrap">
                    <span>-</span>
                    For Programmers
                    <span>-</span>
                </a>
            </div>
            <div>
                <button @click="showNav = !showNav" class="p-1 md:hidden">
                    <svg v-show="showNav === false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6 w-6 text-hot-500 dark:text-indigo-600 fill-current">
                        <path
                            d="M416 224H31.1C14.33 224 0 238.3 0 256s14.33 32 31.1 32h384C433.7 288 448 273.7 448 256S433.7 224 416 224zM416 384H31.1C14.33 384 0 398.3 0 415.1S14.33 448 31.1 448h384C433.7 448 448 433.7 448 416S433.7 384 416 384zM416 64H31.1C14.33 64 0 78.33 0 95.1S14.33 128 31.1 128h384C433.7 128 448 113.7 448 96S433.7 64 416 64z"/>
                    </svg>
                    <svg v-show="showNav === true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-6 w-6 text-hot-500 dark:text-indigo-600 fill-current">
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
            <div v-show="showNav" class="bg-gray-300 dark:bg-white md:hidden pb-1">
                <div class="flex flex-col justify-center items-center space-y-2 bg-gray-100 dark:bg-black p-6 ">
                    <a href="#home"
                       class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-hot-500 dark:hover:border-indigo-600 text-center py-2 px-6"
                       @click="showNav = false">
                        <span>-</span>
                        Home
                        <span>-</span>
                    </a>
                    <a href="#about-me"
                       class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-hot-500 dark:hover:border-indigo-600 text-center py-2 px-6"
                       @click="showNav = false">
                        <span>-</span>
                        About me
                        <span>-</span>
                    </a>
                    <a href="#" class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-hot-500 dark:hover:border-indigo-600 text-center py-2 px-6"
                       @click="showNav = false">
                        <span>-</span>
                        Experience
                        <span>-</span>
                    </a>
                    <a href="#" class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-hot-500 dark:hover:border-indigo-600 text-center py-2 px-6"
                       @click="showNav = false">
                        <span>-</span>
                        Education
                        <span>-</span>
                    </a>
                    <a href="#" class="font-bold text-black dark:text-white border-x-4 border-transparent hover:border-hot-500 dark:hover:border-indigo-600 text-center py-2 px-6"
                       @click="showNav = false">
                        <span>-</span>
                        Kontakt
                        <span>-</span>
                    </a>
                </div>
            </div>
        </transition>
        <div class="grow overflow-y-auto scroll-smooth scrollbar bg-slate-100 dark:bg-black" @click="showNav = false">

            <!-- Page Content -->
            <slot/>
        </div>
    </div>

</template>

<style>

.scrollbar::-webkit-scrollbar-track {
    background-color: v-bind(isDark ? 'black': '#f1f5f9');
}

.scrollbar::-webkit-scrollbar-thumb {
    background-color: v-bind(isDark ? '#4f46e5': '#F9004D' );
    background-clip: padding-box;
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

    .scrollbar::-webkit-scrollbar-thumb {
        border-bottom: 5px transparent solid;
        border-top: 5px transparent solid;
        border-right: 5px transparent solid;
    }
}

@media only screen and (min-width: 1201px) {
    .scrollbar::-webkit-scrollbar {
        width: 18px;
    }

    .scrollbar::-webkit-scrollbar-thumb {
        border-bottom: 6px transparent solid;
        border-top: 6px transparent solid;
        border-right: 6px transparent solid;
    }
}
</style>
