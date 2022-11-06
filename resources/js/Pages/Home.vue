<script setup>
import WebsiteLayout from '@/Layouts/WebsiteLayout.vue';
import VueWriter from 'vue-writer'
import ScrollArrow from "@/Components/ScrollArrow.vue";
import {computed, defineProps, onMounted, ref, shallowRef} from "vue";
import {usePage, useForm} from "@inertiajs/inertia-vue3";
import {currentLocation, isDark} from "../store";


import Laravel from "@/Icons/Laravel.vue";
import PHPIcon from "@/Icons/PHPIcon.vue";
import OOP from "@/Icons/OOP.vue";
import JavaScript from "@/Icons/JavaScript.vue";
import CSS from "@/Icons/CSS.vue";
import PHPStrom from "@/Icons/PHPStrom.vue";
import Vue from "@/Icons/Vue.vue";
import Livewire from "@/Icons/Livewire.vue";
import Alpine from "@/Icons/Alpine.vue";
import Tailwindcss from "@/Icons/Tailwindcss.vue";
import Bootstrap from "@/Icons/Bootstrap.vue";
import Git from "@/Icons/Git.vue";
import Github from "@/Icons/Github.vue";
import Bitbucket from "@/Icons/Bitbucket.vue";
import Jira from "@/Icons/Jira.vue";
import PHPUnitIcon from "@/Icons/PHPUnitIcon.vue";
import MySQL from "@/Icons/MySQL.vue";
import Datagrip from "@/Icons/Datagrip.vue";
import NPMIcon from "@/Icons/NPMIcon.vue";
import Yarn from "@/Icons/Yarn.vue";
import Webpack from "@/Icons/Webpack.vue";
import Vite from "@/Icons/Vite.vue";
import SSH from "@/Icons/SSH.vue";
import SFTP from "@/Icons/SFTP.vue";
import JSON from "@/Icons/JSON.vue";
import Language from "@/Icons/Language.vue";
import Drive from "@/Icons/Drive.vue";

const selectableLocale = computed(() => {
    return usePage().props.value.locale
})
const SkillsLogos = shallowRef({
    'Laravel': Laravel,
    'PHPIcon': PHPIcon,
    'OOP': OOP,
    'JavaScript': JavaScript,
    'CSS': CSS,
    'PHPStrom': PHPStrom,
    'Vue': Vue,
    'Alpine': Alpine,
    'Livewire': Livewire,
    'Tailwindcss': Tailwindcss,
    'Bootstrap': Bootstrap,
    'Git': Git,
    'Github': Github,
    'Bitbucket': Bitbucket,
    'Drive': Drive,
    'Language': Language,
    'JSON': JSON,
    'SFTP': SFTP,
    'SSH': SSH,
    'Vite': Vite,
    'Webpack': Webpack,
    'Yarn': Yarn,
    'NPMIcon': NPMIcon,
    'Datagrip': Datagrip,
    'MySQL': MySQL,
    'PHPUnitIcon': PHPUnitIcon,
    'Jira': Jira,
})
const {educations, experiences, skills, errors} = defineProps({
    educations: Object,
    experiences: Object,
    skills: Object,
    errors: Object,
})
const enTitles = [
    ' am a Fullstack Developer.',
    ' build things for the web.',
    ' enjoy solving problems.',
    ' love to work in team.',
];
const deTitles = [
    ' bin Fullstack-Entwickler.',
    ' entwickle Dinge für das Internet.',
    ' löse gerne Probleme.',
    ' arbeite gerne im Team.',
];

const form = useForm({
    email: null,
    name: null,
    phone: null,
    message: null,
})

function submit() {
    form.post('/contact-form', {preserveScroll: true})
}

onMounted(() => {
    const content = document.getElementById('content');
    const home = document.getElementById('home');
    const about = document.getElementById('about');
    const skills = document.getElementById('skills');
    const resume = document.getElementById('resume');
    const projects = document.getElementById('projects');
    const contact = document.getElementById('contact');

    content.addEventListener('scroll', function (e) {
        if (e.currentTarget.scrollTop >= home.offsetTop && e.currentTarget.scrollTop <= (about.offsetTop - 50)) {
            currentLocation.value = 'home'
        } else if (e.currentTarget.scrollTop > (about.offsetTop - 50) && e.currentTarget.scrollTop < (skills.offsetTop - 50)) {
            currentLocation.value = 'about'
        } else if (e.currentTarget.scrollTop > (skills.offsetTop - 50) && e.currentTarget.scrollTop < (resume.offsetTop - 50)) {
            currentLocation.value = 'skills'
        } else if (e.currentTarget.scrollTop > (resume.offsetTop - 50) && e.currentTarget.scrollTop < (projects.offsetTop - 50)) {
            currentLocation.value = 'resume'
        } else if (e.currentTarget.scrollTop > (projects.offsetTop - 50) && e.currentTarget.scrollTop < (contact.offsetTop - 50)) {
            currentLocation.value = 'projects'
        } else {
            currentLocation.value = 'contact'
        }
    });
})
</script>

