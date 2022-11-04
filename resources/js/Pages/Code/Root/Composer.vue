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
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"name"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"laravel/laravel"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"type"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"project"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"description"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"The Laravel Framework."</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"keywords"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">[</p>
                <p class="text-code-green">"framework"</p>
                <p class="text-code-fire">,&nbsp;</p>
                <p class="text-code-green">"laravel"</p>
                <p class="text-code-white">]</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"license"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"MIT"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"require"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"php"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^8.0.2"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"guzzlehttp/guzzle"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^7.2"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple"> "laravel/framework"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^9.19"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"laravel/sanctum"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^3.0"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"laravel/tinker"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^2.7"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-white">}</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"require-dev"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"fakerphp/faker"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^1.9.1"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"laravel/pint"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^1.0"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple"> "laravel/sail"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^1.0.1"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple"> "mockery/mockery"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^1.4.4"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple"> "nunomaduro/collision"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^6.1"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple"> "phpunit/phpunit"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^9.5.10"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple"> "spatie/laravel-ignition"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"^1.0"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-white">}</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"autoload"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"psr-4"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-purple">"App\"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"app/"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-purple">"Database\\Factories\\"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"database/factories/"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-purple">"Database\\Seeders\\"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"database/seeders/"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-white">}</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-white">}</p>
                <p class="text-code-fire">,</p>
            </div>


            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"autoload-dev"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"psr-4"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-purple">"Tests\"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"tests/"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-white">}</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-white">}</p>
                <p class="text-code-fire">,</p>
            </div>




            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"scripts"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">{</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"post-autoload-dump"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">[</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-green">"Illuminate</p>
                <p class="text-code-fire">\\</p>
                <p class="text-code-green">Foundation</p>
                <p class="text-code-fire">\\</p>
                <p class="text-code-green">ComposerScripts::postAutoloadDump"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-white">]</p>
                <p class="text-code-fire">,</p>
            </div>


            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"post-update-cmd"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">[</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-green">"@php artisan vendor:publish --tag=laravel-assets --ansi --force"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-white">]</p>
                <p class="text-code-fire">,</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"post-root-package-install"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">[</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-green">"@php -r&nbsp;</p>
                <p class="text-code-fire">\"</p>
                <p class="text-code-green">file_exists('.env') || copy('.env.example', '.env');</p>
                <p class="text-code-fire">\"</p>
                <p class="text-code-green">"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-white">]</p>
                <p class="text-code-fire">,</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"post-create-project-cmd"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">[</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-green">"@php artisan key:generate --ansi"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-white">]</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-white">}</p>
                <p class="text-code-fire">,</p>
            </div>




            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"extra"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"laravel"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-purple">"dont-discover"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">[]</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-white">}</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-white">}</p>
                <p class="text-code-fire">,</p>
            </div>




            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"config"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"optimize-autoloader"</p>
                <p class="text-code-fire">: true,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"preferred-install"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"dist"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"optimize-autoloader"</p>
                <p class="text-code-fire">: true,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-purple">"allow-plugins"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-white">{</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-purple">"pestphp/pest-plugin"</p>
                <p class="text-code-fire">: true</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-white">}</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-white">}</p>
                <p class="text-code-fire">,</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"minimum-stability"</p>
                <p class="text-code-fire">:&nbsp;</p>
                <p class="text-code-green">"dev"</p>
                <p class="text-code-fire">,</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-purple">"prefer-stable"</p>
                <p class="text-code-fire">: true</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-white">}</p>
            </div>
        </div>
    </SimpleLayout>
</template>
