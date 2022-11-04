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
                <p class="text-code-fire">&lt;?php</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">use&nbsp;</p>
                <p class="text-code-white">Illuminate\Support\Facades\Broadcast</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">
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
                <p class="text-code-white">Broadcast::</p>
                <p class="text-code-fire">channel</p>
                <p class="text-code-white">(</p>
                <p class="text-code-green">'App.Models.User.{id}'</p>
                <p class="text-code-fire">, function&nbsp;</p>
                <p class="text-code-white">(</p>
                <p class="text-code-purple">$user</p>
                <p class="text-code-fire">,&nbsp;</p>
                <p class="text-code-purple">$id</p>
                <p class="text-code-white">) {</p>
                <div>&nbsp;</div>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-fire">return&nbsp;</p>
                <p class="text-code-white">(</p>
                <p class="text-code-fire">int</p>
                <p class="text-code-white">)&nbsp;</p>
                <p class="text-code-purple">$user</p>
                <p class="text-code-white">-></p>
                <p class="text-code-purple">id</p>
                <p class="text-code-white">&nbsp;===&nbsp;</p>
                <p class="text-code-white">(</p>
                <p class="text-code-fire">int</p>
                <p class="text-code-white">)&nbsp;</p>
                <p class="text-code-purple">id</p>
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
