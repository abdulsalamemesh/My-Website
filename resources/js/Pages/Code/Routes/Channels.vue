<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(30, 19)
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
                <p class="text-[#a9b1b3]">Illuminate\Support\Facades\Broadcast</p>
                <p class="text-[#c96f1b]">;</p>
                <div>&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-[#5f6364]">
                    /* <br>
                    |-------------------------------------------------------------------------- <br>
                    | Broadcast Channels <br>
                    |-------------------------------------------------------------------------- <br>
                    | <br>
                    | Here you may register all of the event broadcasting channels that your <br>
                    | application supports. The given channel authorization callbacks are <br>
                    | used to check if an authenticated user can listen to the channel. <br>
                    | <br>
                    */ <br>
                </p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-[#a9b1b3]">Broadcast::</p>
                <p class="text-[#c96f1b]">channel</p>
                <p class="text-[#a9b1b3]">(</p>
                <p class="text-[#576950]">'App.Models.User.{id}'</p>
                <p class="text-[#c96f1b]">, function&nbsp;</p>
                <p class="text-[#a9b1b3]">(</p>
                <p class="text-[#8D7D97]">$user</p>
                <p class="text-[#c96f1b]">,&nbsp;</p>
                <p class="text-[#8D7D97]">$id</p>
                <p class="text-[#a9b1b3]">) {</p>
                <div>&nbsp;</div>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#c96f1b]">return&nbsp;</p>
                <p class="text-[#a9b1b3]">(</p>
                <p class="text-[#c96f1b]">int</p>
                <p class="text-[#a9b1b3]">)&nbsp;</p>
                <p class="text-[#8D7D97]">$user</p>
                <p class="text-[#a9b1b3]">-></p>
                <p class="text-[#8D7D97]">id</p>
                <p class="text-[#a9b1b3]">&nbsp;===&nbsp;</p>
                <p class="text-[#a9b1b3]">(</p>
                <p class="text-[#c96f1b]">int</p>
                <p class="text-[#a9b1b3]">)&nbsp;</p>
                <p class="text-[#8D7D97]">id</p>
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
