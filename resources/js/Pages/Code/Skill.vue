<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../store";

defineProps({
    skills: Object
})
onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(40, 35)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
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
                <p class="text-[#a9b1b3]">{{ __('Skills') }}</p>
                <p class="text-[#dfc087]">&lt;/h1&gt;</p>
            </div>
            <div :class="paddingLevel(1)" v-if="skills.length >0" class="flex flex-wrap">
                <p class="text-[#dfc087]">&lt;ul</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="list-disc space-y-1 my-2"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <template v-for="skill in skills">
                <div class="flex flex-wrap" :class="paddingLevel(2)">
                    <p class="text-[#dfc087]">&lt;li</p>
                    <p class="text-[#a9b1b3]">&nbsp;class</p>
                    <p class="text-[#a7bb7c]">="font-semibold"</p>
                    <p class="text-[#dfc087]">&gt;</p>
                    <p class="text-[#a9b1b3]">{{ skill }}</p>
                    <p class="text-[#dfc087]">&lt;/li&gt;</p>
                </div>
            </template>
            <div class="flex flex-wrap" :class="paddingLevel(1)" v-if="skills.length >0">
                <p class="text-[#dfc087]">&lt;/ul&gt;</p>
            </div>

            <div class="flex flex-wrap">
                <p class="text-[#dfc087]">&lt;/x-layout</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
