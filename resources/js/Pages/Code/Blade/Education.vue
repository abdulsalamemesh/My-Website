<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

defineProps({
    educations: Object
})
onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(50, 35)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Education">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-code-gold">&lt;x-layout</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;h1</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="font-bold text-lg text-indigo-500 uppercase"</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('Education') }}</p>
                <p class="text-code-gold">&lt;/h1&gt;</p>
            </div>
            <div :class="paddingLevel(1)" class="flex flex-wrap">
                <p class="text-code-gold">&lt;div</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="space-y-4 divide-y divide-gray-300"</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <template v-for="(education,educationKey) in educations">
                <div v-if="educationKey !== 0">&nbsp;</div>
                <div :class="paddingLevel(2)" class="flex flex-wrap">
                    <p class="text-code-gold">&lt;div</p>
                    <p class="text-code-white">&nbsp;class</p>
                    <p class="text-code-class">="space-y-2"</p>
                    <p class="text-code-gold">&gt;</p>
                </div>
                <div class="flex flex-wrap" v-if="education.title" :class="paddingLevel(3)">
                    <p class="text-code-gold">&lt;p</p>
                    <p class="text-code-white">&nbsp;class</p>
                    <p class="text-code-class">="font-bold"</p>
                    <p class="text-code-gold">&gt;</p>
                    <p class="text-code-white">{{ education.title }}</p>
                    <p class="text-code-gold">&lt;/p&gt;</p>
                </div>
                <div class="flex flex-wrap" v-if="education.ort" :class="paddingLevel(3)">
                    <p class="text-code-gold">&lt;address</p>
                    <p class="text-code-white">&nbsp;class</p>
                    <p class="text-code-class">="font-bold"</p>
                    <p class="text-code-gold">&gt;</p>
                    <p class="text-code-white">{{ education.ort }}</p>
                    <p class="text-code-gold">&lt;/address&gt;</p>
                </div>
                <div class="flex flex-wrap" v-if="education.date" :class="paddingLevel(3)">
                    <p class="text-code-gold">&lt;p</p>
                    <p class="text-code-gold">&gt;</p>
                    <p class="text-code-white">{{ education.date }}</p>
                    <p class="text-code-gold">&lt;/p&gt;</p>
                </div>
             <div class="flex flex-wrap" :class="paddingLevel(2)">
                    <p class="text-code-gold">&lt;/div&gt;</p>
                </div>
            </template>
            <p class="text-code-gold" :class="paddingLevel(1)">&lt;/div&gt;</p>

            <div class="flex flex-wrap">
                <p class="text-code-gold">&lt;/x-layout</p>
                <p class="text-code-gold">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
