<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {ref, onMounted} from "vue";

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

        <div class="pl-1 pt-1 grow space-y-0.5 overflow-y-scroll custom-scrollbar scroll-js pb-5" id="count">
            <div class="flex">
                <p class="text-[#dfc087]">&lt;x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;h1</p>
                <p class="text-[#a9b1b3]">&nbsp;class </p>
                <p class="text-[#a7bb7c]">"font-bold text-lg text-indigo-500 uppercase"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('Work experience') }}</p>
                <p class="text-[#dfc087]">&lt;/h1&gt;</p>
            </div>


            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;div</p>
                <p class="text-[#a9b1b3]">&nbsp;class </p>
                <p class="text-[#a7bb7c]">"space-y-2 my-2"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;p</p>
                <p class="text-[#a9b1b3]">&nbsp;class </p>
                <p class="text-[#a7bb7c]">"font-bold"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('Software Developer') }}</p>
                <p class="text-[#dfc087]">&lt;/p&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;p</p>
                <p class="text-[#a9b1b3]">&nbsp;class </p>
                <p class="text-[#a7bb7c]">"font-bold"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">LASE PeCo Systemtechnik GmbH</p>
                <p class="text-[#dfc087]">&lt;/p&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;p</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('From 2021-09-01 until today') }}</p>
                <p class="text-[#dfc087]">&lt;/p&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;p</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#a9b1b3]">{{ __('In addition to my education, I have been freelancing in the field of website development and online hosting,') }}</p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#a9b1b3]">{{ __('for a couple of restaurants in Wesel.') }}</p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#a9b1b3]">{{ __('I also created a program for ordering and storage, with the employees.') }}</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;/p&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;/div&gt;</p>
            </div>


            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;div</p>
                <p class="text-[#a9b1b3]">&nbsp;class </p>
                <p class="text-[#a7bb7c]">"space-y-2 my-2"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;p</p>
                <p class="text-[#a9b1b3]">&nbsp;class </p>
                <p class="text-[#a7bb7c]">"font-bold"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('Freelancer') }}</p>
                <p class="text-[#dfc087]">&lt;/p&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;p</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('From 2019 until today') }}</p>
                <p class="text-[#dfc087]">&lt;/p&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;p</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#a9b1b3]">{{ __('In addition to my education, I have been freelancing in the field of website development and online hosting,') }}</p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#a9b1b3]">{{ __('for a couple of restaurants in Wesel.') }}</p>
                <p class="text-[#dfc087]">&lt;/br&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#a9b1b3]">{{ __('I also created a program for ordering and storage, with the employees.') }}</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;/p&gt;</p>
            </div>
            <div class="flex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p class="text-[#dfc087]">&lt;/div&gt;</p>
            </div>


            <div class="flex">
                <p class="text-[#dfc087]">&lt;/x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
