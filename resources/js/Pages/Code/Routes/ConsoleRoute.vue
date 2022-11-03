<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onMounted} from "vue";
import {syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">&lt;?php</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">&lt;use&nbsp;</p>
                <p class="text-[#a9b1b3]">Illuminate\Foundation\Inspiring</p>
                <p class="text-[#c96f1b]">;</p>
                <div>&nbsp;</div>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">&lt;use&nbsp;</p>
                <p class="text-[#a9b1b3]">Illuminate\Support\Facades\Artisan</p>
                <p class="text-[#c96f1b]">;</p>
                <div>&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#5f6364]">
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
                <p class="text-[#a9b1b3]">Artisan::</p>
                <p class="text-[#c96f1b]">command</p>
                <p class="text-[#a9b1b3]">(</p>
                <p class="text-[#576950]">'inspire'</p>
                <p class="text-[#c96f1b]">, function&nbsp;</p>
                <p class="text-[#a9b1b3]">() {</p>
                <div>&nbsp;</div>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">$this</p>
                <p class="text-[#a9b1b3]">-></p>
                <p class="text-[#dfc087]">comment</p>
                <p class="text-[#a9b1b3]">(</p>
                <p class="text-[#a9b1b3]">Inspiring::</p>
                <p class="text-[#dfc087]">quote</p>
                <p class="text-[#a9b1b3]">())</p>
                <p class="text-[#c96f1b]">;</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#a9b1b3]">})-></p>
                <p class="text-[#dfc087]">purpose</p>
                <p class="text-[#a9b1b3]">(</p>
                <p class="text-[#576950]">'Display an inspiring quote'</p>
                <p class="text-[#a9b1b3]">)</p>
                <p class="text-[#c96f1b]">;</p>
                <div>&nbsp;</div>
            </div>
        </div>
    </SimpleLayout>
</template>
