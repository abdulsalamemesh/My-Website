<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {ref, onMounted} from "vue";

let count = ref([])

defineProps({
    educations: Object
})

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
                <p class="text-[#a9b1b3]">{{ __('Education') }}</p>
                <p class="text-[#dfc087]">&lt;/h1&gt;</p>
            </div>
            <div :class="paddingLevel(1)" class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#dfc087]">&lt;div</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="space-y-4 divide-y divide-gray-300"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <template v-for="(education,educationKey) in educations">
                <div v-if="educationKey !== 0">&nbsp;</div>
                <div :class="paddingLevel(2)" class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                    <p class="text-[#dfc087]">&lt;div</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="space-y-2"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                </div>
                <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" v-if="education.title" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;p</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-bold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ education.title }}</p>
                    <p class="text-[#dfc087]">&lt;/p&gt;</p>
                </div>
                <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" v-if="education.ort" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;address</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-bold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ education.ort }}</p>
                    <p class="text-[#dfc087]">&lt;/address&gt;</p>
                </div>
                <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" v-if="education.date" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;p</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ education.date }}</p>
                    <p class="text-[#dfc087]">&lt;/p&gt;</p>
                </div>
             <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                    <p class="text-[#dfc087]">&lt;/div&gt;</p>
                </div>
            </template>
            <p class="text-[#dfc087]" :class="paddingLevel(1)">&lt;/div&gt;</p>

            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#dfc087]">&lt;/x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
