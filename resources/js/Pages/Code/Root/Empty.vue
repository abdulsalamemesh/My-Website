<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onMounted} from "vue";
import {syncScroll} from "../../../store";


onMounted(() => {
    syncScroll()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">

        </div>
    </SimpleLayout>
</template>