<template>
    <WebsiteLayout>
        <!--Home-->
        <section class="h-[calc(100vh-3rem)] md:h-screen flex md:flex-col justify-center px-4 md:px-6 py-6" id="home">
            <div class="grow flex flex-col">
                <div class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore">&lt;html></div>
                <div class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore">&lt;body></div>
                <div class="grow w-full sm:max-w-7xl mx-auto flex flex-col items-center md:items-start justify-center">
                    <div>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore  -mb-2">&lt;h1></p>

                        <p class="ml-2 text-3xl md:text-5xl lg:text-6xl dark:text-white font-semibold lg:leading-tight cursor-default text-shadow transition-all duration-150">
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
                    <p class="text-blue-500 dark:text-indigo-600 font-medium">{{ __('About') }}</p>
                    <ScrollArrow id="about"/>
                </div>
            </div>
        </section>

        <!--Separator-->
        <div class="mx-6 md:mx-12">
            <div class="border-b-2 border-slate-300 dark:border-slate-600"></div>
        </div>


        <!--About-->
        <section class="min-h-screen flex flex-col justify-center px-4 md:px-6 py-6" id="about">
            <div class="grow flex flex-col">
                <div class="max-w-7xl mx-auto grow flex flex-col lg:flex-row justify-center items-center lg:space-x-12">
                    <div class="min-w-max rounded-full p-1 lg:p-2 bg-gradient-to-b from-blue-300 to-blue-500 dark:from-indigo-300 dark:to-indigo-600 mb-6">
                        <img src="/me.jpeg" class="rounded-full h-52 w-52 lg:h-72 lg:w-72 object-cover" alt="">
                    </div>
                    <div>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full  -mb-2">&lt;h2></p>
                        <h2 class="ml-2 text-2xl md:text-4xl lg:text-5xl dark:text-white font-semibold lg:leading-tight cursor-default text-shadow transition-all duration-150">
                            {{ __('Me, Myself & I') }}
                        </h2>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/h2></p>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;p></p>
                        <p v-if="selectableLocale === 'en'" class="ml-2 md:text-xl dark:text-white">
                            I have been on this earth for about {{ new Date().getFullYear() - 1992 }} years and started my journey in <span
                            class="text-blue-500 dark:text-indigo-600 font-semibold">Aleppo, Syria</span>. I
                            have been living in my second home <span class="text-blue-500 dark:text-indigo-600 font-semibold">Xanten, Germany</span> for
                            {{ new Date().getFullYear() - 2016 }} years now. I am one of the lucky ones
                            who turned their <span class="text-blue-500 dark:text-indigo-600 font-semibold">hobby and passion</span> into a <span
                            class="text-blue-500 dark:text-indigo-600 font-semibold"> profession</span>. I love structure and
                            order and I also
                            stand for quality. I also like to work in a team, where I learn a lot and quickly. <br> As the german saying goes: <span
                            class="text-blue-500 dark:text-indigo-600 font-semibold">  "Alone you are strong, together unbeatable"</span>.
                        </p>
                        <p v-else class="ml-2 md:text-xl dark:text-white">
                            Ich bin seit etwa {{ new Date().getFullYear() - 1992 }} Jahren auf dieser Erde und habe meine Reise in <span
                            class="text-blue-500 dark:text-indigo-600 font-semibold">Aleppo, Syrien,</span> begonnen. Seit {{ new Date().getFullYear() - 2016 }} Jahren lebe ich in
                            meiner zweiten Heimat
                            <span class="text-blue-500 dark:text-indigo-600 font-semibold">Xanten, Deutschland</span>. Ich bin einer der Glücklichen, die ihr <span
                            class="text-blue-500 dark:text-indigo-600 font-semibold">Hobby</span> und ihre <span class="text-blue-500 dark:text-indigo-600 font-semibold">Leidenschaft</span>
                            zum <span class="text-blue-500 dark:text-indigo-600 font-semibold">Beruf</span> gemacht haben. Ich liebe Struktur und Ordnung und
                            stehe auch für Qualität. Außerdem arbeite ich gerne im Team, wo ich viel und schnell lerne.
                            Wie das Sprichwort schon sagt: <span class="text-blue-500 dark:text-indigo-600 font-semibold">"Alleine bist du stark, gemeinsam unschlagbar"</span>.
                        </p>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/p></p>
                    </div>
                </div>
                <div class="px-6 md:px-12 w-full flex justify-center items-center space-x-12 md:justify-end">
                    <p class="text-blue-500 dark:text-indigo-600 font-medium">Skills</p>
                    <ScrollArrow id="skills"/>
                </div>
            </div>
        </section>

        <!--Separator-->
        <div class="mx-6 md:mx-12">
            <div class="border-b-2 border-slate-300 dark:border-slate-600"></div>
        </div>


        <!--Skills-->
        <section class="min-h-screen flex flex-col justify-center px-4 md:px-6 py-6" id="skills">

            <div class="max-w-7xl mx-auto w-full flex flex-col justify-center">
                <div>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full -mb-2">&lt;h2></p>
                    <h2 class="ml-2 text-2xl md:text-4xl lg:text-5xl dark:text-white font-semibold lg:leading-tight cursor-default text-shadow transition-all duration-150">
                        Skills
                    </h2>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/h2></p>
                </div>
            </div>

            <div class="max-w-7xl grow w-full mx-auto">
                <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full -mb-2">&lt;section></p>
                <template v-for="skillGroup in skills">
                    <div class="ml-2 my-6">
                        <div class="col-span-1 md:col-span-2 lg:col-span-3 dark:text-white text-lg md:text-xl font-bold">{{ skillGroup.name }}</div>
                        <div class="grid gap-y-6 gap-x-4 grid-cols-2 md:grid-cols-3 mt-2 bg-slate-200 dark:bg-slate-800 p-4 border border-slate-400 dark:border-slate-600 rounded">
                            <template v-for="skill in skillGroup.skills">
                                <div class="col-span-1 flex items-center space-x-2">
                                    <div>
                                        <!--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-current text-blue-500 dark:text-indigo-600">-->
                                        <!--                                            <path-->
                                        <!--                                                d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>-->
                                        <!--                                        </svg>-->
                                        <component :is="SkillsLogos[skill.logo]" :key="skill.logo" class="h-7 w-7"></component>
                                    </div>
                                    <p class="dark:text-white font-medium text-sm md:text-base">{{ skill.name }}</p>
                                </div>
                            </template>
                        </div>
                    </div>
                </template>
                <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/section></p>
            </div>
            <div class="px-6 md:px-12 w-full flex justify-center items-center space-x-12 md:justify-end">
                <p class="text-blue-500 dark:text-indigo-600 font-medium">{{ __('Resume') }}</p>
                <ScrollArrow id="resume"/>
            </div>
        </section>

        <!--Separator-->
        <div class="mx-6 md:mx-12">
            <div class="border-b-2 border-slate-300 dark:border-slate-600"></div>
        </div>

        <!--Resume-->
        <section class="min-h-screen flex flex-col justify-center px-4 md:px-6 py-6" id="resume">

            <div class="max-w-7xl w-full mx-auto flex flex-col justify-center">
                <div>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full -mb-2">&lt;h2></p>
                    <h2 class="ml-2 text-2xl md:text-4xl lg:text-5xl dark:text-white font-semibold lg:leading-tight cursor-default text-shadow transition-all duration-150">
                        {{ __('My Resume') }}
                    </h2>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/h2></p>
                </div>
            </div>
            <div class="max-w-7xl w-full mx-auto flex flex-col justify-center">
                <div>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full -mb-2">&lt;a download></p>
                    <a href=""
                       class="inline-block py-2 px-4 my-2 rounded text-sm font-medium text-white bg-blue-500 dark:bg-indigo-600 hover:bg-blue-600 hover:dark:bg-indigo-700 focus:bg-blue-400 focus:dark:bg-indigo-800 focus:ring focus:dark:ring focus:ring-slate-400 focus:dark:ring-white"
                       download
                    >
                        {{ __('My Resume') }}
                    </a>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/a></p>
                </div>
            </div>
            <div class="max-w-7xl w-full mx-auto">
                <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full mb-6">&lt;section></p>

                <!--Experiences-->
                <div class="max-w-7xl mx-auto flex flex-nowrap lg:justify-center">
                    <div class="flex flex-col justify-center items-start lg:items-center lg:px-6">
                        <div class="rounded bg-blue-500 dark:bg-indigo-600 py-2 px-4 text-white font-medium">
                            {{ __('Experiences') }}
                        </div>
                        <div class="border-r-2 border-blue-500 dark:border-indigo-600 hidden lg:block h-12">
                        </div>
                    </div>
                </div>
                <template v-for="(experience,index) in experiences">
                    <!--index odd-->
                    <div v-if="index % 2 > 0" class="max-w-7xl mx-auto flex flex-row-reverse lg:flex-row flex-nowrap justify-center">
                        <div class="w-full flex flex-col justify-center items-start lg:items-end dark:text-white py-6 lg:py-4">
                            <p class="text-xl md:text-2xl font-semibold lg:text-right">{{ experience.title }}</p>
                            <p v-if="experience.workplace" class="text-md md:text-xl font-medium lg:text-right">{{ experience.workplace }}</p>
                            <p v-if="experience.date" class="text-sm md:text-base font-medium lg:text-right">{{ experience.date }}</p>
                            <p v-if="experience.text" class="text-sm md:text-base dark:text-slate-300 lg:text-right">{{ experience.text }}</p>
                        </div>
                        <div class="flex flex-col justify-center items-center pr-6 lg:px-6">
                            <div class="border-r-2 border-blue-500 dark:border-indigo-600 grow"></div>
                            <div class="rounded-full bg-blue-500 dark:bg-indigo-600 h-12 w-12 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-current dark:text-slate-200 text-slate-200 h-7 w-7">
                                    <path
                                        d="M128 32C92.7 32 64 60.7 64 96V352h64V96H512V352h64V96c0-35.3-28.7-64-64-64H128zM19.2 384C8.6 384 0 392.6 0 403.2C0 445.6 34.4 480 76.8 480H563.2c42.4 0 76.8-34.4 76.8-76.8c0-10.6-8.6-19.2-19.2-19.2H19.2z"/>
                                </svg>
                            </div>
                            <div class="border-r-2 border-blue-500 dark:border-indigo-600 grow"></div>
                        </div>
                        <div class="w-full hidden lg:block"></div>
                    </div>
                    <!--index even-->
                    <div v-else class="max-w-7xl mx-auto flex flex-nowrap justify-center">
                        <div class="w-full hidden lg:block"></div>
                        <div class="flex flex-col justify-center items-center pr-6 lg:px-6">
                            <div class="border-r-2 border-blue-500 dark:border-indigo-600 grow"></div>
                            <div class="rounded-full bg-blue-500 dark:bg-indigo-600 h-12 w-12 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-current dark:text-slate-200 text-slate-200 h-7 w-7">
                                    <path
                                        d="M128 32C92.7 32 64 60.7 64 96V352h64V96H512V352h64V96c0-35.3-28.7-64-64-64H128zM19.2 384C8.6 384 0 392.6 0 403.2C0 445.6 34.4 480 76.8 480H563.2c42.4 0 76.8-34.4 76.8-76.8c0-10.6-8.6-19.2-19.2-19.2H19.2z"/>
                                </svg>
                            </div>
                            <div class="border-r-2 border-blue-500 dark:border-indigo-600 grow"></div>
                        </div>
                        <div class="w-full  flex flex-col justify-end items-start dark:text-white py-6 lg:py-4">
                            <p class="text-xl md:text-2xl font-semibold w-full">{{ experience.title }}</p>
                            <p v-if="experience.workplace" class="text-md md:text-xl font-medium w-full">{{ experience.workplace }}</p>
                            <p v-if="experience.date" class="text-sm md:text-base font-medium w-full">{{ experience.date }}</p>
                            <p v-if="experience.text" class="text-sm md:text-base dark:text-slate-300 w-full">{{ experience.text }}</p>
                        </div>
                    </div>
                </template>

                <!--Education-->
                <div class="max-w-7xl mx-auto flex flex-nowrap lg:justify-center">
                    <div class="flex flex-col justify-center items-start lg:items-center lg:px-6">
                        <div class="border-r-2 border-blue-500 dark:border-indigo-600 hidden lg:block h-12">
                        </div>
                        <div class="rounded bg-blue-500 dark:bg-indigo-600 py-2 px-4 text-white font-medium">
                            {{ __('Education') }}
                        </div>
                        <div class="border-r-2 border-blue-500 dark:border-indigo-600 hidden lg:block h-12">
                        </div>
                    </div>
                </div>
                <template v-for="(education,index) in educations">
                    <!--index odd-->
                    <div v-if="index % 2 > 0" class="max-w-7xl mx-auto flex flex-row-reverse lg:flex-row flex-nowrap justify-center">
                        <div class="w-full flex flex-col justify-center items-start lg:items-end dark:text-white py-6 lg:py-4">
                            <p class="text-xl md:text-2xl font-semibold lg:text-right">{{ education.title }}</p>
                            <p v-if="education.ort" class="text-md md:text-xl font-medium lg:text-right">{{ education.ort }}</p>
                            <p v-if="education.date" class="text-sm md:text-base font-medium lg:text-right">{{ education.date }}</p>
                        </div>
                        <div class="flex flex-col justify-center items-center pr-6 lg:px-6">
                            <div class="border-r-2 border-blue-500 dark:border-indigo-600 grow">

                            </div>
                            <div class="rounded-full bg-blue-500 dark:bg-indigo-600 h-12 w-12 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-current dark:text-slate-200 text-slate-200 h-7 w-7">
                                    <path
                                        d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                                </svg>
                            </div>
                            <div :class="[index === educations.length -1 ? 'border-transparent':'border-blue-500 dark:border-indigo-600']" class="border-r-2 grow">

                            </div>
                        </div>
                        <div class="w-full hidden lg:block"></div>
                    </div>
                    <!--index even-->
                    <div v-else class="max-w-7xl mx-auto flex flex-nowrap justify-center">
                        <div class="w-full hidden lg:block"></div>
                        <div class="flex flex-col justify-center items-center pr-6 lg:px-6">
                            <div class="border-r-2 border-blue-500 dark:border-indigo-600 grow">

                            </div>
                            <div class="rounded-full bg-blue-500 dark:bg-indigo-600 h-12 w-12 flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-current dark:text-slate-200 text-slate-200 h-7 w-7">
                                    <path
                                        d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                                </svg>
                            </div>
                            <div :class="[index === educations.length -1 ? 'border-transparent':'border-blue-500 dark:border-indigo-600']" class="border-r-2 grow">
                            </div>
                        </div>
                        <div class="w-full  flex flex-col justify-end items-start dark:text-white py-6 lg:py-4">
                            <p class="text-xl md:text-2xl font-semibold w-full">{{ education.title }}</p>
                            <p v-if="education.ort" class="text-md md:text-xl font-medium w-full">{{ education.ort }}</p>
                            <p v-if="education.date" class="text-sm md:text-base font-medium w-full">{{ education.date }}</p>
                        </div>
                    </div>
                </template>
                <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full mt-6">&lt;/section></p>
            </div>
            <div class="px-6 md:px-12 w-full flex justify-center items-center space-x-12 md:justify-end">
                <p class="text-blue-500 dark:text-indigo-600 font-medium">{{ __('Projects') }}</p>
                <ScrollArrow id="projects"/>
            </div>
        </section>

        <!--Separator-->
        <div class="mx-6 md:mx-12">
            <div class="border-b-2 border-slate-300 dark:border-slate-600"></div>
        </div>

        <!--Projects-->
        <section class="min-h-screen flex flex-col justify-center px-4 md:px-6 py-6" id="projects">

            <div class="max-w-7xl w-full mx-auto flex flex-col justify-center">
                <div>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full -mb-2">&lt;h2></p>
                    <h2 class="ml-2 text-2xl md:text-4xl lg:text-5xl dark:text-white font-semibold lg:leading-tight cursor-default text-shadow transition-all duration-150">
                        {{ __('Projects') }}
                    </h2>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/h2></p>
                </div>
            </div>
            <div class="max-w-7xl w-full mx-auto">
                <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;section></p>

                <div class="ml-2 flex flex-wrap flex-row w-full justify-center">
                    <div class="p-2 w-full lg:w-1/2 xl:w-1/3 flex">
                        <div
                            class="grow p-4 flex flex-col justify-between rounded dark:text-slate-300 font-medium space-y-3 bg-slate-200 dark:bg-slate-800 border border-slate-400 dark:border-slate-600">
                            <div>
                                <h2 class="text-xl">
                                    {{ __('Dipos online shop') }}
                                </h2>
                                <p class="mt-2">{{
                                        __('A custom-made multilingual online Shop where you can shop for your next screen protection foils for any device. The system has an admin area where the admin can upload weekly an over 500 MB CSV file with the new products and export the new orders.')
                                    }}</p>
                            </div>
                            <div class="border-t border-slate-400 pt-2">
                                <p class="text-xs">#{{ __('Teamarbeit') }} #{{ __('API') }} #{{ __('Export') }} #{{ __('Import') }} #{{ __('Orders') }}</p>
                                <a href="https://shop.dipos.de/en" target="_blank"
                                   class="block text-sm md:text-base text-blue-500 hover:text-blue-600 dark:text-indigo-600 dark:hover:text-indigo-700 transition duration-150">
                                    shop.dipos.de
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 w-full lg:w-1/2 xl:w-1/3 flex">
                        <div
                            class="grow p-4 flex flex-col justify-between rounded dark:text-slate-300 font-medium space-y-3 bg-slate-200 dark:bg-slate-800 border border-slate-400 dark:border-slate-600">
                            <div>
                                <h2 class="text-xl">
                                    {{ __('Apprentices Management System') }}
                                </h2>
                                <p class="mt-2">{{
                                        __('Trainees in different training areas can use the system to carry out, sign and manage their report books. The report books can be checked, controlled and signed by trainers.')
                                    }}</p>
                            </div>
                            <div class="border-t border-slate-400 pt-2">
                                <p class="text-xs">#{{ __('Individual-work') }} #{{ __('Export') }} #PDF #{{ __('Permissions') }}</p>
                                <a href="https://azubi.ideenkonzept.de" target="_blank"
                                   class="block text-sm md:text-base text-blue-500 hover:text-blue-600 dark:text-indigo-600 dark:hover:text-indigo-700 transition duration-150">
                                    azubi.ideenkonzept.de
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 w-full lg:w-1/2 xl:w-1/3 flex">
                        <div
                            class="grow p-4 flex flex-col justify-between rounded dark:text-slate-300 font-medium space-y-3 bg-slate-200 dark:bg-slate-800 border border-slate-400 dark:border-slate-600">
                            <div>
                                <h2 class="text-xl">
                                    Cloud LASE
                                </h2>
                                <p class="mt-2">{{
                                        __('A Laravel multi tenancy cloud based platform with supervision area, where the Clients can connect their own Laser counting devices in an automated process. The platform is also responsible for the aggregation of the data and generating statistic.')
                                    }}</p>
                            </div>
                            <div class="border-t border-slate-400 pt-2">
                                <p class="text-xs">#{{ __('Teamarbeit') }} #{{ __('API') }} #{{ __('Data-aggregation') }} #{{ __('Multi-Tenancy') }} #{{ __('Statistics') }}
                                    #{{ __('Permissions') }}</p>
                                <a href="https://cloud-lase.com" target="_blank"
                                   class="block text-sm md:text-base text-blue-500 hover:text-blue-600 dark:text-indigo-600 dark:hover:text-indigo-700 transition duration-150">
                                    cloud-lase.com
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 w-full lg:w-1/2 xl:w-1/3 flex">
                        <div
                            class="grow p-4 flex flex-col justify-between rounded dark:text-slate-300 font-medium space-y-3 bg-slate-200 dark:bg-slate-800 border border-slate-400 dark:border-slate-600">
                            <div>
                                <h2 class="text-xl">
                                    {{ __('My portfolio') }}
                                </h2>
                                <p class="mt-2">
                                    {{
                                        __('I built my portfolio with the following technologies: latest Laravel version and PHP version - Inertiajs - Vue - Vite - Tauilwindcss - PostCss.')
                                    }}
                                </p>
                            </div>
                            <div class="border-t border-slate-400 pt-2">
                                <p class="text-xs">#{{ __('Individual-work') }} #{{ __('Custom') }}</p>
                                <a href="https://abdulsalam-emesh.me" target="_blank"
                                   class="block text-sm md:text-base text-blue-500 hover:text-blue-600 dark:text-indigo-600 dark:hover:text-indigo-700 transition duration-150">
                                    abdulsalam-emesh.me
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 w-full lg:w-1/2 xl:w-1/3 flex">
                        <div
                            class="grow p-4 flex flex-col justify-between rounded dark:text-slate-300 font-medium space-y-3 bg-slate-200 dark:bg-slate-800 border border-slate-400 dark:border-slate-600">
                            <div>
                                <h2 class="text-xl">
                                    Rottbeck Immobilien
                                </h2>
                                <p class="mt-2"> {{
                                        __('An online real estate agent with a real estate filters. The API from ImmoScout24 was implemented to get the latest available real estate.')
                                    }}</p>
                            </div>
                            <div class="border-t border-slate-400 pt-2">
                                <p class="text-xs">#{{ __('Teamarbeit') }} #{{ __('API') }}</p>
                                <a href="https://rottbeck-immobilien.de" target="_blank"
                                   class="block text-sm md:text-base text-blue-500 hover:text-blue-600 dark:text-indigo-600 dark:hover:text-indigo-700 transition duration-150">
                                    rottbeck-immobilien.de
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/section></p>
            </div>
            <div class="px-6 md:px-12 w-full flex justify-center items-center space-x-12 md:justify-end">
                <p class="text-blue-500 dark:text-indigo-600 font-medium">{{ __('Contact') }}</p>
                <ScrollArrow id="contact"/>
            </div>
        </section>

        <!--Separator-->
        <div class="mx-6 md:mx-12">
            <div class="border-b-2 border-slate-300 dark:border-slate-600"></div>
        </div>

        <!--Contact-->
        <section class="min-h-screen flex flex-col justify-center px-4 md:px-6 py-6" id="contact">

            <div class="max-w-7xl w-full mx-auto flex flex-col justify-center">
                <div>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full -mb-2">&lt;h2></p>
                    <h2 class="ml-2 text-2xl md:text-4xl lg:text-5xl dark:text-white font-semibold lg:leading-tight cursor-default text-shadow transition-all duration-150">
                        {{ __('Let\'s get in touch') }}
                    </h2>
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/h2></p>
                </div>
            </div>
            <div class="max-w-7xl w-full mx-auto">
                <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;section></p>

                <div class="ml-2 p-4 flex flex-col lg:flex-row">
                    <div class="w-full lg:w-5/12 h-full">
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full ">&lt;div></p>
                        <div class="ml-2 lg:pr-6 dark:text-slate-300 font-medium space-y-3 mb-2">
                            <h2 class="text-lg">
                                {{ __('I enjoy discussing new opportunities. Please share as much info, as possible, so we can get the most out of our first catch-up.') }}
                            </h2>
                            <a href="tel:+491726081149" class="block text-sm md:text-base">
                                {{ __('Phone') }}: <span class="hover:text-blue-500 dark:hover:text-indigo-600 transition duration-150 encrypt-email">94 118 06 271 94+</span>
                            </a>
                            <a href="javascript:linkTo_UnCryptMailto('nbjmup;bcevmtbmbn/fnfti/xpslAhnbjm/dpn');" class="block text-sm md:text-base">
                                {{ __('Email') }}: <span class="hover:text-blue-500 dark:hover:text-indigo-600 transition duration-150 encrypt-email">moc.liamg@krow.hseme.malasludba</span>
                            </a>
                        </div>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full ">&lt;/div></p>

                        <p class="md:text-lg text-red-500 font-aurore w-full " v-if="Object.keys(form.errors).length > 0">&lt;errors></p>
                        <div class="ml-2 lg:mr-6 text-red-500 font-medium mb-2 bg-red-100 ring ring-red-300 rounded p-2 flex justify-between"
                             v-if="Object.keys(form.errors).length > 0">
                            <div class="space-y-2">
                                <p class="text-sm" v-for="error in form.errors" v-text="error"></p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-5 w-5 text-red-500 fill-current cursor-pointer"
                                 @click="form.clearErrors()">
                                <path
                                    d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>
                            </svg>
                        </div>
                        <p class="md:text-lg text-red-500 font-aurore w-full " v-if="Object.keys(form.errors).length > 0">&lt;/errors></p>

                        <p class="md:text-lg text-green-500 font-aurore w-full " v-if="form.wasSuccessful">&lt;success></p>
                        <div class="ml-2 mb-2  p-2 lg:mr-6 bg-green-100 ring ring-green-300 rounded  text-green-500 flex justify-between" v-if="form.wasSuccessful">
                            <div>
                                <p class="text-base font-bold">{{ __('Thank you For Contacting me!') }}</p>
                                <p class="text-sm font-medium">{{ __('I will get back to you as soon as possible.') }}</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-5 w-5 text-green-500 fill-current cursor-pointer"
                                 @click="form.wasSuccessful = null">
                                <path
                                    d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>
                            </svg>
                        </div>
                        <p class="md:text-lg text-green-500 font-aurore w-full " v-if="form.wasSuccessful">&lt;/success></p>
                    </div>
                    <div class="w-full lg:w-7/12">
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full ">&lt;form></p>
                        <form @submit.prevent="submit"
                              class="ml-2 bg-slate-200 dark:bg-slate-800 p-3 md:p-6 rounded space-y-3 md:space-y-4 my-2 border border-slate-400 dark:border-slate-600">
                            <h2 class="text-2xl dark:text-white font-semibold lg:leading-tight cursor-default">
                                {{ __('Send me a message') }}
                            </h2>
                            <input
                                v-model="form.email"
                                type="email"
                                class="block w-full px-3 py-1 font-medium border border-slate-400 focus:border-blue-500 dark:border-slate-600 focus:bg-slate-100 dark:focus:bg-slate-700 rounded bg-slate-50 dark:bg-slate-800 text-black dark:text-white placeholder-black dark:placeholder-white placeholder:text-sm"
                                :placeholder="__('Email')"
                                @change="form.clearErrors('email')"
                                :class="[form.errors.email?'border-red-500 dark:border-red-500':'']"
                                required
                            >
                            <input
                                v-model="form.name"
                                type="text"
                                class="block w-full px-3 py-1 font-medium border border-slate-400 focus:border-blue-500 dark:border-slate-600 focus:bg-slate-100 dark:focus:bg-slate-700 rounded bg-slate-50 dark:bg-slate-800 text-black dark:text-white placeholder-black dark:placeholder-white placeholder:text-sm"
                                :placeholder="__('First name, last name')"
                                @change="form.clearErrors('name')"
                                :class="[form.errors.name?'border-red-500 dark:border-red-500':'']"
                                required
                            >
                            <input
                                v-model="form.phone"
                                type="Tel"
                                class="block w-full px-3 py-1 font-medium border border-slate-400 focus:border-blue-500 dark:border-slate-600 focus:bg-slate-100 dark:focus:bg-slate-700 rounded bg-slate-50 dark:bg-slate-800 text-black dark:text-white placeholder-black dark:placeholder-white placeholder:text-sm"
                                :placeholder="__('Phone')"
                                @change="form.clearErrors('phone')"
                                :class="[form.errors.phone?'border-red-500 dark:border-red-500':'']"
                                required
                            >
                            <textarea
                                v-model="form.message"
                                class="block w-full px-3 py-1 font-medium border border-slate-400 focus:border-blue-500 dark:border-slate-600 focus:bg-slate-100 dark:focus:bg-slate-700 rounded bg-slate-50 dark:bg-slate-800 text-black dark:text-white placeholder-black dark:placeholder-white placeholder:text-sm"
                                rows="12"
                                :placeholder="__('Your Message')"
                                @change="form.clearErrors('message')"
                                :class="[form.errors.message?'border-red-500 dark:border-red-500':'']"
                                required
                            ></textarea>
                            <button type="submit"
                                    :disabled="form.processing"
                                    class="inline-block py-2 px-4 my-2 rounded text-sm font-medium text-white bg-blue-500 dark:bg-indigo-600 hover:bg-blue-600 hover:dark:bg-indigo-700 focus:bg-blue-400 focus:dark:bg-indigo-800 focus:ring focus:dark:ring focus:ring-slate-400 focus:dark:ring-white disabled:bg-gray-600 disabled:dark:bg-gray-600"
                            >
                                {{ __('Send') }}
                            </button>
                        </form>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/form></p>

                    </div>
                </div>
                <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/section></p>
            </div>
            <div class="px-6 md:px-12 w-full flex justify-center items-center space-x-12 md:justify-end">
                <p class="text-blue-500 dark:text-indigo-600 font-medium">{{ __('Home') }}</p>
                <div class="rotate-180">
                    <ScrollArrow id="home"/>
                </div>
            </div>
            <div class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore">&lt;/body></div>
            <div class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore">&lt;/html></div>
        </section>

    </WebsiteLayout>

</template>

<script>

</script>
<style lang="postcss">
.is-typed {
    font-family: 'montserrat', sans-serif !important;
    @apply text-3xl md:text-5xl lg:text-6xl font-bold text-blue-500 dark:text-indigo-600 ml-2 break-words lg:leading-tight cursor-default transition-all duration-150;

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

.encrypt-email {
    unicode-bidi: bidi-override;
    direction: rtl;
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
        text-shadow: -0.15rem -0.15rem v-bind(isDark ? '#4f46e5': '#3b82f6')
    }

    .is-typed:hover {
        text-shadow: -0.15rem -0.15rem v-bind(isDark ? 'white': 'black')
    }

}


@media only screen and (min-width: 1201px) {
    .text-shadow:hover {
        text-shadow: -0.2rem -0.2rem v-bind(isDark ? '#4f46e5': '#3b82f6')
    }

    .is-typed:hover {
        text-shadow: -0.2rem -0.2rem v-bind(isDark ? 'white': 'black')
    }

}
</style>
