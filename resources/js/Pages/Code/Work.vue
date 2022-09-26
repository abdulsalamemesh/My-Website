<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {ref, onMounted} from "vue";

let count = ref([])

defineProps({
    experiences: Object
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

        <div class="pl-1 pt-1 grow space-y-0.5 overflow-y-scroll custom-scrollbar scroll-js pb-5" id="count">
            <div class="flex">
                <p class="text-[#dfc087]">&lt;x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;h1</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-bold text-lg text-indigo-500 uppercase"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('Work experience') }}</p>
                <p class="text-[#dfc087]">&lt;/h1&gt;</p>
            </div>
            <div :class="paddingLevel(1)" class="flex">
                <p class="text-[#dfc087]">&lt;div</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="space-y-4 divide-y divide-gray-300"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <template v-for="(experience,experienceKey) in experiences">
                <div v-if="experienceKey !== 0">&nbsp;</div>
                <div :class="paddingLevel(2)" class="flex">
                    <p class="text-[#dfc087]">&lt;div</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="space-y-2"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                </div>
                <div class="flex" v-if="experience.title" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;p</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-bold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ experience.title }}</p>
                    <p class="text-[#dfc087]">&lt;/p&gt;</p>
                </div>
                <div class="flex" v-if="experience.workplace" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;address</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-bold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ experience.workplace }}</p>
                    <p class="text-[#dfc087]">&lt;/address&gt;</p>
                </div>
                <div class="flex" v-if="experience.date" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;p</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ experience.date }}</p>
                    <p class="text-[#dfc087]">&lt;/p&gt;</p>
                </div>
                <div class="flex" v-if="experience.text.length > 0" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;p</p>
                    <p class="text-[#dfc087]">&gt;</p>
                </div>
                <template v-for="(point,key) in experience.text" v-if="experience.text.length > 0">
                    <div class="flex" :class="paddingLevel(4)">
                        <p class="text-[#a9b1b3]">{{ point }}</p>
                        <p class="text-[#dfc087]" v-if="key != Object.keys(experience.text).length - 1">&lt;/br&gt;</p>
                    </div>
                </template>
                <div class="flex" v-if="experience.text.length > 0" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;/p&gt;</p>
                </div>
                <div v-if="experience.pointBullets.length > 0" class="flex" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;ul&gt;</p>
                </div>
                <template v-for="point in experience.pointBullets" v-if="experience.pointBullets.length > 0">
                    <div class="flex" :class="paddingLevel(4)">
                        <p class="text-[#dfc087]">&lt;li</p>
                        <p class="text-[#dfc087]">&gt;</p>
                        <p class="text-[#a9b1b3]">{{ point }}</p>
                        <p class="text-[#dfc087]">&lt;/li&gt;</p>
                    </div>
                </template>
                <div v-if="experience.pointBullets.length > 0" class="flex" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;/ul&gt;</p>
                </div>
                <div class="flex" :class="paddingLevel(2)">
                    <p class="text-[#dfc087]">&lt;/div&gt;</p>
                </div>
            </template>
            <p class="text-[#dfc087]" :class="paddingLevel(1)">&lt;/div&gt;</p>

            <div class="flex">
                <p class="text-[#dfc087]">&lt;/x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
