<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(46, 46)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-code-fire">import&nbsp;</p>
                <p class="text-code-purple">_&nbsp;</p>
                <p class="text-code-fire">from&nbsp;</p>
                <p class="text-code-green">'lodash'</p>
                <p class="text-code-fire">;</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-purple">window</p>
                <p class="text-code-white">.</p>
                <p class="text-code-purple">_&nbsp;</p>
                <p class="text-code-white">=&nbsp;</p>
                <p class="text-code-purple">_</p>
                <p class="text-code-fire">;</p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-code-green-comment">
                    /** <br>
                    * We'll load the axios HTTP library which allows us to easily issue requests <br>
                    * to our Laravel back-end. This library automatically handles sending the <br>
                    * CSRF token as a header based on the value of the "XSRF" token cookie. <br>
                    */ <br>
                </p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-code-fire">import&nbsp;</p>
                <p class="text-code-purple">axios&nbsp;</p>
                <p class="text-code-fire">from&nbsp;</p>
                <p class="text-code-green">'axios'</p>
                <p class="text-code-fire">;</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-purple">window</p>
                <p class="text-code-white">.</p>
                <p class="text-code-purple">axios&nbsp;</p>
                <p class="text-code-white">=&nbsp;</p>
                <p class="text-code-purple">axios</p>
                <p class="text-code-fire">;</p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-code-purple">window</p>
                <p class="text-code-white">.</p>
                <p class="text-code-purple">axios</p>
                <p class="text-code-white">.</p>
                <p class="text-code-purple">defaults</p>
                <p class="text-code-white">.</p>
                <p class="text-code-purple">headers</p>
                <p class="text-code-white">.</p>
                <p class="text-code-purple">common</p>
                <p class="text-code-white">[</p>
                <p class="text-code-green">'X-Requested-With'</p>
                <p class="text-code-white">] =&nbsp;</p>
                <p class="text-code-green">'XMLHttpRequest'</p>
                <p class="text-code-fire">;</p>

            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-code-green-comment">
                    /** <br>
                    * Echo exposes an expressive API for subscribing to channels and listening <br>
                    * for events that are broadcast by Laravel. Echo and event broadcasting <br>
                    * allows your team to easily build robust real-time web applications. <br>
                    */ <br>
                </p>
            </div>
            <br>

            <div class="flex flex-wrap">
                <p class="text-muted-gray">// import&nbsp;</p>
                <p class="text-muted-gray">Echo from&nbsp;</p>
                <p class="text-muted-gray">'laravel-echo';</p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">// import&nbsp;</p>
                <p class="text-muted-gray">Pusher from&nbsp;</p>
                <p class="text-muted-gray">'pusher-js';</p>
            </div>
            <br>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">// window.Echo</p>
                <p class="text-muted-gray">&nbsp;=&nbsp; </p>
                <p class="text-muted-gray">new&nbsp;</p>
                <p class="text-muted-gray">Echo({</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">
                    // broadcaster: 'pusher',
                </p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">// key: import</p>
                <p class="text-muted-gray">.meta.</p>
                <p class="text-muted-gray">env.</p>
                <p class="text-muted-gray">VITE_PUSHER_APP_KEY,</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">// wsHost: import.</p>
                <p class="text-muted-gray">meta.</p>
                <p class="text-muted-gray">env.</p>
                <p class="text-muted-gray">VITE_PUSHER_HOST ?</p>
                <p class="text-muted-gray">? `ws-${</p>
                <p class="text-muted-gray">import.</p>
                <p class="text-muted-gray">meta.env.</p>
                <p class="text-muted-gray">VITE_PUSHER_APP_CLUSTER}</p>
                <p class="text-muted-gray">.pusher.com`,</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">// wsPort: import.</p>
                <p class="text-muted-gray">meta.env.</p>
                <p class="text-muted-gray">VITE_PUSHER_PORT ?? 80,</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">// wssPort: import.</p>
                <p class="text-muted-gray">meta.env.</p>
                <p class="text-muted-gray">VITE_PUSHER_PORT ?? 443,</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">// forceTLS: (import.</p>
                <p class="text-muted-gray">meta.env.</p>
                <p class="text-muted-gray">VITE_PUSHER_SCHEME ?</p>
                <p class="text-muted-gray">? 'https') === 'https',</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-muted-gray">
                    // enabledTransports: ['ws', 'wss'], <br>
                    // }); <br>
                </p>
            </div>
        </div>
    </SimpleLayout>
</template>
