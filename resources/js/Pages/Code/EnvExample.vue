<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onMounted} from "vue";
import {syncScroll} from "../../store";
onMounted(() => {
    syncScroll()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">APP_NAME</p>
                <p class="text-[#a9b1b3]">="</p>
                <p class="text-[#576950]">laravel</p>
                <p class="text-[#a9b1b3]">"</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">APP_ENV</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">local</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">APP_KEY</p>
                <p class="text-[#a9b1b3]">=</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">APP_DEBUG</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">true</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">APP_URL</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">http://me.test</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">LOG_CHANNEL</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">stack</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">LOG_DEPRECATIONS_CHANNEL</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">null</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">LOG_LEVEL</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">debug</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">DB_CONNECTION</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">mysql</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">DB_HOST</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">127.0.0.1</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">DB_PORT</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">3306</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">DB_DATABASE</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">laravel</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">DB_USERNAME</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">root</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">DB_PASSWORD</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]"></p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">BROADCAST_DRIVER</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">log</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">^CACHE_DRIVER</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">file</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">FILESYSTEM_DISK</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">local</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">QUEUE_CONNECTION</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">sync</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">SESSION_DRIVER</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">database</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">SESSION_LIFETIME</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">120</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">MEMCACHED_HOST</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">127.0.0.1</p>
            </div>
            <div>&nbsp;</div>

            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">REDIS_HOST</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">127.0.0.1</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">REDIS_PASSWORD</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">null</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">REDIS_PORT</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">6379</p>
            </div>
            <div>&nbsp;</div>

            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">MAIL_MAILER</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">smtp</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">MAIL_HOST</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">mailhog</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">MAIL_PORT</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">1025</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">MAIL_USERNAME</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">null</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">MAIL_PASSWORD</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">null</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">MAIL_ENCRYPTION</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">null</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">MAIL_FROM_ADDRESS</p>
                <p class="text-[#a9b1b3]">="</p>
                <p class="text-[#576950]">hello@example.com"</p>
                <p class="text-[#a9b1b3]">"</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">MAIL_FROM_NAME</p>
                <p class="text-[#a9b1b3]">="</p>
                <p class="text-[#576950]">${APP_NAME}"</p>
                <p class="text-[#a9b1b3]">"</p>
            </div>
            <div>&nbsp;</div>

            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">AWS_ACCESS_KEY_ID</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]"></p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">AWS_SECRET_ACCESS_KEY</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]"></p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">AWS_DEFAULT_REGION</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">us-east-1</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">AWS_BUCKET</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]"></p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">AWS_USE_PATH_STYLE_ENDPOINT</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">false</p>
            </div>
            <div>&nbsp;</div>

            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">PUSHER_APP_ID</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]"></p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">PUSHER_APP_KEY</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]"></p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">PUSHER_APP_SECRET</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]"></p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">PUSHER_HOST</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]"></p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">PUSHER_PORT</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">443</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">PUSHER_SCHEME</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">https</p>
            </div>
            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]"></p>
                <p class="text-[#c96f1b]">PUSHER_APP_CLUSTER</p>
                <p class="text-[#a9b1b3]">=</p>
                <p class="text-[#576950]">mt1</p>
            </div>
            <div>&nbsp;</div>

            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">VITE_PUSHER_APP_KEY</p>
                <p class="text-[#a9b1b3]">="</p>
                <p class="text-[#576950]">${PUSHER_APP_KEY}"</p>
                <p class="text-[#a9b1b3]">"</p>
            </div>

            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">VITE_PUSHER_HOST</p>
                <p class="text-[#a9b1b3]">="</p>
                <p class="text-[#576950]">${PUSHER_HOST}"</p>
                <p class="text-[#a9b1b3]">"</p>
            </div>

            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">VITE_PUSHER_PORT</p>
                <p class="text-[#a9b1b3]">="</p>
                <p class="text-[#576950]">${PUSHER_PORT}"</p>
                <p class="text-[#a9b1b3]">"</p>
            </div>

            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">VITE_PUSHER_SCHEME</p>
                <p class="text-[#a9b1b3]">="</p>
                <p class="text-[#576950]">${PUSHER_SCHEME}"</p>
                <p class="text-[#a9b1b3]">"</p>
            </div>

            <div class="flex flex-nowrap whitespace-nowrap md:flex-wrap">
                <p class="text-[#c96f1b]">VITE_PUSHER_APP_CLUSTER</p>
                <p class="text-[#a9b1b3]">="</p>
                <p class="text-[#576950]">${PUSHER_APP_CLUSTER}"</p>
                <p class="text-[#a9b1b3]">"</p>
            </div>

        </div>
    </SimpleLayout>
</template>
