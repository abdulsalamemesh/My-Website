<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(100, 57)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Public Index">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap ">
                <p class="text-code-fire">&lt;?php</p>
            </div>
            <br>
            <div class="flex flex-wrap ">
                <p class="text-code-fire">use&nbsp;</p>
                <p class="text-code-white">Illuminate\Contracts\Http\Kernel</p>
                <p class="text-code-fire">;</p>
            </div>
            <div class="flex flex-wrap ">
                <p class="text-code-fire">use&nbsp;</p>
                <p class="text-code-white">Illuminate\Http\Request</p>
                <p class="text-code-fire">;</p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-code-white">define(</p>
                <p class="text-code-green">'LARAVEL_START'</p>
                <p class="text-code-fire">,&nbsp;</p>
                <p class="text-code-white">microtime(</p>
                <p class="text-code-fire">true</p>
                <p class="text-code-white">))</p>
                <p class="text-code-fire">;</p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">
                    /* <br>
                    |-------------------------------------------------------------------------- <br>
                    | Check If The Application Is Under Maintenance <br>
                    |-------------------------------------------------------------------------- <br>
                    | <br>
                    | If the application is in maintenance / demo mode via the "down" command <br>
                    | we will load this file so that any pre-rendered content can be shown <br>
                    | instead of starting the framework, which could cause an exception. <br>
                    | <br>
                    */ <br>
                </p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-code-fire">if&nbsp;</p>
                <p class="text-code-white">(file_exists(</p>
                <p class="text-code-purple">$maintenance&nbsp;</p>
                <p class="text-code-white">=&nbsp;</p>
                <p class="text-code-purple">__DIR__</p>
                <p class="text-code-white">.</p>
                <p class="text-code-green">'/../storage/framework/maintenance.php'</p>
                <p class="text-code-white">)) {</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-fire">require&nbsp;</p>
                <p class="text-code-purple">$maintenance</p>
                <p class="text-code-fire">;</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-white">}</p>
            </div>
            <br>

            <div class="flex flex-wrap">
                <p class="text-muted-gray">
                    /* <br>
                    |-------------------------------------------------------------------------- <br>
                    | Register The Auto Loader <br>
                    |-------------------------------------------------------------------------- <br>
                    | <br>
                    | Composer provides a convenient, automatically generated class loader for <br>
                    | this application. We just need to utilize it! We'll simply require it br <br>
                    | into the script here so we don't need to manually load our classes. <br>
                    | <br>
                    */ <br>
                </p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-code-fire">require&nbsp;</p>
                <p class="text-code-purple">__DIR__</p>
                <p class="text-code-white">.</p>
                <p class="text-code-green">'/../vendor/autoload.php'</p>
                <p class="text-code-fire">;</p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">
                    /* <br>
                    |-------------------------------------------------------------------------- <br>
                    | Run The Application <br>
                    |-------------------------------------------------------------------------- <br>
                    | <br>
                    | Once we have the application, we can handle the incoming request using <br>
                    | the application's HTTP kernel. Then, we will send the response back <br>
                    | to this client's browser, allowing them to enjoy our application. <br>
                    | <br>
                    */ <br>
                </p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-code-purple">$app</p>
                <p class="text-code-white">&nbsp;=&nbsp;</p>
                <p class="text-code-fire">require_once&nbsp;</p>
                <p class="text-code-purple">__DIR__</p>
                <p class="text-code-white">.</p>
                <p class="text-code-green">'/../bootstrap/app.php'</p>
                <p class="text-code-fire">;</p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-code-purple">$kernel</p>
                <p class="text-code-white">&nbsp;=&nbsp;</p>
                <p class="text-code-purple">$kernel</p>
                <p class="text-code-white">-></p>
                <p class="text-code-gold">make</p>
                <p class="text-code-white">(Kernel:</p>
                <p class="text-code-fire">class</p>
                <p class="text-code-white">)</p>
                <p class="text-code-fire">;</p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-code-purple">$response</p>
                <p class="text-code-white">&nbsp;=&nbsp;</p>
                <p class="text-code-purple">$kernel</p>
                <p class="text-code-white">-></p>
                <p class="text-code-gold">handle</p>
                <p class="text-code-white">(</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">$request</p>
                <p class="text-code-white">&nbsp;=&nbsp;</p>
                <p class="text-code-white">Request::</p>
                <p class="text-code-white">-></p>
                <p class="text-code-gold">handle</p>
                <p class="text-code-white">()</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-white">)-></p>
                <p class="text-code-gold">handle</p>
                <p class="text-code-white">()</p>
                <p class="text-code-fire">;</p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-code-purple">$kernel</p>
                <p class="text-code-white">-></p>
                <p class="text-code-gold">terminate</p>
                <p class="text-code-white">(</p>
                <p class="text-code-purple">$request</p>
                <p class="text-code-fire">,&nbsp;</p>
                <p class="text-code-purple">$response</p>
                <p class="text-code-white">)</p>
                <p class="text-code-fire">;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
