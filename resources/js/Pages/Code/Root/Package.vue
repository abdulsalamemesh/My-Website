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
    <SimpleLayout title="Package">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"private"</p>
                <p class="text-code-fire">: true</p>
            </div>



            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"scripts"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"dev"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"vite"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"build"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"vite build"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-white">}</p>
                <p class="text-code-fire">,</p>
            </div>



            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"devDependencies"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"@tailwindcss/forms"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^0.5.2"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"@tailwindcss/typography"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^0.5.2"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"autoprefixer"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^10.4.7"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"axios"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^0.27"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"laravel-vite-plugin"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^0.6.0"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"lodash"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^4.17.19"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"postcss"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^8.4.14"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"tailwindcss"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^3.1.0"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"vite"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^3.0.0"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-white">}</p>
            </div>


            <div class="flex flex-wrap">
                <p class="text-code-white">}</p>
            </div>
        </div>
    </SimpleLayout>
</template>
