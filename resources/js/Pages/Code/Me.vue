<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {ref, onMounted} from "vue";

let count = ref(  [])

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
                <template  v-for="(number, key) in count">
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
                <p class="text-[#a9b1b3]">Abdulsalam Emesh</p>
                <p class="text-[#dfc087]">&lt;/h1&gt;</p>
            </div>
            <div class="flex" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;h2</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-bold text-base text-gray-700 uppercase"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('Software Developer') }}</p>
                <p class="text-[#dfc087]">&lt;/h2&gt;</p>
            </div>
            <div class="flex" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;p&gt;</p>
            </div>
            <div class="flex" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">
                    {{ __('My name is Abdulsalam Emesh.') }}
                </p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">
                    {{ __('I am a software developer from Aleppo, Syria and I have been living in Germany, Xanten for 6 years.') }}
                </p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">
                    {{ __('I am one of the lucky ones who have turned their hobby into a profession.') }}
                </p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">
                    {{ __('I love structure and order and I also stand for quality.') }}
                </p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">
                    {{ __('I also enjoy working in a team where I learn a lot and quickly') }}
                </p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">
                    {{ __('As the saying goes, „Alone you are strong, together you are unbeatable.“') }}
                </p>
            </div>
            <div class="flex" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;/p&gt;</p>
            </div>
            <div class="flex">
                <p class="text-[#dfc087]">&lt;/x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
