<script setup>

import {onMounted, ref} from "vue";
import ajax from "lodash";
import {Inertia} from "@inertiajs/inertia";
let count = ref(0);

function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}


onMounted(() =>{

    delay(5000).then(() => { Inertia.get(route('index')) });
})
</script>

<template>

    <div class="h-screen w-screen bg-[#3c3f41] flex justify-center items-center">
        <div class="max-w-xl">
            <img src="/phpstorm.PNG" alt="phpstrom" class="object-center mb-2">
            <p class="text-center text-[#a9b1b3]">Loading your IDE</p>
        </div>
    </div>
</template>
