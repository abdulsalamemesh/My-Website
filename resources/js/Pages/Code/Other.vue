<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {ref, onMounted} from "vue";

let count = ref([])
defineProps({
    information: Object
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
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#dfc087]">&lt;x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;h1</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-bold text-lg text-indigo-500 uppercase mb-2"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('Other information') }}</p>
                <p class="text-[#dfc087]">&lt;/h1&gt;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;h2</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-bold text-md text-indigo-500 uppercase"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('Achievements') }}</p>
                <p class="text-[#dfc087]">&lt;/h2&gt;</p>
            </div>
            <div :class="paddingLevel(1)" class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#dfc087]">&lt;div</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="divide-y divide-gray-300 my-2"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <template v-for="(achievement,key) in information.achievements">
                <div v-if="key !== 0">&nbsp;</div>
                <div :class="paddingLevel(2)" class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                    <p class="text-[#dfc087]">&lt;div</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="space-y-2"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                </div>
                <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;h3</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-bold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ achievement.title }}</p>
                    <p class="text-[#dfc087]">&lt;/h3&gt;</p>
                </div>
                <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;p</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-semibold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ achievement.subtitle }}</p>
                    <p class="text-[#dfc087]">&lt;/p&gt;</p>
                </div>
                <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" v-if="achievement.text.length > 0" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;p</p>
                    <p class="text-[#dfc087]">&gt;</p>
                </div>

                <template v-for="(point,key) in achievement.text">
                    <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(4)">
                        <p class="text-[#a9b1b3]">{{ point }}</p>
                        <p class="text-[#dfc087]" v-if="key != Object.keys(achievement.text).length - 1">&lt;/br&gt;</p>
                    </div>
                </template>
                <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" v-if="achievement.text.length > 0" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;/p&gt;</p>
                </div>
                <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                    <p class="text-[#dfc087]">&lt;/div&gt;</p>
                </div>
            </template>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;/div&gt;</p>
            </div>
            <div>&nbsp;</div>


            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;h2</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-bold text-lg text-indigo-500 uppercase"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('Hobbies') }}</p>
                <p class="text-[#dfc087]">&lt;/h2&gt;</p>
            </div>
            <div :class="paddingLevel(1)" class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#dfc087]">&lt;ul</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="list-disc space-y-1 my-2"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <template v-for="hobby in information.hobbies">
                <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                    <p class="text-[#dfc087]">&lt;li</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-bold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ hobby }}</p>
                    <p class="text-[#dfc087]">&lt;/li&gt;</p>
                </div>
            </template>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;/ul&gt;</p>
            </div>
            <div>&nbsp;</div>


            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;h2</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-bold text-lg text-indigo-500 uppercase"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{{ __('References') }}</p>
                <p class="text-[#dfc087]">&lt;/h2&gt;</p>
            </div>
            <div :class="paddingLevel(1)" class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#dfc087]">&lt;div</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="space-y-2"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <template v-for="(reference,key) in information.references">
                <div v-if="key !== 0">&nbsp;</div>
                <div :class="paddingLevel(2)" class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                    <p class="text-[#dfc087]">&lt;div</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="space-y-2"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                </div>
                <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;h3</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-bold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ reference.name }}</p>
                    <p class="text-[#dfc087]">&lt;/h3&gt;</p>
                </div>
                <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;p</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-semibold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ reference.ort }}</p>
                    <p class="text-[#dfc087]">&lt;/p&gt;</p>
                </div>
                <a :href="'tel:'+ reference.phone " class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;a</p>
                    <p class="text-[#a9b1b3]">&nbsp;href</p>
                    <p class="text-[#a7bb7c]">="tel:{{ reference.phone }}"</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-semibold block"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ reference.phone }}</p>
                    <p class="text-[#dfc087]">&lt;/a&gt;</p>
                </a>
                <a :href="'mailto:'+reference.email" class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(3)">
                    <p class="text-[#dfc087]">&lt;a</p>
                    <p class="text-[#a9b1b3]">&nbsp;href</p>
                    <p class="text-[#a7bb7c]">="mailto:{{ reference.email }}"</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-semibold block"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ reference.email }}</p>
                    <p class="text-[#dfc087]">&lt;/a&gt;</p>
                </a>

                <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(2)">
                    <p class="text-[#dfc087]">&lt;/div&gt;</p>
                </div>
            </template>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;/div&gt;</p>
            </div>
            <div>&nbsp;</div>


            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#dfc087]">&lt;/x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
