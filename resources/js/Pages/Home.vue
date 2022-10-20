<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import VueWriter from 'vue-writer'
import ScrollArrow from "@/Components/ScrollArrow.vue";
import {computed} from "vue";
import {usePage} from "@inertiajs/inertia-vue3";

const selectableLocale = computed(() => {
    return usePage().props.value.locale
})

const enTitles = [
    'I build things for the web.',
];
const deTitles = [
    'Ich liebe es, mit anderen Programmierern zusammenzuarbeiten.',
];
</script>

<template>
    <AppLayout>
        <div class="h-[calc(100vh-5rem)] md:h-screen flex flex-col justify-center bg-slate-100 dark:bg-black" id="home">
            <div class="w-full h-full flex flex-col justify-between items-center px-6 md:px-8">
                <div class="grow flex flex-col items-center md:items-start justify-center w-full sm:max-w-3xl">
                    <div class="md:space-y-3 sm:max-w-sm md:max-w-none md:w-full">
                        <!--                        <div class="md:text-lg dark:text-yellow-500 font-light font-[Kalam]">&#x201C;&lt;div>&#x201E;</div>-->
                        <p class="text-3xl md:text-5xl lg:text-6xl dark:text-white font-semibold">{{ __('Hi') }} <span class="wave">&#128075;</span>, </p>
                        <p class="ml-6 md:ml-12 text-xl md:text-2xl lg:text-3xl dark:text-white font-semibold">{{ __('My name is') }}</p>
                        <p class="text-3xl md:text-5xl lg:text-6xl dark:text-white font-semibold">Abdulsalam Emesh</p>
                        <!--                        <p class="ml-12 v dark:text-yellow-400 font-light font-[Kalam] my-2">&#x201C;&lt;br>&#x201E;</p>-->
                        <VueWriter :array="selectableLocale === 'en'? enTitles : deTitles" :start="2000" :eraseSpeed="25" :typeSpeed="100"/>
                        <!--                        <div class="md:text-lg dark:text-yellow-500 font-light font-[Kalam]">&#x201C;&lt;/div>&#x201E;</div>-->
                    </div>
                </div>
                <div class="p-6 md:px-12 md:pb-12 md:pt-0  w-full flex justify-center md:justify-end">
                    <ScrollArrow/>
                </div>
            </div>
        </div>
        <div class="mx-6 md:mx-12 bg-slate-100 dark:bg-black">
            <div class="border-b-2 border-gray-300 dark:border-white"></div>
        </div>
        <div class="h-screen flex flex-col justify-center bg-slate-100 dark:bg-black" id="about-me">
            <div class="max-w-7xl mx-auto grow flex justify-center items-center md:space-x-4 px-6 md:px-12">

                <div class="min-w-max rounded-full p-2 bg-gradient-to-b from-hot-300 to-hot-500 dark:from-indigo-300 dark:to-indigo-600">
                    <img src="/me.jpeg" class="rounded-full h-64 w-64 object-cover" alt="">
                </div>
                <div>
                    <p class="text-xl md:text-2xl lg:text-3xl dark:text-white font-semibold">
                        I have been on this earth for about 30 years and started my journey in Aleppo, Syria.
                    </p>
                    <p class="text-xl md:text-2xl lg:text-3xl dark:text-white font-semibold">
                        Right now I live in second home Xanten, Germany
                    </p>
                    <p class="text-xl md:text-2xl lg:text-3xl dark:text-white font-semibold">
                        Right now I live in second home Xanten, Germany
                    </p>
                    <p class="text-xl md:text-2xl lg:text-3xl dark:text-white font-semibold">
                        Right now I live in second home Xanten, Germany
                    </p>
                    <p class="text-xl md:text-2xl lg:text-3xl dark:text-white font-semibold">
                        Right now I live in second home Xanten, Germany
                    </p>
                    <p class="text-xl md:text-2xl lg:text-3xl dark:text-white font-semibold">
                        Right now I live in second home Xanten, Germany
                    </p>
                    <p class="text-xl md:text-2xl lg:text-3xl dark:text-white font-semibold">
                        Right now I live in second home Xanten, Germany
                    </p>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style lang="postcss">
.is-typed {
    font-family: 'montserrat', sans-serif !important;
    @apply text-2xl md:text-5xl lg:text-6xl font-bold text-hot-500 dark:text-indigo-600 ml-6 md:ml-12 break-words;
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
