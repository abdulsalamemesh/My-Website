<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(20, 15)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Vite">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-code-fire">const&nbsp;</p>
                <p class="text-code-white">defaultTheme =&nbsp;</p>
                <p class="text-code-purple">require</p>
                <p class="text-code-white">(</p>
                <p class="text-code-green">'tailwindcss/defaultTheme'</p>
                <p class="text-code-white">)</p>
                <p class="text-code-fire">;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-green-comment">/** @type</p>
                <p class="text-[#655a3e]">&nbsp;{import('tailwindcss').Config}&nbsp;</p>
                <p class="text-code-green-comment">*/</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-purple">module</p>
                <p class="text-code-white">.</p>
                <p class="text-code-purple">exports</p>
                <p class="text-code-white">&nbsp;= {</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">content</p>
                <p class="text-code-white">: [</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-green">"./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-green">"./resources/**/*.blade.php"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-green"> "./resources/**/*.js",</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-green">"./storage/framework/views/*.php"'"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-white">]</p>
                <p class="text-code-fire">,</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">plugins</p>
                <p class="text-code-white">: [</p>
                <p class="text-code-purple">require</p>
                <p class="text-code-white">(</p>
                <p class="text-code-green">'@tailwindcss/forms'</p>
                <p class="text-code-white">)</p>
                <p class="text-code-fire">,&nbsp;</p>
                <p class="text-code-purple">require</p>
                <p class="text-code-white">(</p>
                <p class="text-code-green">'@tailwindcss/typography'</p>
                <p class="text-code-white">)]</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-white">}</p>
                <p class="text-code-fire">;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
