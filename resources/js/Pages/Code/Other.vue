<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onMounted,onBeforeUnmount} from "vue";
import {syncScroll,setRowsCountFromWindowListener,removeRowsCountFromWindowListener} from "../../store";

defineProps({
    information: Object
})
onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(80, 50)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-code-gold">&lt;x-layout</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;h1</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="font-bold text-lg text-indigo-500 uppercase mb-2"</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('Other information') }}</p>
                <p class="text-code-gold">&lt;/h1&gt;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;h2</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="font-bold text-md text-indigo-500 uppercase"</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('Achievements') }}</p>
                <p class="text-code-gold">&lt;/h2&gt;</p>
            </div>
            <div :class="paddingLevel(1)" class="flex flex-wrap">
                <p class="text-code-gold">&lt;div</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="divide-y divide-gray-300 my-2"</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <template v-for="(achievement,key) in information.achievements">
                <div v-if="key !== 0">&nbsp;</div>
                <div :class="paddingLevel(2)" class="flex flex-wrap">
                    <p class="text-code-gold">&lt;div</p>
                    <p class="text-code-white">&nbsp;class</p>
                    <p class="text-code-class">="space-y-2"</p>
                    <p class="text-code-gold">&gt;</p>
                </div>
                <div class="flex flex-wrap" :class="paddingLevel(3)">
                    <p class="text-code-gold">&lt;h3</p>
                    <p class="text-code-white">&nbsp;class</p>
                    <p class="text-code-class">="font-bold"</p>
                    <p class="text-code-gold">&gt;</p>
                    <p class="text-code-white">{{ achievement.title }}</p>
                    <p class="text-code-gold">&lt;/h3&gt;</p>
                </div>
                <div class="flex flex-wrap" :class="paddingLevel(3)">
                    <p class="text-code-gold">&lt;p</p>
                    <p class="text-code-white">&nbsp;class</p>
                    <p class="text-code-class">="font-semibold"</p>
                    <p class="text-code-gold">&gt;</p>
                    <p class="text-code-white">{{ achievement.subtitle }}</p>
                    <p class="text-code-gold">&lt;/p&gt;</p>
                </div>
                <div class="flex flex-wrap" v-if="achievement.text.length > 0" :class="paddingLevel(3)">
                    <p class="text-code-gold">&lt;p</p>
                    <p class="text-code-gold">&gt;</p>
                </div>

                <template v-for="(point,key) in achievement.text">
                    <div class="flex flex-wrap" :class="paddingLevel(4)">
                        <p class="text-code-white">{{ point }}</p>
                        <p class="text-code-gold" v-if="key != Object.keys(achievement.text).length - 1">&lt;/br&gt;</p>
                    </div>
                </template>
                <div class="flex flex-wrap" v-if="achievement.text.length > 0" :class="paddingLevel(3)">
                    <p class="text-code-gold">&lt;/p&gt;</p>
                </div>
                <div class="flex flex-wrap" :class="paddingLevel(2)">
                    <p class="text-code-gold">&lt;/div&gt;</p>
                </div>
            </template>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;/div&gt;</p>
            </div>
            <div>&nbsp;</div>


            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;h2</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="font-bold text-lg text-indigo-500 uppercase"</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('Hobbies') }}</p>
                <p class="text-code-gold">&lt;/h2&gt;</p>
            </div>
            <div :class="paddingLevel(1)" class="flex flex-wrap">
                <p class="text-code-gold">&lt;ul</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="list-disc space-y-1 my-2"</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <template v-for="hobby in information.hobbies">
                <div class="flex flex-wrap" :class="paddingLevel(2)">
                    <p class="text-code-gold">&lt;li</p>
                    <p class="text-code-white">&nbsp;class</p>
                    <p class="text-code-class">="font-bold"</p>
                    <p class="text-code-gold">&gt;</p>
                    <p class="text-code-white">{{ hobby }}</p>
                    <p class="text-code-gold">&lt;/li&gt;</p>
                </div>
            </template>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;/ul&gt;</p>
            </div>
            <div>&nbsp;</div>


            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;h2</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="font-bold text-lg text-indigo-500 uppercase"</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('References') }}</p>
                <p class="text-code-gold">&lt;/h2&gt;</p>
            </div>
            <div :class="paddingLevel(1)" class="flex flex-wrap">
                <p class="text-code-gold">&lt;div</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="space-y-2"</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <template v-for="(reference,key) in information.references">
                <div v-if="key !== 0">&nbsp;</div>
                <div :class="paddingLevel(2)" class="flex flex-wrap">
                    <p class="text-code-gold">&lt;div</p>
                    <p class="text-code-white">&nbsp;class</p>
                    <p class="text-code-class">="space-y-2"</p>
                    <p class="text-code-gold">&gt;</p>
                </div>
                <div class="flex flex-wrap" :class="paddingLevel(3)">
                    <p class="text-code-gold">&lt;h3</p>
                    <p class="text-code-white">&nbsp;class</p>
                    <p class="text-code-class">="font-bold"</p>
                    <p class="text-code-gold">&gt;</p>
                    <p class="text-code-white">{{ reference.name }}</p>
                    <p class="text-code-gold">&lt;/h3&gt;</p>
                </div>
                <div class="flex flex-wrap" :class="paddingLevel(3)">
                    <p class="text-code-gold">&lt;p</p>
                    <p class="text-code-white">&nbsp;class</p>
                    <p class="text-code-class">="font-semibold"</p>
                    <p class="text-code-gold">&gt;</p>
                    <p class="text-code-white">{{ reference.ort }}</p>
                    <p class="text-code-gold">&lt;/p&gt;</p>
                </div>
                <a :href="'tel:'+ reference.phone " class="flex flex-wrap" :class="paddingLevel(3)">
                    <p class="text-code-gold">&lt;a</p>
                    <p class="text-code-white">&nbsp;href</p>
                    <p class="text-code-class">="tel:{{ reference.phone }}"</p>
                    <p class="text-code-white">&nbsp;class</p>
                    <p class="text-code-class">="font-semibold block"</p>
                    <p class="text-code-gold">&gt;</p>
                    <p class="text-code-white">{{ reference.phone }}</p>
                    <p class="text-code-gold">&lt;/a&gt;</p>
                </a>
                <a :href="'mailto:'+reference.email" class="flex flex-wrap" :class="paddingLevel(3)">
                    <p class="text-code-gold">&lt;a</p>
                    <p class="text-code-white">&nbsp;href</p>
                    <p class="text-code-class">="mailto:{{ reference.email }}"</p>
                    <p class="text-code-white">&nbsp;class</p>
                    <p class="text-code-class">="font-semibold block"</p>
                    <p class="text-code-gold">&gt;</p>
                    <p class="text-code-white">{{ reference.email }}</p>
                    <p class="text-code-gold">&lt;/a&gt;</p>
                </a>

                <div class="flex flex-wrap" :class="paddingLevel(2)">
                    <p class="text-code-gold">&lt;/div&gt;</p>
                </div>
            </template>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;/div&gt;</p>
            </div>



            <div class="flex flex-wrap">
                <p class="text-code-gold">&lt;/x-layout</p>
                <p class="text-code-gold">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
