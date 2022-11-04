<script setup>
import {onMounted} from "vue";
import {Inertia} from "@inertiajs/inertia";
function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
onMounted(() =>{
    delay(5000).then(() => { Inertia.get(route('readme')) });
})
</script>

<template>
    <div class="h-screen w-screen bg-menu-bg flex justify-center items-center">
        <div class="max-w-xl">
            <img src="/phpstorm.PNG" alt="phpstrom" class="object-center mb-2">
            <p class="text-center text-code-white">Loading your IDE</p>
        </div>
    </div>
</template>
