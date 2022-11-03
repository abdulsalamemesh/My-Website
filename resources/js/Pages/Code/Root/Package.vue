<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(22, 19)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"private"</p>
                <p class="text-[#c96f1b]">: true</p>
            </div>



            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"scripts"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"dev"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"vite"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"build"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"vite build"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#a9b1b3]">}</p>
                <p class="text-[#c96f1b]">,</p>
            </div>



            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"devDependencies"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"@tailwindcss/forms"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^0.5.2"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"@tailwindcss/typography"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^0.5.2"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"autoprefixer"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^10.4.7"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"axios"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^0.27"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"laravel-vite-plugin"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^0.6.0"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"lodash"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^4.17.19"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"postcss"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^8.4.14"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"tailwindcss"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^3.1.0"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"vite"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^3.0.0"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#a9b1b3]">}</p>
            </div>


            <div class="flex flex-wrap">
                <p class="text-[#a9b1b3]">}</p>
            </div>
        </div>
    </SimpleLayout>
</template>
