<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(100, 55)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Artisan">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-code-white">
                    #!/usr/bin/env php
                </p>
            </div>
            <div class="flex flex-wrap ">
                <p class="text-code-fire">&lt;?php</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-white">define(</p>
                <p class="text-code-green">'LARAVEL_START'</p>
                <p class="text-code-fire">,&nbsp;</p>
                <p class="text-code-white">microtime(</p>
                <p class="text-code-fire">true</p>
                <p class="text-code-white">))</p>
                <p class="text-code-fire">;</p>
                <div>&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">
                    /* <br>
                    |-------------------------------------------------------------------------- <br>
                    | Register The Auto Loader <br>
                    |-------------------------------------------------------------------------- <br>
                    | <br>
                    | Composer provides a convenient, automatically generated class loader <br>
                    | for our application. We just need to utilize it! We'll require it <br>
                    | into the script here so that we do not have to worry about the <br>
                    | loading of any of our classes manually. It's great to relax. <br>
                    | <br>
                    */ <br>
                </p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">require&nbsp;</p>
                <p class="text-code-purple">__DIR__</p>
                <p class="text-code-white">.</p>
                <p class="text-code-green">'/vendor/autoload.php'</p>
                <p class="text-code-fire">;</p>
            </div>
            <div>&nbsp;</div>

            <div class="flex flex-wrap">
                <p class="text-code-purple">$app</p>
                <p class="text-code-white">&nbsp;=&nbsp;</p>
                <p class="text-code-fire">require_once&nbsp;</p>
                <p class="text-code-purple">__DIR__</p>
                <p class="text-code-white">.</p>
                <p class="text-code-green">'/bootstrap/app.php'</p>
                <p class="text-code-fire">;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">
                    /* <br>
                    |-------------------------------------------------------------------------- <br>
                    | Run The Artisan Application <br>
                    |-------------------------------------------------------------------------- <br>
                    | <br>
                    | When we run the console application, the current CLI command will be <br>
                    | executed in this console and the response sent back to a terminal <br>
                    | or another output device for the developers. Here goes nothing! <br>
                    | <br>
                    */ <br>
                </p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-purple">$kernel</p>
                <p class="text-code-white">&nbsp;=&nbsp;</p>
                <p class="text-code-purple">$app</p>
                <p class="text-code-white">-></p>
                <p class="text-code-gold">make</p>
                <p class="text-code-white">(Illuminate\Contracts\Console\Kernel::</p>
                <p class="text-code-fire">class</p>
                <p class="text-code-white">)</p>
                <p class="text-code-fire">;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-purple">$status</p>
                <p class="text-code-white">&nbsp;=&nbsp;</p>
                <p class="text-code-purple">$kernel</p>
                <p class="text-code-white">-></p>
                <p class="text-code-gold">handle</p>
                <p class="text-code-white">(</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">$input</p>
                <p class="text-code-white">&nbsp;=&nbsp;</p>
                <p class="text-code-fire">new&nbsp;</p>
                <p class="text-code-white">Symfony\Component\Console\Input\ArgvInput</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-fire">new&nbsp;</p>
                <p class="text-code-white">Symfony\Component\Console\Output\ConsoleOutput</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-white">)</p>
                <p class="text-code-fire">;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">
                    /* <br>
                    |-------------------------------------------------------------------------- <br>
                    | Shutdown The Application <br>
                    |-------------------------------------------------------------------------- <br>
                    | <br>
                    | Once Artisan has finished running, we will code-fire off the shutdown events <br>
                    | so that any final work may be done by the application before we shut <br>
                    | down the process. This is the last thing to happen to the request. <br>
                    | <br>
                    */ <br>
                </p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-purple">$kernel</p>
                <p class="text-code-white">-></p>
                <p class="text-code-gold">terminate</p>
                <p class="text-code-white">(</p>
                <p class="text-code-purple">$input</p>
                <p class="text-code-fire">,&nbsp;</p>
                <p class="text-code-purple">$status</p>
                <p class="text-code-white">)</p>
                <p class="text-code-fire">;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">

                <p class="text-code-fire">exit</p>
                <p class="text-code-white">(</p>
                <p class="text-code-purple">$status</p>
                <p class="text-code-white">)</p>
            </div>

        </div>
    </SimpleLayout>
</template>
