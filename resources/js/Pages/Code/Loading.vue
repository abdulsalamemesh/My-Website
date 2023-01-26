<script setup>
import {onMounted} from "vue";
import {Inertia} from "@inertiajs/inertia";
import { Head } from '@inertiajs/inertia-vue3';

function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
onMounted(() =>{
    delay(3000).then(() => { Inertia.get(route('readme')) });
})
</script>

<template>
    <Head title="Loading you IDE"/>

    <div class="h-screen w-screen bg-menu-bg flex justify-center items-center">
        <div class="max-w-xl">
            <img src="/phpstorm.PNG" alt="phpstrom" class="object-center mb-2">
            <p class="text-center text-code-white">Loading your IDE</p>
        </div>
    </div>
</template>
