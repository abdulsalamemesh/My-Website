<script setup>
import {isDark, toggleDark, showNav, currentLocation} from "../store";
import {computed, onMounted} from "vue";
import {usePage, Link} from '@inertiajs/inertia-vue3'


const selectableLocale = computed(() => {
    if (usePage().props.value.locale == 'de') {
        return 'en';
    }
    return 'de'
})

</script>

<template>
    <div class="h-screen font-montserrat flex flex-col md:flex-row relative">
        <!--Desktop Menu-->
        <nav
            class="md:border-r md:border-slate-200 md:dark:border-slate-600 bg-slate-100 dark:bg-slate-900 md:py-4 h-16 md:h-full flex md:flex-col justify-end md:justify-between md:items-center">
            <!--Desktop buttons-->
            <div class="hidden md:flex justify-between space-x-4">
                <button @click="toggleDark()">
                    <template v-if="isDark">
                        <!--Sun-->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                             class="h-5 w-5 text-white hover:text-indigo-600 transition-all delay-75 duration-300 fill-current">
                            <path d="M256 144C194.1 144 144 194.1 144 256c0 61.86 50.14 112 112 112s112-50.14 112-112C368 194.1 317.9 144 256 144z"/>
                            <path class="opacity-40"
                                  d="M108.9 74.97c-9.344-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l45.25 45.28c4.672 4.688 10.83 7.031 16.97 7.031S149.5 158.9 154.2 154.2c9.375-9.375 9.375-24.56 0-33.93L108.9 74.97zM256 0C242.8 0 232 10.75 232 24v64C232 101.3 242.8 112 256 112s24-10.75 24-24v-64C280 10.75 269.3 0 256 0zM112 256c0-13.25-10.75-24-24-24h-64C10.75 232 0 242.8 0 256s10.75 24 24 24h64C101.3 280 112 269.3 112 256zM374.8 161.2c6.141 0 12.3-2.344 16.97-7.031l45.25-45.28c9.375-9.375 9.375-24.56 0-33.94s-24.59-9.375-33.94 0l-45.25 45.28c-9.375 9.375-9.375 24.56 0 33.93C362.5 158.9 368.7 161.2 374.8 161.2zM256 400c-13.25 0-24 10.75-24 24v64C232 501.3 242.8 512 256 512s24-10.75 24-24v-64C280 410.8 269.3 400 256 400zM120.2 357.8l-45.25 45.28c-9.375 9.375-9.375 24.56 0 33.94c4.688 4.688 10.83 7.031 16.97 7.031s12.3-2.344 16.97-7.031l45.25-45.28c9.375-9.375 9.375-24.56 0-33.93S129.6 348.4 120.2 357.8zM488 232h-64c-13.25 0-24 10.75-24 24s10.75 24 24 24h64C501.3 280 512 269.3 512 256S501.3 232 488 232zM391.8 357.8c-9.344-9.375-24.56-9.372-33.94 .0031s-9.375 24.56 0 33.93l45.25 45.28c4.672 4.688 10.83 7.031 16.97 7.031s12.28-2.344 16.97-7.031c9.375-9.375 9.375-24.56 0-33.94L391.8 357.8z"/>
                        </svg>
                    </template>
                    <template v-else>
                        <!--Moon-->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                             class="h-5 w-5 text-black hover:text-blue-500 transition-all delay-75 duration-300 fill-current">
                            <path
                                d="M421.6 379.9c-.6641 0-1.35 .0625-2.049 .1953c-11.24 2.143-22.37 3.17-33.32 3.17c-94.81 0-174.1-77.14-174.1-175.5c0-63.19 33.79-121.3 88.73-152.6c8.467-4.812 6.339-17.66-3.279-19.44c-11.2-2.078-29.53-3.746-40.9-3.746C132.3 31.1 32 132.2 32 256c0 123.6 100.1 224 223.8 224c69.04 0 132.1-31.45 173.8-82.93C435.3 389.1 429.1 379.9 421.6 379.9zM255.8 432C158.9 432 80 353 80 256c0-76.32 48.77-141.4 116.7-165.8C175.2 125 163.2 165.6 163.2 207.8c0 99.44 65.13 183.9 154.9 212.8C298.5 428.1 277.4 432 255.8 432z"/>
                        </svg>
                    </template>
                </button>
                <Link :href="route('language', [selectableLocale])" class="rounded-full">
                    <template v-if="selectableLocale === 'de'">
                        <svg viewBox="0 0 512 512" class="h-5 w-5"
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
                        <svg viewBox="0 0 512 512" class="h-5 w-5"
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
            <!--Desktop Navigations-->
            <div
                class="hidden md:flex flex-col divide-y divide-slate-200 border-y border-slate-200 dark:divide-slate-600 dark:border-slate-600">
                <a href="#home"
                   :class="[currentLocation === 'home' ? 'text-blue-500 dark:text-indigo-600 bg-slate-200 dark:bg-slate-800': 'text-black dark:text-slate-200']"
                   class="py-2.5 px-3 text-sm font-medium hover:text-blue-500 dark:hover:text-indigo-500 hover:bg-slate-200 dark:hover:bg-slate-800 hover:transition hover:delay-75 hover:duration-300 text-center whitespace-nowrap">
                    Home
                </a>
                <a href="#about"
                   :class="[currentLocation === 'about' ? 'text-blue-500 dark:text-indigo-600 bg-slate-200 dark:bg-slate-800': 'text-black dark:text-slate-200']"
                   class="py-2.5 px-3 text-sm font-medium hover:text-blue-500 dark:hover:text-indigo-500 hover:bg-slate-200 dark:hover:bg-slate-800 hover:transition hover:delay-75 hover:duration-300 text-center whitespace-nowrap">
                    About
                </a>
                <a href="#skills"
                   :class="[currentLocation === 'skills' ? 'text-blue-500 dark:text-indigo-600 bg-slate-200 dark:bg-slate-800': 'text-black dark:text-slate-200']"
                   class="py-2.5 px-3 text-sm font-medium hover:text-blue-500 dark:hover:text-indigo-500 hover:bg-slate-200 dark:hover:bg-slate-800 hover:transition hover:delay-75 hover:duration-300 text-center whitespace-nowrap">
                    Skills
                </a>
                <a href="#resume"
                   :class="[currentLocation === 'resume' ? 'text-blue-500 dark:text-indigo-600 bg-slate-200 dark:bg-slate-800': 'text-black dark:text-slate-200']"
                   class="py-2.5 px-3 text-sm font-medium hover:text-blue-500 dark:hover:text-indigo-500 hover:bg-slate-200 dark:hover:bg-slate-800 hover:transition hover:delay-75 hover:duration-300 text-center whitespace-nowrap">
                    Resume
                </a>
                <a href="#contact"
                   :class="[currentLocation === 'contact' ? 'text-blue-500 dark:text-indigo-600 bg-slate-200 dark:bg-slate-800': 'text-black dark:text-slate-200']"
                   class="py-2.5 px-3 text-sm font-medium hover:text-blue-500 dark:hover:text-indigo-500 hover:bg-slate-200 dark:hover:bg-slate-800 hover:transition hover:delay-75 hover:duration-300 text-center whitespace-nowrap">
                    Contact
                </a>
                <Link :href="route('loading')"
                      :class="[currentLocation === 'loading' ? 'text-blue-500 dark:text-indigo-600 bg-slate-200 dark:bg-slate-800': 'text-black dark:text-slate-200']"
                      class="py-2.5 px-3 text-sm font-medium hover:text-blue-500 dark:hover:text-indigo-500 hover:bg-slate-200 dark:hover:bg-slate-800 hover:transition hover:delay-75 hover:duration-300 text-center whitespace-nowrap">
                    For Programmers
                </Link>
            </div>
            <div>
                <button @click="showNav = !showNav" class="p-3 md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6 w-6 text-blue-500 dark:text-indigo-600 fill-current">
                        <path
                            d="M416 224H31.1C14.33 224 0 238.3 0 256s14.33 32 31.1 32h384C433.7 288 448 273.7 448 256S433.7 224 416 224zM416 384H31.1C14.33 384 0 398.3 0 415.1S14.33 448 31.1 448h384C433.7 448 448 433.7 448 416S433.7 384 416 384zM416 64H31.1C14.33 64 0 78.33 0 95.1S14.33 128 31.1 128h384C433.7 128 448 113.7 448 96S433.7 64 416 64z"/>
                    </svg>
                </button>
            </div>
        </nav>
        <!--Mobile Menu-->
        <transition
            enter-active-class="transition-all ease-in-out duration-500"
            enter-from-class="transform opacity-0 "
            enter-to-class="transform opacity-100"
            leave-active-class="transition-all ease-in-out duration-150"
            leave-from-class="transform opacity-100 "
            leave-to-class="transform opacity-0 "
        >
            <nav v-show="showNav" class="bg-slate-100 dark:bg-slate-900 md:hidden pb-1 absolute inset-0 z-50 flex flex-col justify-between items-center md:hidden">
                <!--Mobile Buttons-->
                <div class="flex justify-between w-full">
                    <button class="p-3 md:hidden" @click="toggleDark()">
                        <template v-if="isDark">
                            <!--Sun-->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                 class="h-6 w-6 text-indigo-600 transition-all delay-75 duration-300 fill-current">
                                <path d="M256 144C194.1 144 144 194.1 144 256c0 61.86 50.14 112 112 112s112-50.14 112-112C368 194.1 317.9 144 256 144z"/>
                                <path class="opacity-40"
                                      d="M108.9 74.97c-9.344-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l45.25 45.28c4.672 4.688 10.83 7.031 16.97 7.031S149.5 158.9 154.2 154.2c9.375-9.375 9.375-24.56 0-33.93L108.9 74.97zM256 0C242.8 0 232 10.75 232 24v64C232 101.3 242.8 112 256 112s24-10.75 24-24v-64C280 10.75 269.3 0 256 0zM112 256c0-13.25-10.75-24-24-24h-64C10.75 232 0 242.8 0 256s10.75 24 24 24h64C101.3 280 112 269.3 112 256zM374.8 161.2c6.141 0 12.3-2.344 16.97-7.031l45.25-45.28c9.375-9.375 9.375-24.56 0-33.94s-24.59-9.375-33.94 0l-45.25 45.28c-9.375 9.375-9.375 24.56 0 33.93C362.5 158.9 368.7 161.2 374.8 161.2zM256 400c-13.25 0-24 10.75-24 24v64C232 501.3 242.8 512 256 512s24-10.75 24-24v-64C280 410.8 269.3 400 256 400zM120.2 357.8l-45.25 45.28c-9.375 9.375-9.375 24.56 0 33.94c4.688 4.688 10.83 7.031 16.97 7.031s12.3-2.344 16.97-7.031l45.25-45.28c9.375-9.375 9.375-24.56 0-33.93S129.6 348.4 120.2 357.8zM488 232h-64c-13.25 0-24 10.75-24 24s10.75 24 24 24h64C501.3 280 512 269.3 512 256S501.3 232 488 232zM391.8 357.8c-9.344-9.375-24.56-9.372-33.94 .0031s-9.375 24.56 0 33.93l45.25 45.28c4.672 4.688 10.83 7.031 16.97 7.031s12.28-2.344 16.97-7.031c9.375-9.375 9.375-24.56 0-33.94L391.8 357.8z"/>
                            </svg>
                        </template>
                        <template v-else>
                            <!--Moon-->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                 class="h-6 w-6 text-blue-500 transition-all delay-75 duration-300 fill-current">
                                <path
                                    d="M421.6 379.9c-.6641 0-1.35 .0625-2.049 .1953c-11.24 2.143-22.37 3.17-33.32 3.17c-94.81 0-174.1-77.14-174.1-175.5c0-63.19 33.79-121.3 88.73-152.6c8.467-4.812 6.339-17.66-3.279-19.44c-11.2-2.078-29.53-3.746-40.9-3.746C132.3 31.1 32 132.2 32 256c0 123.6 100.1 224 223.8 224c69.04 0 132.1-31.45 173.8-82.93C435.3 389.1 429.1 379.9 421.6 379.9zM255.8 432C158.9 432 80 353 80 256c0-76.32 48.77-141.4 116.7-165.8C175.2 125 163.2 165.6 163.2 207.8c0 99.44 65.13 183.9 154.9 212.8C298.5 428.1 277.4 432 255.8 432z"/>
                            </svg>
                        </template>
                    </button>
                    <button @click="showNav = !showNav" class="p-3 md:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-6 w-6 text-blue-500 dark:text-indigo-600 fill-current">
                            <path
                                d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>
                        </svg>
                    </button>
                </div>
                <!--Mobile Navigations-->
                <div class="grow flex flex-col justify-center items-center space-y-2 ">
                    <a href="#home" @click="showNav = false"
                       :class="[currentLocation === 'home' ? 'text-blue-500 dark:text-indigo-600': 'text-black dark:text-slate-200']"
                       class="py-2.5 px-3 font-medium hover:text-blue-500 dark:hover:text-indigo-500 transition-all delay-75 duration-300 text-center whitespace-nowrap"
                    >
                        Home
                    </a>
                    <a href="#about" @click="showNav = false"
                       :class="[currentLocation === 'about' ? 'text-blue-500 dark:text-indigo-600': 'text-black dark:text-slate-200']"
                       class="py-2.5 px-3 font-medium hover:text-blue-500 dark:hover:text-indigo-500 transition-all delay-75 duration-300 text-center whitespace-nowrap"
                    >
                        About
                    </a>
                    <a href="#skills" @click="showNav = false"
                       :class="[currentLocation === 'skills' ? 'text-blue-500 dark:text-indigo-600': 'text-black dark:text-slate-200']"
                       class="py-2.5 px-3 font-medium hover:text-blue-500 dark:hover:text-indigo-500 transition-all delay-75 duration-300 text-center whitespace-nowrap"
                    >
                        Skills
                    </a>
                    <a href="#resume" @click="showNav = false"
                       :class="[currentLocation === 'resume' ? 'text-blue-500 dark:text-indigo-600': 'text-black dark:text-slate-200']"
                       class="py-2.5 px-3 font-medium hover:text-blue-500 dark:hover:text-indigo-500 transition-all delay-75 duration-300 text-center whitespace-nowrap"
                    >
                        Resume
                    </a>
                    <a href="#contact" @click="showNav = false"
                       :class="[currentLocation === 'contact' ? 'text-blue-500 dark:text-indigo-600': 'text-black dark:text-slate-200']"
                       class="py-2.5 px-3 font-medium hover:text-blue-500 dark:hover:text-indigo-500 transition-all delay-75 duration-300 text-center whitespace-nowrap"
                    >
                        Contact
                    </a>
                    <Link :href="route('loading')"
                          :class="[currentLocation === 'loading' ? 'text-blue-500 dark:text-indigo-600': 'text-black dark:text-slate-200']"
                          class="py-2.5 px-3 font-medium hover:text-blue-500 dark:hover:text-indigo-500 transition-all delay-75 duration-300 text-center whitespace-nowrap">
                        For Programmers
                    </Link>
                </div>
            </nav>
        </transition>
        <!--Content-->
        <main class="grow overflow-y-auto scroll-smooth scrollbar bg-slate-100 dark:bg-slate-900" id="content" @click="showNav = false">
            <!-- Page Content -->
            <slot/>
        </main>
    </div>

</template>

<style>

.scrollbar::-webkit-scrollbar-track {
    background-color: v-bind(isDark ? '#0f172a': '#f1f5f9');
}

.scrollbar::-webkit-scrollbar-thumb {
    background-color: v-bind(isDark ? '#4f46e5': '#3b82f6' );
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

.text-shadow {
    text-shadow: -5px -2px v-bind(isDark ? '#4f46e5': '#3b82f6')
}

.text-shadow-lg {
    text-shadow: -8px -3px v-bind(isDark ? '#4f46e5': '#3b82f6')
}
</style>
