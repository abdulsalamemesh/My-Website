<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onMounted,onBeforeUnmount} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(18, 18)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <p class="text-code-white">
                /node_modules <br>
                /public/build <br>
                /public/hot <br>
                /public/storage <br>
                /storage/*.key <br>
                /vendor <br>
                .env <br>
                .env.backup <br>
                .phpunit.result.cache <br>
                Homestead.json <br>
                Homestead.yaml <br>
                auth.json <br>
                npm-debug.log <br>
                yarn-error.log <br>
                /.idea <br>
                /.vscode <br>
            </p>
        </div>
    </SimpleLayout>
</template>
