<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import VueWriter from 'vue-writer'
import ScrollArrow from "@/Components/ScrollArrow.vue";
import {computed, defineProps, onMounted} from "vue";
import {usePage} from "@inertiajs/inertia-vue3";
import {currentLocation, isDark} from "../store";

const selectableLocale = computed(() => {
    return usePage().props.value.locale
})

defineProps({
    educations: Object,
    experiences: Object,
    skills: Object,
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
    const skills = document.getElementById('skills');
    const resume = document.getElementById('resume');

    content.addEventListener('scroll', function (e) {
        if (e.currentTarget.scrollTop >= home.offsetTop && e.currentTarget.scrollTop <= (about.offsetTop - 50)) {
            currentLocation.value = 'home'
        } else if (e.currentTarget.scrollTop > (about.offsetTop - 50) && e.currentTarget.scrollTop < (skills.offsetTop - 50)) {
            currentLocation.value = 'about'
        } else if (e.currentTarget.scrollTop > (skills.offsetTop - 50) && e.currentTarget.scrollTop < (resume.offsetTop - 50)) {
            currentLocation.value = 'skills'
        } else {
            currentLocation.value = 'resume'
        }
    });
})
</script>

<template>
    <AppLayout>
        <!--Home-->
        <section class="h-[calc(100vh-3rem)] md:h-screen flex md:flex-col justify-center bg-slate-100 dark:bg-slate-900 px-4 md:px-6 py-6" id="home">
            <div class="grow flex flex-col">
                <div class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore">&lt;html></div>
                <div class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore">&lt;body></div>
                <div class="grow w-full sm:max-w-7xl mx-auto flex flex-col items-center md:items-start justify-center">
                    <div>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore  -mb-2">&lt;h1></p>
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
        </section>

        <!--Separator-->
        <div class="mx-6 md:mx-12 bg-slate-100 dark:bg-slate-900">
            <div class="border-b-2 border-slate-200 dark:border-slate-600"></div>
        </div>


        <!--About-->
        <section class="min-h-screen flex flex-col justify-center bg-slate-100 dark:bg-slate-900 px-4 md:px-6 py-6" id="about">
            <div class="grow flex flex-col">
                <div class="max-w-7xl mx-auto grow flex flex-col lg:flex-row justify-center items-center lg:space-x-12">
                    <div class="min-w-max rounded-full p-1 lg:p-2 bg-gradient-to-b from-hot-300 to-hot-500 dark:from-indigo-300 dark:to-indigo-600 mb-6">
                        <img src="/me.jpeg" class="rounded-full h-52 w-52 lg:h-72 lg:w-72 object-cover" alt="">
                    </div>
                    <div>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full  -mb-2">&lt;h2></p>
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
                    <p class="text-hot-500 dark:text-indigo-600">Skills</p>
                    <ScrollArrow id="skills"/>
                </div>
            </div>
        </section>

        <!--Separator-->
        <div class="mx-6 md:mx-12 bg-slate-100 dark:bg-slate-900">
            <div class="border-b-2 border-slate-200 dark:border-slate-600"></div>
        </div>


        <!--Skills-->
        <section class="min-h-screen flex flex-col justify-center bg-slate-100 dark:bg-slate-900 px-4 md:px-6 py-12" id="skills">

            <div class="max-w-7xl mx-auto w-full flex flex-col justify-center">
                <div>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full -mb-2">&lt;h2></p>
                    <h2 class="ml-2 text-2xl md:text-4xl lg:text-5xl dark:text-white font-semibold lg:leading-tight cursor-default text-shadow transition-all duration-300">
                        Skills
                    </h2>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/h2></p>
                </div>
            </div>

            <div class="max-w-7xl grow w-full mx-auto mt-12">
                <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full -mb-2">&lt;section></p>
                <template v-for="(skillGroup,index) in skills">
                    <div v-if="index !== 'other'" class="ml-2 my-6">
                        <div class="col-span-1 md:col-span-2 lg:col-span-3 dark:text-white underline md:text-xl font-bold">{{ skillGroup.name }}</div>
                        <div class="grid gap-y-6 gap-x-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 bg-slate-200 dark:bg-slate-800 p-4 mt-2">
                            <template v-for="(skill,index) in skillGroup.skills">
                                <div class="col-span-1">
                                    <p class="dark:text-white text-sm md:text-base font-semibold mb-1">{{ index }}</p>
                                    <div class="w-full h-5 bg-hot-200 dark:bg-indigo-200 relative">
                                        <div :class="'w-['+skill+'%]'" class="h-full bg-hot-500 dark:bg-indigo-600">
                                        </div>
                                        <p class="absolute right-1/2 translate-x-1/2 inset-y-0 w-min text-white font-bold text-sm">{{ skill }}%</p>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                    <div v-else class="ml-2 my-6">
                        <div class="col-span-1 md:col-span-2 lg:col-span-3 dark:text-white underline md:text-xl font-bold">{{ skillGroup.name }}</div>
                        <div class="grid gap-y-6 gap-x-4 grid-cols-2 md:grid-cols-4 mt-2 bg-slate-200 dark:bg-slate-800 p-4">
                            <template v-for="skill in skillGroup.skills">
                                <div class="col-span-1 flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-current text-hot-500 dark:text-indigo-600">
                                        <path
                                            d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                    </svg>
                                    <p class="dark:text-white font-semibold text-sm md:text-base">{{ skill }}</p>

                                </div>
                            </template>
                        </div>
                    </div>

                </template>

                <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/section></p>
            </div>
            <div class="px-6 md:px-12 w-full flex justify-center items-center space-x-12 md:justify-end">
                <p class="text-hot-500 dark:text-indigo-600">Resume</p>
                <ScrollArrow id="resume"/>
            </div>
        </section>

        <!--Separator-->
        <div class="mx-6 md:mx-12 bg-slate-100 dark:bg-slate-900">
            <div class="border-b-2 border-slate-200 dark:border-slate-600"></div>
        </div>

        <!--Resume-->
        <section class="min-h-screen flex flex-col justify-center bg-slate-100 dark:bg-slate-900 px-4 md:px-6 py-12" id="resume">

            <div class="max-w-7xl w-full mx-auto flex flex-col justify-center">
                <div>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full -mb-2">&lt;h2></p>
                    <h2 class="ml-2 text-2xl md:text-4xl lg:text-5xl dark:text-white font-semibold lg:leading-tight cursor-default text-shadow transition-all duration-300">
                        My Resume
                    </h2>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/h2></p>
                </div>
            </div>
            <div class="max-w-7xl w-full mx-auto flex flex-col justify-center mt-6">
                <div>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full -mb-2">&lt;a download></p>
                    <a href=""
                       class="inline-block py-2 px-4 my-2 rounded text-sm font-medium text-white bg-hot-500 dark:bg-indigo-600 hover:bg-hot-600 hover:dark:bg-indigo-700 focus:bg-hot-400 focus:dark:bg-indigo-800 focus:ring focus:dark:ring focus:ring-slate-400 focus:dark:ring-white"
                       download
                    >
                        My Resume
                    </a>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/a></p>
                </div>
            </div>
            <div class="max-w-7xl w-full mx-auto my-6">
                <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full mb-6">&lt;section></p>

                <!--Experiences-->
                <div class="max-w-7xl mx-auto flex flex-nowrap lg:justify-center">
                    <div class="flex flex-col justify-center items-start lg:items-center px-6">
                        <div class="rounded bg-hot-500 dark:bg-indigo-600 py-2 px-4 text-white font-medium">
                            Experiences
                        </div>
                        <div class="border-r-2 border-hot-500 dark:border-indigo-600 h-12 hidden lg:block">
                        </div>
                    </div>
                </div>
                <template v-for="(experience,index) in experiences">
                    <!--index odd-->
                    <div v-if="index % 2 > 0" class="max-w-7xl mx-auto flex flex-row-reverse lg:flex-row flex-nowrap justify-center">
                        <div class="w-full flex flex-col justify-center items-start lg:items-end dark:text-white py-16">
                            <p class="text-xl md:text-2xl font-semibold">{{ experience.title }}</p>
                            <p v-if="experience.workplace" class="text-md md:text-xl lg:text-right">{{ experience.workplace }}</p>
                            <p v-if="experience.date" class="text-sm md:text-base dark:text-slate-300 lg:text-right">{{ experience.date }}</p>
                            <p v-if="experience.text" class="text-sm md:text-base dark:text-slate-300 lg:text-right">{{ experience.text }}</p>

                        </div>
                        <div class="flex flex-col justify-center items-center px-6">
                            <div class="border-r-2 border-hot-500 dark:border-indigo-600 grow"></div>
                            <div class="rounded-full bg-hot-500 dark:bg-indigo-600 h-12 w-12 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-current dark:text-slate-200 text-slate-200 h-7 w-7">
                                    <path
                                        d="M128 32C92.7 32 64 60.7 64 96V352h64V96H512V352h64V96c0-35.3-28.7-64-64-64H128zM19.2 384C8.6 384 0 392.6 0 403.2C0 445.6 34.4 480 76.8 480H563.2c42.4 0 76.8-34.4 76.8-76.8c0-10.6-8.6-19.2-19.2-19.2H19.2z"/>
                                </svg>
                            </div>
                            <div class="border-r-2 border-hot-500 dark:border-indigo-600 grow"></div>
                        </div>
                        <div class="w-full hidden lg:block"></div>
                    </div>
                    <!--index even-->
                    <div v-else class="max-w-7xl mx-auto flex flex-nowrap justify-center">
                        <div class="w-full hidden lg:block"></div>
                        <div class="flex flex-col justify-center items-center px-6">
                            <div class="border-r-2 border-hot-500 dark:border-indigo-600 grow"></div>
                            <div class="rounded-full bg-hot-500 dark:bg-indigo-600 h-12 w-12 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-current dark:text-slate-200 text-slate-200 h-7 w-7">
                                    <path
                                        d="M128 32C92.7 32 64 60.7 64 96V352h64V96H512V352h64V96c0-35.3-28.7-64-64-64H128zM19.2 384C8.6 384 0 392.6 0 403.2C0 445.6 34.4 480 76.8 480H563.2c42.4 0 76.8-34.4 76.8-76.8c0-10.6-8.6-19.2-19.2-19.2H19.2z"/>
                                </svg>
                            </div>
                            <div class="border-r-2 border-hot-500 dark:border-indigo-600 grow"></div>
                        </div>
                        <div class="w-full  flex flex-col justify-end items-start dark:text-white py-16">
                            <p class="text-xl md:text-2xl font-semibold w-full">{{ experience.title }}</p>
                            <p v-if="experience.workplace" class="text-md md:text-xl w-full">{{ experience.workplace }}</p>
                            <p v-if="experience.date" class="text-sm md:text-base dark:text-slate-300 w-full">{{ experience.date }}</p>
                            <p v-if="experience.text" class="text-sm md:text-base dark:text-slate-300 w-full">{{ experience.text }}</p>
                        </div>
                    </div>
                </template>

                <!--Education-->
                <div class="max-w-7xl mx-auto flex flex-nowrap lg:justify-center">
                    <div class="flex flex-col justify-center items-start lg:items-center px-6">
                        <div class="rounded bg-hot-500 dark:bg-indigo-600 py-2 px-4 text-white font-medium">
                            Education
                        </div>
                        <div class="border-r-2 border-hot-500 dark:border-indigo-600 h-12 hidden lg:block">
                        </div>
                    </div>
                </div>
                <template v-for="(education,index) in educations">
                    <!--index odd-->
                    <div v-if="index % 2 > 0" class="max-w-7xl mx-auto flex flex-row-reverse lg:flex-row flex-nowrap justify-center">
                        <div class="w-full flex flex-col justify-center items-start lg:items-end dark:text-white py-10">
                            <p class="text-xl md:text-2xl font-semibold lg:text-right">{{ education.title }}</p>
                            <p v-if="education.ort" class="text-xl lg:text-right">{{ education.ort }}</p>
                            <p v-if="education.date" class="dark:text-slate-300 lg:text-right">{{ education.date }}</p>

                        </div>
                        <div class="flex flex-col justify-center items-center px-6">
                            <div class="border-r-2 border-hot-500 dark:border-indigo-600 grow">

                            </div>
                            <div class="rounded-full bg-hot-500 dark:bg-indigo-600 h-12 w-12 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-current dark:text-slate-200 text-slate-200 h-7 w-7">
                                    <path
                                        d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                                </svg>
                            </div>
                            <div v-if="index !== educations.length -1" class="border-r-2 border-hot-500 dark:border-indigo-600 grow">

                            </div>
                        </div>
                        <div class="w-full hidden lg:block"></div>
                    </div>
                    <!--index even-->
                    <div v-else class="max-w-7xl mx-auto flex flex-nowrap justify-center">
                        <div class="w-full hidden lg:block"></div>
                        <div class="flex flex-col justify-center items-center px-6">
                            <div class="border-r-2 border-hot-500 dark:border-indigo-600 grow">

                            </div>
                            <div class="rounded-full bg-hot-500 dark:bg-indigo-600 h-12 w-12 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-current dark:text-slate-200 text-slate-200 h-7 w-7">
                                    <path
                                        d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                                </svg>
                            </div>
                            <div v-if="index !== educations.length -1" class="border-r-2 border-hot-500 dark:border-indigo-600 grow">
                            </div>
                        </div>
                        <div class="w-full  flex flex-col justify-end items-start dark:text-white py-10">
                            <p class="text-xl md:text-2xl font-semibold w-full">{{ education.title }}</p>
                            <p v-if="education.ort" class="text-md md:text-xl w-full">{{ education.ort }}</p>
                            <p v-if="education.date" class="text-sm md:text-base dark:text-slate-300 w-full">{{ education.date }}</p>
                        </div>
                    </div>
                </template>
                <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full mt-6">&lt;/section></p>
            </div>
            <div class="px-6 md:px-12 w-full flex justify-center items-center space-x-12 md:justify-end">
                <p class="text-hot-500 dark:text-indigo-600">Contact</p>
                <ScrollArrow id="contact"/>
            </div>
        </section>

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

/*w-[80%]*/
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
