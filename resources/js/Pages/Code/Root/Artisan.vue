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
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-[#a9b1b3]">
                    #!/usr/bin/env php
                </p>
            </div>
            <div class="flex flex-wrap ">
                <p class="text-[#c96f1b]">&lt;?php</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-[#a9b1b3]">define(</p>
                <p class="text-[#576950]">'LARAVEL_START'</p>
                <p class="text-[#c96f1b]">,&nbsp;</p>
                <p class="text-[#a9b1b3]">microtime(</p>
                <p class="text-[#c96f1b]">true</p>
                <p class="text-[#a9b1b3]">))</p>
                <p class="text-[#c96f1b]">;</p>
                <div>&nbsp;</div>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-[#5f6364]">
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
                <p class="text-[#c96f1b]">require&nbsp;</p>
                <p class="text-[#8D7D97]">__DIR__</p>
                <p class="text-[#a9b1b3]">.</p>
                <p class="text-[#576950]">'/vendor/autoload.php'</p>
                <p class="text-[#c96f1b]">;</p>
            </div>
            <div>&nbsp;</div>

            <div class="flex flex-wrap">
                <p class="text-[#8D7D97]">$app</p>
                <p class="text-[#a9b1b3]">&nbsp;=&nbsp;</p>
                <p class="text-[#c96f1b]">require_once&nbsp;</p>
                <p class="text-[#8D7D97]">__DIR__</p>
                <p class="text-[#a9b1b3]">.</p>
                <p class="text-[#576950]">'/bootstrap/app.php'</p>
                <p class="text-[#c96f1b]">;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-[#5f6364]">
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
                <p class="text-[#8D7D97]">$kernel</p>
                <p class="text-[#a9b1b3]">&nbsp;=&nbsp;</p>
                <p class="text-[#8D7D97]">$app</p>
                <p class="text-[#a9b1b3]">-></p>
                <p class="text-[#dfc087]">make</p>
                <p class="text-[#a9b1b3]">(Illuminate\Contracts\Console\Kernel::</p>
                <p class="text-[#c96f1b]">class</p>
                <p class="text-[#a9b1b3]">)</p>
                <p class="text-[#c96f1b]">;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-[#8D7D97]">$status</p>
                <p class="text-[#a9b1b3]">&nbsp;=&nbsp;</p>
                <p class="text-[#8D7D97]">$kernel</p>
                <p class="text-[#a9b1b3]">-></p>
                <p class="text-[#dfc087]">handle</p>
                <p class="text-[#a9b1b3]">(</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">$input</p>
                <p class="text-[#a9b1b3]">&nbsp;=&nbsp;</p>
                <p class="text-[#c96f1b]">new&nbsp;</p>
                <p class="text-[#a9b1b3]">Symfony\Component\Console\Input\ArgvInput</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#c96f1b]">new&nbsp;</p>
                <p class="text-[#a9b1b3]">Symfony\Component\Console\Output\ConsoleOutput</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-[#a9b1b3]">)</p>
                <p class="text-[#c96f1b]">;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-[#5f6364]">
                    /* <br>
                    |-------------------------------------------------------------------------- <br>
                    | Shutdown The Application <br>
                    |-------------------------------------------------------------------------- <br>
                    | <br>
                    | Once Artisan has finished running, we will fire off the shutdown events <br>
                    | so that any final work may be done by the application before we shut <br>
                    | down the process. This is the last thing to happen to the request. <br>
                    | <br>
                    */ <br>
                </p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-[#8D7D97]">$kernel</p>
                <p class="text-[#a9b1b3]">-></p>
                <p class="text-[#dfc087]">terminate</p>
                <p class="text-[#a9b1b3]">(</p>
                <p class="text-[#8D7D97]">$input</p>
                <p class="text-[#c96f1b]">,&nbsp;</p>
                <p class="text-[#8D7D97]">$status</p>
                <p class="text-[#a9b1b3]">)</p>
                <p class="text-[#c96f1b]">;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">

                <p class="text-[#c96f1b]">exit</p>
                <p class="text-[#a9b1b3]">(</p>
                <p class="text-[#8D7D97]">$status</p>
                <p class="text-[#a9b1b3]">)</p>
            </div>

        </div>
    </SimpleLayout>
</template>
