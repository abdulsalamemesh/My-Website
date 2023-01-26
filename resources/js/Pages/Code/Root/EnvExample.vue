<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";
onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(68, 58)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Env example">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-code-fire">APP_NAME</p>
                <p class="text-code-white">="</p>
                <p class="text-code-green">laravel</p>
                <p class="text-code-white">"</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">APP_ENV</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">local</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">APP_KEY</p>
                <p class="text-code-white">=</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">APP_DEBUG</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">true</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">APP_URL</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">http://me.test</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">LOG_CHANNEL</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">stack</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">LOG_DEPRECATIONS_CHANNEL</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">null</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">LOG_LEVEL</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">debug</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">DB_CONNECTION</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">mysql</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">DB_HOST</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">127.0.0.1</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">DB_PORT</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">3306</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">DB_DATABASE</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">laravel</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">DB_USERNAME</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">root</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">DB_PASSWORD</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green"></p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">BROADCAST_DRIVER</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">log</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">CACHE_DRIVER</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">file</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">FILESYSTEM_DISK</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">local</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">QUEUE_CONNECTION</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">sync</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">SESSION_DRIVER</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">database</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">SESSION_LIFETIME</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">120</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">MEMCACHED_HOST</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">127.0.0.1</p>
            </div>
            <div>&nbsp;</div>

            <div class="flex flex-wrap">
                <p class="text-code-fire">REDIS_HOST</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">127.0.0.1</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">REDIS_PASSWORD</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">null</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">REDIS_PORT</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">6379</p>
            </div>
            <div>&nbsp;</div>

            <div class="flex flex-wrap">
                <p class="text-code-fire">MAIL_MAILER</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">smtp</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">MAIL_HOST</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">mailhog</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">MAIL_PORT</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">1025</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">MAIL_USERNAME</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">null</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">MAIL_PASSWORD</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">null</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">MAIL_ENCRYPTION</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">null</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">MAIL_FROM_ADDRESS</p>
                <p class="text-code-white">="</p>
                <p class="text-code-green">hello@example.com"</p>
                <p class="text-code-white">"</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">MAIL_FROM_NAME</p>
                <p class="text-code-white">="</p>
                <p class="text-code-green">${APP_NAME}"</p>
                <p class="text-code-white">"</p>
            </div>
            <div>&nbsp;</div>

            <div class="flex flex-wrap">
                <p class="text-code-fire">AWS_ACCESS_KEY_ID</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green"></p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">AWS_SECRET_ACCESS_KEY</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green"></p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">AWS_DEFAULT_REGION</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">us-east-1</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">AWS_BUCKET</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green"></p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">AWS_USE_PATH_STYLE_ENDPOINT</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">false</p>
            </div>
            <div>&nbsp;</div>

            <div class="flex flex-wrap">
                <p class="text-code-fire">PUSHER_APP_ID</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green"></p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">PUSHER_APP_KEY</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green"></p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">PUSHER_APP_SECRET</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green"></p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">PUSHER_HOST</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green"></p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">PUSHER_PORT</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">443</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">PUSHER_SCHEME</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">https</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire"></p>
                <p class="text-code-fire">PUSHER_APP_CLUSTER</p>
                <p class="text-code-white">=</p>
                <p class="text-code-green">mt1</p>
            </div>
            <div>&nbsp;</div>

            <div class="flex flex-wrap">
                <p class="text-code-fire">VITE_PUSHER_APP_KEY</p>
                <p class="text-code-white">="</p>
                <p class="text-code-green">${PUSHER_APP_KEY}"</p>
                <p class="text-code-white">"</p>
            </div>

            <div class="flex flex-wrap">
                <p class="text-code-fire">VITE_PUSHER_HOST</p>
                <p class="text-code-white">="</p>
                <p class="text-code-green">${PUSHER_HOST}"</p>
                <p class="text-code-white">"</p>
            </div>

            <div class="flex flex-wrap">
                <p class="text-code-fire">VITE_PUSHER_PORT</p>
                <p class="text-code-white">="</p>
                <p class="text-code-green">${PUSHER_PORT}"</p>
                <p class="text-code-white">"</p>
            </div>

            <div class="flex flex-wrap">
                <p class="text-code-fire">VITE_PUSHER_SCHEME</p>
                <p class="text-code-white">="</p>
                <p class="text-code-green">${PUSHER_SCHEME}"</p>
                <p class="text-code-white">"</p>
            </div>

            <div class="flex flex-wrap">
                <p class="text-code-fire">VITE_PUSHER_APP_CLUSTER</p>
                <p class="text-code-white">="</p>
                <p class="text-code-green">${PUSHER_APP_CLUSTER}"</p>
                <p class="text-code-white">"</p>
            </div>

        </div>
    </SimpleLayout>
</template>
