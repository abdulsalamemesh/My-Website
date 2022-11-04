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
        <div class="pl-1 py-1 grow leading-5 overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap ">
                <p class="text-code-fire">&lt;?php</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">use&nbsp;</p>
                <p class="text-code-white">Illuminate\Http\Request</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp;</div>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">use&nbsp;</p>
                <p class="text-code-white">Illuminate\Support\Facades\Route</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">
                    /* <br>
                    |-------------------------------------------------------------------------- <br>
                    | API Routes <br>
                    |-------------------------------------------------------------------------- <br>
                    | <br>
                    | Here is where you can register API routes for your application. These <br>
                    | routes are loaded by the RouteServiceProvider within a group which <br>
                    | is assigned the "api" middleware group. Enjoy building your API! <br>
                    | <br>
                    */ <br>
                </p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-white">Route::</p>
                <p class="text-code-fire">middleware</p>
                <p class="text-code-white">(</p>
                <p class="text-code-green">'auth:sanctum'</p>
                <p class="text-code-white">)-></p>
                <p class="text-code-fire">get</p>
                <p class="text-code-white">(</p>
                <p class="text-code-green">'/user'</p>
                <p class="text-code-fire">, function&nbsp;</p>
                <p class="text-code-white">(Request&nbsp;</p>
                <p class="text-code-purple">$request</p>
                <p class="text-code-white">) {</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-fire">return&nbsp;</p>

                <p class="text-code-purple">$request</p>
                <p class="text-code-white">-></p>
                <p class="text-code-gold">user</p>
                <p class="text-code-white">()</p>
                <p class="text-code-fire">;</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-white">})</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp;</div>
            </div>
        </div>
    </SimpleLayout>
</template>
