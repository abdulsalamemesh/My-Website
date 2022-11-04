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
                <p class="text-code-fire">&lt;?php</p>
            </div>
            <div>&nbsp; </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">use&nbsp;</p>
                <p class="text-code-white">Illuminate\Support\Facades\Route</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp; </div>
            </div>
            <div>&nbsp; </div>
            <div class="flex flex-wrap">
                <p class="text-code-white">Route::</p>
                <p class="text-code-fire">view</p>
                <p class="text-code-white">(</p>
                <p class="text-code-green">'/'</p>
                <p class="text-code-fire">,</p>
                <p class="text-code-green">'index.balde.view'</p>
                <p class="text-code-white">)</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp;</div>
            </div>
        </div>
    </SimpleLayout>
</template>
