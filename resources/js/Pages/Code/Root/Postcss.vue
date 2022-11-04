<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(9, 9)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-code-white">module.</p>
                <p class="text-code-purple">exports</p>
                <p class="text-code-white">&nbsp;=&nbsp;{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">plugins</p>
                <p class="text-code-white">:&nbsp;{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">tailwindcss</p>
                <p class="text-code-white">:&nbsp;{}</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">autoprefixer</p>
                <p class="text-code-white">:&nbsp;{}</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-white">}</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-white">}</p>
                <p class="text-code-fire">;</p>
            </div>

        </div>
    </SimpleLayout>
</template>
