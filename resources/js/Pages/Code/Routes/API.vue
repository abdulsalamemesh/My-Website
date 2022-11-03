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
                <p class="text-[#c96f1b]">&lt;?php</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-[#c96f1b]">use&nbsp;</p>
                <p class="text-[#a9b1b3]">Illuminate\Http\Request</p>
                <p class="text-[#c96f1b]">;</p>
                <div>&nbsp;</div>
            </div>
            <div class="flex flex-wrap">
                <p class="text-[#c96f1b]">use&nbsp;</p>
                <p class="text-[#a9b1b3]">Illuminate\Support\Facades\Route</p>
                <p class="text-[#c96f1b]">;</p>
                <div>&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-[#5f6364]">
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
                <p class="text-[#a9b1b3]">Route::</p>
                <p class="text-[#c96f1b]">middleware</p>
                <p class="text-[#a9b1b3]">(</p>
                <p class="text-[#576950]">'auth:sanctum'</p>
                <p class="text-[#a9b1b3]">)-></p>
                <p class="text-[#c96f1b]">get</p>
                <p class="text-[#a9b1b3]">(</p>
                <p class="text-[#576950]">'/user'</p>
                <p class="text-[#c96f1b]">, function&nbsp;</p>
                <p class="text-[#a9b1b3]">(Request&nbsp;</p>
                <p class="text-[#8D7D97]">$request</p>
                <p class="text-[#a9b1b3]">) {</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#c96f1b]">return&nbsp;</p>

                <p class="text-[#8D7D97]">$request</p>
                <p class="text-[#a9b1b3]">-></p>
                <p class="text-[#dfc087]">user</p>
                <p class="text-[#a9b1b3]">()</p>
                <p class="text-[#c96f1b]">;</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-[#a9b1b3]">})</p>
                <p class="text-[#c96f1b]">;</p>
                <div>&nbsp;</div>
            </div>
        </div>
    </SimpleLayout>
</template>
