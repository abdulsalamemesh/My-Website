<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {ref, onMounted} from "vue";

let count = ref([])

defineProps({
    skills: Object
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

        <div class="pl-1 pt-1 grow space-y-0.5 overflow-y-scroll custom-scrollbar scroll-js pb-24" id="count">
            <div class="flex">
                <p class="text-[#dfc087]">&lt;x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;h1</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-bold text-lg text-indigo-500 uppercase"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('Skills') }}</p>
                <p class="text-[#dfc087]">&lt;/h1&gt;</p>
            </div>
            <div :class="paddingLevel(1)" v-if="skills.length >0" class="flex">
                <p class="text-[#dfc087]">&lt;ul</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="list-disc space-y-1 my-2"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <template v-for="skill in skills">
                <div class="flex" :class="paddingLevel(2)">
                    <p class="text-[#dfc087]">&lt;li</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-semibold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ skill }}</p>
                    <p class="text-[#dfc087]">&lt;/li&gt;</p>
                </div>
            </template>
            <div class="flex" :class="paddingLevel(1)" v-if="skills.length >0">
                <p class="text-[#dfc087]">&lt;/ul&gt;</p>
            </div>

            <div class="flex">
                <p class="text-[#dfc087]">&lt;/x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
