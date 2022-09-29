<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {ref, onMounted, onBeforeMount} from "vue";
let count = ref([])

onBeforeMount(() => setTimeout('',5000))
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

        <div class="pl-1 pt-1 grow space-y-0.5 overflow-y-scroll custom-scrollbar scroll-js pb-2" id="count">
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#dfc087]">&lt;x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;h1</p>
                 <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-bold text-lg text-indigo-500"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('Hallo dear programmer') }}</p>
                <p class="text-[#dfc087]">&lt;/h1&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;h2</p>
                 <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-bold text-md text-indigo-500"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('I just wanted to have some fun and create the website in your well-known environment') +' 😉' }}</p>
                <p class="text-[#dfc087]">&lt;/h2&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;h2</p>
                 <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-bold text-md text-indigo-500"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('This is made for you. Have fun!!') }}</p>
                <p class="text-[#dfc087]">&lt;/h2&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;ol</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="text-base list-disc space-y-1 my-2</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#dfc087]">&lt;li</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('Start with resources/views/me.blade.php to get to know me.') }}</p>
                <p class="text-[#dfc087]">&lt;/li&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#dfc087]">&lt;li</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('In resources/views/work.blade.php you can read about my work experience.') }}</p>
                <p class="text-[#dfc087]">&lt;/li&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#dfc087]">&lt;li</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('In resources/views/education.blade.php you can read about my education.') }}</p>
                <p class="text-[#dfc087]">&lt;/li&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#dfc087]">&lt;li</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('In resources/views/skills.blade.php you can find out what I can do.') }}</p>
                <p class="text-[#dfc087]">&lt;/li&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#dfc087]">&lt;li</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('In resources/views/other-information.blade.php you can find out what I do in my free time and did I accomplish.') }}</p>
                <p class="text-[#dfc087]">&lt;/li&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;/ol&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#dfc087]">&lt;/x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
