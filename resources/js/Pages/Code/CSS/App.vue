<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(4, 4)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="CSS - App">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-code-fire">@tailwind&nbsp;</p>
                <p class="text-code-gold">base</p>
                <p class="text-code-fire">;</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">@tailwind&nbsp;</p>
                <p class="text-code-gold">components</p>
                <p class="text-code-fire">;</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">@tailwind&nbsp;</p>
                <p class="text-code-gold">utilities</p>
                <p class="text-code-fire">;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
