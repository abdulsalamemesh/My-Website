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
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-[#c96f1b]">&lt;?php</p>
            </div>
            <div>&nbsp; </div>
            <div class="flex flex-wrap">
                <p class="text-[#c96f1b]">use&nbsp;</p>
                <p class="text-[#a9b1b3]">Illuminate\Support\Facades\Route</p>
                <p class="text-[#c96f1b]">;</p>
                <div>&nbsp; </div>
            </div>
            <div>&nbsp; </div>
            <div class="flex flex-wrap">
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
