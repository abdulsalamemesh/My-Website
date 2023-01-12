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
    ' am a Software Developer.',
    ' build things for the web.',
    ' enjoy solving problems.',
    ' love to work in team.',
];
const deTitles = [
    ' bin Software Entwickler.',
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
                        <img src="/me.png" class="rounded-full h-52 w-52 lg:h-72 lg:w-72 object-cover" alt="">
                    </div>
                    <div>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full -mb-2">&lt;h2></p>
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
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;div></p>
                        <div class="flex ml-2 mb-2 space-x-2">
                            <div class="group flex">
                                <a href="https://github.com/abdulsalamemesh"
                                   class=" border-2 dark:border-slate-600 dark:group-hover:border-indigo-600 group-hover:border-blue-500 rounded-full p-1" target="_blank">
                                    <svg class="h-6 w-6 fill-black dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="2500" height="2432" viewBox="0 0 256 249"
                                         preserveAspectRatio="xMinYMin meet">
                                        <g>
                                            <path
                                                d="M127.505 0C57.095 0 0 57.085 0 127.505c0 56.336 36.534 104.13 87.196 120.99 6.372 1.18 8.712-2.766 8.712-6.134 0-3.04-.119-13.085-.173-23.739-35.473 7.713-42.958-15.044-42.958-15.044-5.8-14.738-14.157-18.656-14.157-18.656-11.568-7.914.872-7.752.872-7.752 12.804.9 19.546 13.14 19.546 13.14 11.372 19.493 29.828 13.857 37.104 10.6 1.144-8.242 4.449-13.866 8.095-17.05-28.32-3.225-58.092-14.158-58.092-63.014 0-13.92 4.981-25.295 13.138-34.224-1.324-3.212-5.688-16.18 1.235-33.743 0 0 10.707-3.427 35.073 13.07 10.17-2.826 21.078-4.242 31.914-4.29 10.836.048 21.752 1.464 31.942 4.29 24.337-16.497 35.029-13.07 35.029-13.07 6.94 17.563 2.574 30.531 1.25 33.743 8.175 8.929 13.122 20.303 13.122 34.224 0 48.972-29.828 59.756-58.22 62.912 4.573 3.957 8.648 11.717 8.648 23.612 0 17.06-.148 30.791-.148 34.991 0 3.393 2.295 7.369 8.759 6.117 50.634-16.879 87.122-64.656 87.122-120.973C255.009 57.085 197.922 0 127.505 0"/>
                                            <path
                                                d="M47.755 181.634c-.28.633-1.278.823-2.185.389-.925-.416-1.445-1.28-1.145-1.916.275-.652 1.273-.834 2.196-.396.927.415 1.455 1.287 1.134 1.923M54.027 187.23c-.608.564-1.797.302-2.604-.589-.834-.889-.99-2.077-.373-2.65.627-.563 1.78-.3 2.616.59.834.899.996 2.08.36 2.65M58.33 194.39c-.782.543-2.06.034-2.849-1.1-.781-1.133-.781-2.493.017-3.038.792-.545 2.05-.055 2.85 1.07.78 1.153.78 2.513-.019 3.069M65.606 202.683c-.699.77-2.187.564-3.277-.488-1.114-1.028-1.425-2.487-.724-3.258.707-.772 2.204-.555 3.302.488 1.107 1.026 1.445 2.496.7 3.258M75.01 205.483c-.307.998-1.741 1.452-3.185 1.028-1.442-.437-2.386-1.607-2.095-2.616.3-1.005 1.74-1.478 3.195-1.024 1.44.435 2.386 1.596 2.086 2.612M85.714 206.67c.036 1.052-1.189 1.924-2.705 1.943-1.525.033-2.758-.818-2.774-1.852 0-1.062 1.197-1.926 2.721-1.951 1.516-.03 2.758.815 2.758 1.86M96.228 206.267c.182 1.026-.872 2.08-2.377 2.36-1.48.27-2.85-.363-3.039-1.38-.184-1.052.89-2.105 2.367-2.378 1.508-.262 2.857.355 3.049 1.398"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="group flex">
                                <a href="https://de.linkedin.com/in/abdulsalam-emesh-09778117a"
                                   class=" border-2 dark:border-slate-600 dark:group-hover:border-indigo-600 group-hover:border-blue-500 rounded-full p-1" target="_blank">
                                    <svg class="h-6 w-6 p-0.5 fill-[#0077b5]" xmlns="http://www.w3.org/2000/svg" width="2500" height="2389" viewBox="0 5 1036 990">
                                        <path
                                            d="M0 120c0-33.334 11.667-60.834 35-82.5C58.333 15.833 88.667 5 126 5c36.667 0 66.333 10.666 89 32 23.333 22 35 50.666 35 86 0 32-11.333 58.666-34 80-23.333 22-54 33-92 33h-1c-36.667 0-66.333-11-89-33S0 153.333 0 120zm13 875V327h222v668H13zm345 0h222V622c0-23.334 2.667-41.334 8-54 9.333-22.667 23.5-41.834 42.5-57.5 19-15.667 42.833-23.5 71.5-23.5 74.667 0 112 50.333 112 151v357h222V612c0-98.667-23.333-173.5-70-224.5S857.667 311 781 311c-86 0-153 37-201 111v2h-1l1-2v-95H358c1.333 21.333 2 87.666 2 199 0 111.333-.667 267.666-2 469z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="group flex">
                                <a href="https://www.xing.com/profile/Abdulsalam_Emesh"
                                   class=" border-2 dark:border-slate-600 dark:group-hover:border-indigo-600 group-hover:border-blue-500 rounded-full p-1" target="_blank">
                                    <svg class="h-6 w-6 p-0.5" xmlns="http://www.w3.org/2000/svg" width="2128" height="2500" viewBox="426.896 102.499 170.207 200">
                                        <path
                                            d="M442.394 142c-1.736 0-3.197.61-3.934 1.803-.76 1.231-.645 2.818.166 4.424l19.503 33.761c.033.064.033.105 0 .164l-30.648 54.084c-.799 1.592-.76 3.191 0 4.425.736 1.187 2.033 1.966 3.771 1.966h28.844c4.312 0 6.393-2.91 7.867-5.57 0 0 29.973-53.01 31.14-55.068-.118-.19-19.83-34.58-19.83-34.58-1.439-2.557-3.606-5.41-8.03-5.41h-28.849z"
                                            fill="#005a5f"/>
                                        <path
                                            d="M563.574 102.501c-4.309 0-6.176 2.714-7.723 5.494 0 0-62.14 110.2-64.188 113.818.105.196 40.984 75.191 40.984 75.191 1.432 2.558 3.641 5.494 8.06 5.494h28.81c1.738 0 3.096-.654 3.828-1.843.77-1.23.748-2.857-.059-4.458l-40.664-74.295a.167.167 0 0 1 0-.189l63.863-112.92c.803-1.594.82-3.22.061-4.452-.736-1.188-2.098-1.843-3.836-1.843h-29.139v.002h.003z"
                                            fill="#d4d600"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="group flex">
                                <a href="https://laracasts.com/@Abdulsalam"
                                   class=" border-2 dark:border-slate-600 dark:group-hover:border-indigo-600 group-hover:border-blue-500 rounded-full p-1" target="_blank">
                                    <svg class="h-6 w-6 p-0.5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36px" height="36px"
                                         viewBox="0 0 36 36" version="1.1">
                                        <title>symbol - original</title>
                                        <desc>Created with Sketch.</desc>
                                        <g id="Brand-Doodling" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="symbol---original"
                                               transform="translate(18.405592, 17.405592) rotate(-45.000000) translate(-18.405592, -17.405592) translate(-6.094408, -1.094408)">
                                                <g id="Group-96-Copy-4" transform="translate(15.000000, 0.000000)" fill="#4A4A4A" fill-rule="nonzero">
                                                    <path
                                                        d="M0.652771855,4.48401956 L7.61588486,4.48401956 C9.0501766,4.48401956 10.2128998,5.64674274 10.2128998,7.08103448 L10.2128998,7.08103448 C10.2128998,8.51532622 9.0501766,9.67804941 7.61588486,9.67804941 L0.652771855,9.67804941 C-0.781519883,9.67804941 -1.94424307,8.51532622 -1.94424307,7.08103448 L-1.94424307,7.08103448 C-1.94424307,5.64674274 -0.781519883,4.48401956 0.652771855,4.48401956 Z"
                                                        id="Rectangle-Copy-73" transform="translate(4.134328, 7.081034) rotate(-270.000000) translate(-4.134328, -7.081034) "/>
                                                    <path
                                                        d="M-3.32366493,23.3455138 L11.5923216,23.3455138 C13.0266134,23.3455138 14.1893366,24.508237 14.1893366,25.9425287 L14.1893366,25.9425287 C14.1893366,27.3768205 13.0266134,28.5395437 11.5923216,28.5395437 L-3.32366493,28.5395437 C-4.75795666,28.5395437 -5.92067985,27.3768205 -5.92067985,25.9425287 L-5.92067985,25.9425287 C-5.92067985,24.508237 -4.75795666,23.3455138 -3.32366493,23.3455138 Z"
                                                        id="Rectangle-Copy-74" transform="translate(4.134328, 25.942529) rotate(-270.000000) translate(-4.134328, -25.942529) "/>
                                                    <path
                                                        d="M2.10283241,8.32513323 L31.3798551,8.54792872 C32.8395401,8.5590368 34.0200893,9.73966424 34.0311007,11.19935 L34.0311007,11.19935 C34.0418988,12.6307735 32.8902544,13.7999251 31.4588309,13.8107232 C31.4457393,13.810822 31.4326472,13.8108215 31.4195556,13.8107219 L2.14253293,13.5879264 C0.682847917,13.5768183 -0.497701276,12.3961909 -0.508712595,10.9365051 L-0.508712595,10.9365051 C-0.519510713,9.50508166 0.632133688,8.33593005 2.06355717,8.32513193 C2.07664873,8.32503317 2.08974085,8.3250336 2.10283241,8.32513323 Z"
                                                        id="Rectangle-Copy-77" transform="translate(16.761194, 11.067928) rotate(-330.000000) translate(-16.761194, -11.067928) "/>
                                                    <path
                                                        d="M2.14253293,23.4329862 L31.4195556,23.2101907 C32.8509784,23.1992977 34.0202064,24.3508646 34.0310994,25.7822874 C34.031199,25.7953789 34.0311994,25.808471 34.0311007,25.8215626 L34.0311007,25.8215626 C34.0200893,27.2812484 32.8395401,28.4618758 31.3798551,28.4729839 L2.10283241,28.6957794 C0.671409647,28.7066724 -0.497818295,27.5551055 -0.508711293,26.1236827 C-0.508810919,26.1105911 -0.508811352,26.097499 -0.508712595,26.0844075 L-0.508712595,26.0844075 C-0.497701276,24.6247217 0.682847917,23.4440943 2.14253293,23.4329862 Z"
                                                        id="Rectangle-Copy-78" transform="translate(16.761194, 25.952985) rotate(-30.000000) translate(-16.761194, -25.952985) "/>
                                                </g>
                                                <path
                                                    d="M11.8965885,15.8875205 L26.3720682,15.8875205 C27.8316779,15.8875205 29.0149254,17.070768 29.0149254,18.5303777 L29.0149254,18.5303777 C29.0149254,19.9899874 27.8316779,21.1732348 26.3720682,21.1732348 L11.8965885,21.1732348 C10.4369788,21.1732348 9.25373134,19.9899874 9.25373134,18.5303777 L9.25373134,18.5303777 C9.25373134,17.070768 10.4369788,15.8875205 11.8965885,15.8875205 Z"
                                                    id="Rectangle-Copy-75" fill="#53B5FF"
                                                    transform="translate(19.134328, 18.530378) rotate(-180.000000) translate(-19.134328, -18.530378) "/>
                                                <path
                                                    d="M2.64285714,15.8875205 L4.81982942,15.8875205 C6.27943912,15.8875205 7.46268657,17.070768 7.46268657,18.5303777 L7.46268657,18.5303777 C7.46268657,19.9899874 6.27943912,21.1732348 4.81982942,21.1732348 L2.64285714,21.1732348 C1.18324745,21.1732348 1.03651537e-13,19.9899874 1.03472786e-13,18.5303777 L1.03472786e-13,18.5303777 C1.03294035e-13,17.070768 1.18324745,15.8875205 2.64285714,15.8875205 Z"
                                                    id="Rectangle-Copy-76" fill="#53B5FF"
                                                    transform="translate(3.731343, 18.530378) rotate(-180.000000) translate(-3.731343, -18.530378) "/>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="group flex">
                                <a href="https://twitter.com/abdulsalamemesh"
                                   class=" border-2 dark:border-slate-600 dark:group-hover:border-indigo-600 group-hover:border-blue-500 rounded-full p-1" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-6 w-6 p-0.5 fill-[#1DA1F2]">
                                        <path
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full">&lt;/div></p>
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
                    <p class="md:text-lg text-slate-400 dark:text-slate-600 font-aurore w-full -mb-2">&lt;a download> &lt;!-- {{ __('My Resume') }} --></p>
                    <a href="/Abdulsalam_Emesh_Lebenslauf_2023_DE.pdf"
                       class="inline-block border-r border-white py-2 px-4 my-2 rounded-l text-sm font-medium text-white bg-blue-500 dark:bg-indigo-600 hover:bg-blue-600 hover:dark:bg-indigo-700 focus:bg-blue-400 focus:dark:bg-indigo-800 focus:ring focus:dark:ring focus:ring-slate-400 focus:dark:ring-white"
                       target="_blank"
                    >
                        {{ __('German') }}
                    </a>
                    <a href="/Abdulsalam_Emesh_Resume_2023_EN.pdf"
                       class="inline-block py-2 px-4 my-2 rounded-r text-sm font-medium text-white bg-blue-500 dark:bg-indigo-600 hover:bg-blue-600 hover:dark:bg-indigo-700 focus:bg-blue-400 focus:dark:bg-indigo-800 focus:ring focus:dark:ring focus:ring-slate-400 focus:dark:ring-white"
                       target="_blank"
                    >
                        {{ __('English') }}
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
                <p class="text-blue-500 dark:text-indigo-600 font-medium">{{ __('Projects & Packages') }}</p>
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
                        {{ __('Projects & Packages') }}
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
                                <div class="flex space-x-2 items-start justify-between">
                                    <h2 class="text-xl">
                                        {{ __('Dipos online shop') }}
                                    </h2>
                                    <div class="text-xs px-2 py-1 text-white dark:bg-indigo-600 bg-blue-500 font-medium rounded">
                                        <span class="uppercase tracking-wider">{{ __('Project') }}</span>
                                    </div>
                                </div>
                                <p class="mt-2">{{
                                        __('A custom-made multilingual online Shop where you can shop for your next screen protection foils for any device. The system has an admin area where the admin can upload weekly an over 500 MB CSV file with the new products and export the new orders.')
                                    }}</p>
                            </div>
                            <div class="border-t border-slate-400 pt-2">
                                <p class="text-xs">#{{ __('Teamwork') }} #{{ __('API') }} #{{ __('Export') }} #{{ __('Import') }} #{{ __('Orders') }}</p>
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
                                <div class="flex space-x-2 items-start justify-between">
                                    <h2 class="text-xl">
                                        {{ __('Apprentices management system') }}
                                    </h2>
                                    <div class="text-xs px-2 py-1 text-white dark:bg-indigo-600 bg-blue-500 font-medium rounded">
                                        <span class="uppercase tracking-wider">{{ __('Project') }}</span>
                                    </div>
                                </div>
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
                                <div class="flex space-x-2 items-start justify-between">
                                    <h2 class="text-xl">
                                        Cloud LASE
                                    </h2>
                                    <div class="text-xs px-2 py-1 text-white dark:bg-indigo-600 bg-blue-500 font-medium rounded">
                                        <span class="uppercase tracking-wider">{{ __('Project') }}</span>
                                    </div>
                                </div>
                                <p class="mt-2">{{
                                        __('A Laravel multi tenancy cloud based platform with supervision area, where the Clients can connect their own Laser counting devices in an automated process. The platform is also responsible for the aggregation of the data and generating statistic.')
                                    }}</p>
                            </div>
                            <div class="border-t border-slate-400 pt-2">
                                <p class="text-xs">#{{ __('Teamwork') }} #{{ __('API') }} #{{ __('Data-aggregation') }} #{{ __('Multi-Tenancy') }} #{{ __('Statistics') }}
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
                                <div class="flex space-x-2 items-start justify-between">
                                    <h2 class="text-xl">
                                        {{ __('My portfolio') }}
                                    </h2>
                                    <div class="text-xs px-2 py-1 text-white dark:bg-indigo-600 bg-blue-500 font-medium rounded">
                                        <span class="uppercase tracking-wider">{{ __('Project') }}</span>
                                    </div>
                                </div>
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
                                <div class="flex space-x-2 items-start justify-between">
                                    <h2 class="text-xl">
                                        What to do API
                                    </h2>
                                    <div class="text-xs px-2 py-1 text-white dark:bg-indigo-600 bg-blue-500 font-medium rounded">
                                        <span class="uppercase tracking-wider">{{ __('Project') }}</span>
                                    </div>
                                </div>

                                <p class="mt-2"> {{
                                        __('A small API that gives you random tasks when you don\'t know what to do. The website uses DeepL.com API interface to translate the tasks into different languages. It has a user interface to add new tasks.')
                                    }}</p>
                            </div>
                            <div class="border-t border-slate-400 pt-2">
                                <p class="text-xs">#{{ __('Individual-work') }} #{{ __('API') }}</p>
                                <a href="https://what-to-do-api.com" target="_blank"
                                   class="block text-sm md:text-base text-blue-500 hover:text-blue-600 dark:text-indigo-600 dark:hover:text-indigo-700 transition duration-150">
                                    what-to-do-api.com
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 w-full lg:w-1/2 xl:w-1/3 flex">
                        <div
                            class="grow p-4 flex flex-col justify-between rounded dark:text-slate-300 font-medium space-y-3 bg-slate-200 dark:bg-slate-800 border border-slate-400 dark:border-slate-600">
                            <div>
                                <div class="flex space-x-2 items-start justify-between">
                                    <h2 class="text-xl">
                                        What to do API client
                                    </h2>
                                    <div class="text-xs px-2 py-1 text-white bg-green-500 font-medium rounded">
                                        <span class="uppercase tracking-wider">{{ __('Package') }}</span>
                                    </div>
                                </div>
                                <p class="mt-2"> {{
                                        __('A Laravel client package for the website what-to-do-api.com. The package make it easy to communicate with the API and create new tasks')
                                    }}</p>
                            </div>
                            <div class="border-t border-slate-400 pt-2">
                                <p class="text-xs">#{{ __('Individual-work') }} #{{ __('API') }} #{{ __('Package-development') }}</p>
                                <a href="https://github.com/abdulsalamemesh/what-to-do-api-client" target="_blank"
                                   class="block text-sm md:text-base text-blue-500 hover:text-blue-600 dark:text-indigo-600 dark:hover:text-indigo-700 transition duration-150">
                                    github.com
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
                            <a href="javascript:linkTo_UnCryptMailto('nbjmup;dpoubduAbcevmtbmbn.fnfti/nf');" class="block text-sm md:text-base">
                                {{ __('Email') }}: <span
                                class="hover:text-blue-500 dark:hover:text-indigo-600 transition duration-150 encrypt-email">em.hseme-malasludba@tcatnoc</span>
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
