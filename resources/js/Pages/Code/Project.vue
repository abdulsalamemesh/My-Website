<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../store";

defineProps({
    projects: Object
})
onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(100, 70)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-[#dfc087]">&lt;x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;h1</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-bold text-lg text-indigo-500 uppercase"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('Projects') }}</p>
                <p class="text-[#dfc087]">&lt;/h1&gt;</p>
            </div>
            <div :class="paddingLevel(1)" class="flex flex-wrap">
                <p class="text-[#dfc087]">&lt;div</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="space-y-4 divide-y divide-gray-300"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <template v-for="(project,projectKey) in projects">
                <div v-if="projectKey !== 0">&nbsp;</div>
                <div :class="paddingLevel(2)" class="flex flex-wrap">
                    <p class="text-[#dfc087]">&lt;div</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="space-y-2"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                </div>
                <div class="flex flex-wrap" v-if="project.title" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;h2</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-bold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ project.title }}</p>
                    <p class="text-[#dfc087]">&lt;/h2&gt;</p>
                </div>
                <div class="flex flex-col" v-if="project.text" :class="paddingLevel(3)">
                    <div class="flex flex-wrap">
                        <p class="text-[#dfc087]">&lt;h3</p>
                        <p class="text-[#a9b1b3]">&nbsp;class</p>
                        <p class="text-[#a7bb7c]">="font-bold"</p>
                        <p class="text-[#dfc087]">&gt;</p>
                    </div>

                    <p class="text-[#a9b1b3] max-w-2xl">{{ project.text }}</p>
                    <p class="text-[#dfc087]">&lt;/h3&gt;</p>
                </div>
                <div class="flex flex-wrap" v-if="project.hashtags" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;p</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ project.hashtags }}</p>
                    <p class="text-[#dfc087]">&lt;/p&gt;</p>
                </div>
                <a :href="'https://'+ project.link " target="_blank" class="flex flex-wrap" v-if="project.link" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;a</p>
                    <p class="text-[#a9b1b3]">&nbsp;href</p>
                    <p class="text-[#a7bb7c]">="https://{{ project.link }}"</p>
                    <p class="text-[#a9b1b3]">&nbsp;target</p>
                    <p class="text-[#a7bb7c]">="_blank"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ project.link }}</p>

                    <p class="text-[#dfc087]">&lt;/a&gt;</p>
                </a>
             <div class="flex flex-wrap" :class="paddingLevel(2)">
                    <p class="text-[#dfc087]">&lt;/div&gt;</p>
                </div>
            </template>
            <p class="text-[#dfc087]" :class="paddingLevel(1)">&lt;/div&gt;</p>

            <div class="flex flex-wrap">
                <p class="text-[#dfc087]">&lt;/x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
