<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {ref, onMounted} from "vue";

let count = ref(  [])

onMounted(() => {
    count.value = Array.from(Array(document.getElementById('count')?.childElementCount + 1).keys());
    const elems = document.getElementsByClassName("scroll-js");

    function foo() {
        let top = this.scrollTop;

        for (let i = 0; i < elems.length; i++) {
            elems[i].scrollTop = top;
        }
    }

    for (let i = 0; i < elems.length; i++) {
        elems[i].addEventListener("scroll", foo);
    }

})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <template #header>
                <template  v-for="(number, key) in count">
                    <div class="text-[#5f6364]" v-if="key !== 0">{{ number }}</div>
                </template>
        </template>

        <div class="pl-1 pt-1 grow space-y-0.5 overflow-y-scroll custom-scrollbar scroll-js pb-2" id="count">

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
