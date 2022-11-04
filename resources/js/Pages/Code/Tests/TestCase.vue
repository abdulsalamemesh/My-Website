<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(25, 20)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap ">
                <p class="text-code-fire">&lt;?php</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">namespace&nbsp;</p>
                <p class="text-code-white">Tests</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">use&nbsp;</p>
                <p class="text-code-white">Illuminate\Foundation\Testing\TestCase</p>
                <p class="text-code-fire">&nbsp;as&nbsp;</p>
                <p class="text-code-white">BaseTestCase</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">abstract class&nbsp;</p>
                <p class="text-code-white">TestCase&nbsp;</p>
                <p class="text-code-fire">extends&nbsp;</p>
                <p class="text-code-white">BaseTestCase</p>
                <p class="text-code-fire"></p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-fire">use&nbsp;</p>
                <p class="text-code-white">CreatesApplication</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp;</div>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-white">}</p>
            </div>
        </div>
    </SimpleLayout>
</template>
