<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(100, 78)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"name"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"laravel/laravel"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"type"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"project"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"description"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"The Laravel Framework."</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"keywords"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">[</p>
                <p class="text-[#576950]">"framework"</p>
                <p class="text-[#c96f1b]">,&nbsp;</p>
                <p class="text-[#576950]">"laravel"</p>
                <p class="text-[#a9b1b3]">]</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"license"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"MIT"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"require"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"php"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^8.0.2"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"guzzlehttp/guzzle"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^7.2"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]"> "laravel/framework"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^9.19"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"laravel/sanctum"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^3.0"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"laravel/tinker"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^2.7"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#a9b1b3]">}</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"require-dev"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"fakerphp/faker"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^1.9.1"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"laravel/pint"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^1.0"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]"> "laravel/sail"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^1.0.1"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]"> "mockery/mockery"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^1.4.4"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]"> "nunomaduro/collision"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^6.1"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]"> "phpunit/phpunit"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^9.5.10"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]"> "spatie/laravel-ignition"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"^1.0"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#a9b1b3]">}</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"autoload"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"psr-4"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-[#8D7D97]">"App\"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"app/"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-[#8D7D97]">"Database\\Factories\\"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"database/factories/"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-[#8D7D97]">"Database\\Seeders\\"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"database/seeders/"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">}</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#a9b1b3]">}</p>
                <p class="text-[#c96f1b]">,</p>
            </div>


            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"autoload-dev"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"psr-4"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-[#8D7D97]">"Tests\"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"tests/"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">}</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#a9b1b3]">}</p>
                <p class="text-[#c96f1b]">,</p>
            </div>




            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"scripts"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">{</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"post-autoload-dump"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">[</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-[#576950]">"Illuminate</p>
                <p class="text-[#c96f1b]">\\</p>
                <p class="text-[#576950]">Foundation</p>
                <p class="text-[#c96f1b]">\\</p>
                <p class="text-[#576950]">ComposerScripts::postAutoloadDump"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">]</p>
                <p class="text-[#c96f1b]">,</p>
            </div>


            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"post-update-cmd"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">[</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-[#576950]">"@php artisan vendor:publish --tag=laravel-assets --ansi --force"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">]</p>
                <p class="text-[#c96f1b]">,</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"post-root-package-install"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">[</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-[#576950]">"@php -r&nbsp;</p>
                <p class="text-[#c96f1b]">\"</p>
                <p class="text-[#576950]">file_exists('.env') || copy('.env.example', '.env');</p>
                <p class="text-[#c96f1b]">\"</p>
                <p class="text-[#576950]">"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">]</p>
                <p class="text-[#c96f1b]">,</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"post-create-project-cmd"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">[</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-[#576950]">"@php artisan key:generate --ansi"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">]</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#a9b1b3]">}</p>
                <p class="text-[#c96f1b]">,</p>
            </div>




            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"extra"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"laravel"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-[#8D7D97]">"dont-discover"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">[]</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">}</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#a9b1b3]">}</p>
                <p class="text-[#c96f1b]">,</p>
            </div>




            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"config"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"optimize-autoloader"</p>
                <p class="text-[#c96f1b]">: true,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"preferred-install"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"dist"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"optimize-autoloader"</p>
                <p class="text-[#c96f1b]">: true,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#8D7D97]">"allow-plugins"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#a9b1b3]">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-[#8D7D97]">"pestphp/pest-plugin"</p>
                <p class="text-[#c96f1b]">: true</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#a9b1b3]">}</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#a9b1b3]">}</p>
                <p class="text-[#c96f1b]">,</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"minimum-stability"</p>
                <p class="text-[#c96f1b]">:&nbsp;</p>
                <p class="text-[#576950]">"dev"</p>
                <p class="text-[#c96f1b]">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#8D7D97]">"prefer-stable"</p>
                <p class="text-[#c96f1b]">: true</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-[#a9b1b3]">}</p>
            </div>
        </div>
    </SimpleLayout>
</template>
