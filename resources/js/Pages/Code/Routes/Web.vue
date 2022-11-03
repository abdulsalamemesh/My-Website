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
            <div>&nbsp; </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">&lt;use&nbsp;</p>
                <p class="text-[#a9b1b3]">Illuminate\Support\Facades\Route</p>
                <p class="text-[#c96f1b]">;</p>
                <div>&nbsp; </div>
            </div>
            <div>&nbsp; </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#a9b1b3]">Route::</p>
                <p class="text-[#c96f1b]">view</p>
                <p class="text-[#a9b1b3]">(</p>
                <p class="text-[#576950]">'/'</p>
                <p class="text-[#c96f1b]">,</p>
                <p class="text-[#576950]">'index.balde.view'</p>
                <p class="text-[#a9b1b3]">)</p>
                <p class="text-[#c96f1b]">;</p>
                <div>&nbsp;</div>
            </div>
        </div>
    </SimpleLayout>
</template>
