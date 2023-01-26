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
    <SimpleLayout title="Tests - Creates application">
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
                <p class="text-code-white">Illuminate\Contracts\Console\Kernel</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">trait&nbsp;</p>
                <p class="text-code-white">CreatesApplication</p>
                <p class="text-code-fire"></p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-green-comment">/** <br> * Creates the application. <br> *</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-green-comment">* @return&nbsp;</p>
                <p class="text-code-white">\Illuminate\Foundation\Application</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-green-comment">*/</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-fire"> public function&nbsp;</p>
                <p class="text-code-gold">createApplication</p>
                <p class="text-code-white">()</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">$app&nbsp;</p>
                <p class="text-code-white">=&nbsp;</p>
                <p class="text-code-fire">require&nbsp;</p>
                <p class="text-code-purple">__DIR__&nbsp;</p>
                <p class="text-code-white">.</p>
                <p class="text-code-green">'/../bootstrap/app.php'</p>
                <p class="text-code-fire">;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">$app</p>
                <p class="text-code-white">-></p>
                <p class="text-code-gold">make</p>
                <p class="text-code-white">(Kernel::</p>
                <p class="text-code-fire">class</p>
                <p class="text-code-white">)-></p>
                <p class="text-code-gold">bootstrap</p>
                <p class="text-code-white">()</p>
                <p class="text-code-fire">;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-fire">return</p>
                <p class="text-code-purple">$app</p>
                <p class="text-code-fire">;</p>
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
