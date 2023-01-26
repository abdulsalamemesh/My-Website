<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {syncScroll, setRowsCountFromWindowListener, removeRowsCountFromWindowListener} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(30, 20)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Routes - Console">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-code-fire">&lt;?php</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-code-fire">use&nbsp;</p>
                <p class="text-code-white">Illuminate\Foundation\Inspiring</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp;</div>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-code-fire">use&nbsp;</p>
                <p class="text-code-white">Illuminate\Support\Facades\Artisan</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-muted-gray">
                    /* <br>
                    |-------------------------------------------------------------------------- <br>
                    | Console Routes <br>
                    |-------------------------------------------------------------------------- <br>
                    | <br>
                    | This file is where you may define all of your Closure based console <br>
                    | commands. Each Closure is bound to a command instance allowing a <br>
                    | simple approach to interacting with each command's IO methods. <br>
                    | <br>
                    */ <br>
                </p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-code-white">Artisan::</p>
                <p class="text-code-fire">command</p>
                <p class="text-code-white">(</p>
                <p class="text-code-green">'inspire'</p>
                <p class="text-code-fire">, function&nbsp;</p>
                <p class="text-code-white">() {</p>
                <div>&nbsp;</div>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">$this</p>
                <p class="text-code-white">-></p>
                <p class="text-code-gold">comment</p>
                <p class="text-code-white">(</p>
                <p class="text-code-white">Inspiring::</p>
                <p class="text-code-gold">quote</p>
                <p class="text-code-white">())</p>
                <p class="text-code-fire">;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-code-white">})-></p>
                <p class="text-code-gold">purpose</p>
                <p class="text-code-white">(</p>
                <p class="text-code-green">'Display an inspiring quote'</p>
                <p class="text-code-white">)</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp;</div>
            </div>
        </div>
    </SimpleLayout>
</template>
