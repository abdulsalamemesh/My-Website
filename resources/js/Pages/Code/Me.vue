<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {ref, onMounted} from "vue";
import {selectableLocale} from '../../store.js'

let count = ref([])

onMounted(() => {
    count.value = Array.from(Array(document.getElementById('count')?.childElementCount + 1).keys());
    const elems = document.getElementsByClassName("scroll-js");

    function foo() {
        let top = this.scrollTop;

        for (let i = 0; i < elems.length; i++) {
            elems[i].scrollTop = top;
        }
    }

    for (let i = 0; i < elems.length; i++) {
        elems[i].addEventListener("scroll", foo);
    }
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <template #header>
            <template v-for="(number, key) in count">
                <div class="text-[#5f6364]" v-if="key !== 0">{{ number }}</div>
            </template>
        </template>

        <div class="pl-1 pt-1 grow space-y-0.5 overflow-y-scroll custom-scrollbar scroll-js pb-2" id="count">
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#dfc087]">&lt;x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;h1</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-bold text-lg text-indigo-500 uppercase"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">Abdulsalam Emesh</p>
                <p class="text-[#dfc087]">&lt;/h1&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;h2</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-bold text-base text-gray-700 uppercase"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('Software Developer') }}</p>
                <p class="text-[#dfc087]">&lt;/h2&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;p&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]" v-if="selectableLocale === 'en'">
                    I have been on this earth for about {{ new Date().getFullYear() - 1992 }} years and started my journey in Aleppo, Syria.
                </p>
                <p class="text-[#a9b1b3]" v-else>
                    Ich bin seit etwa {{ new Date().getFullYear() - 1992 }} Jahren auf dieser Erde und habe meine Reise in Aleppo, Syrien, begonnen.
                </p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]" v-if="selectableLocale === 'en'">
                    I have been living in my second home Xanten, Germany for {{ new Date().getFullYear() - 2016  }} years now.
                </p>
                <p class="text-[#a9b1b3]" v-else>
                    Seit {{ new Date().getFullYear() - 2016 }} Jahren lebe ich in meiner zweiten Heimat Xanten, Deutschland.
                </p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]" v-if="selectableLocale === 'en'">
                    I am one of the lucky ones who turned their hobby and passion into a profession.
                </p>
                <p class="text-[#a9b1b3]" v-else>
                    Ich bin einer der Glücklichen, die ihr Hobby und ihre Leidenschaft zum Beruf gemacht haben.
                </p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]" v-if="selectableLocale === 'en'">
                    I love structure and order and I also stand for quality.
                </p>
                <p class="text-[#a9b1b3]" v-else>
                    Ich liebe Struktur und Ordnung und stehe auch für Qualität.
                </p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]" v-if="selectableLocale === 'en'">
                    I also like to work in a team, where I learn a lot and quickly.
                </p>
                <p class="text-[#a9b1b3]" v-else>
                    Außerdem arbeite ich gerne im Team, wo ich viel und schnell lerne.
                </p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]" v-if="selectableLocale === 'en'">
                    As the german saying goes: "Alone you are strong, together unbeatable".
                </p>
                <p class="text-[#a9b1b3]" v-else>
                    Wie das Sprichwort schon sagt: "Alleine bist du stark, gemeinsam unschlagbar".
                </p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>

            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;/p&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#dfc087]">&lt;/x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
