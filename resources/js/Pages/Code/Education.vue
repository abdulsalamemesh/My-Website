<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onMounted} from "vue";
import {syncScroll} from "../../store";

defineProps({
    educations: Object
})
onMounted(() => {
    syncScroll()
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
                <p class="text-[#a9b1b3]">{{ __('Education') }}</p>
                <p class="text-[#dfc087]">&lt;/h1&gt;</p>
            </div>
            <div :class="paddingLevel(1)" class="flex flex-wrap">
                <p class="text-[#dfc087]">&lt;div</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="space-y-4 divide-y divide-gray-300"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <template v-for="(education,educationKey) in educations">
                <div v-if="educationKey !== 0">&nbsp;</div>
                <div :class="paddingLevel(2)" class="flex flex-wrap">
                    <p class="text-[#dfc087]">&lt;div</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="space-y-2"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                </div>
                <div class="flex flex-wrap" v-if="education.title" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;p</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-bold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ education.title }}</p>
                    <p class="text-[#dfc087]">&lt;/p&gt;</p>
                </div>
                <div class="flex flex-wrap" v-if="education.ort" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;address</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-bold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ education.ort }}</p>
                    <p class="text-[#dfc087]">&lt;/address&gt;</p>
                </div>
                <div class="flex flex-wrap" v-if="education.date" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;p</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ education.date }}</p>
                    <p class="text-[#dfc087]">&lt;/p&gt;</p>
                </div>
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
