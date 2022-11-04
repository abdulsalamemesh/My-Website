<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";
onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(43, 30)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-code-gold">&lt;!DOCTYPE</p>
                <p class="text-code-white">&nbsp;html</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-gold">&lt;html</p>
                <p class="text-code-white">&nbsp;lang</p>
                <p class="text-code-class">="</p>
                <p class="text-code-white">{</p>
                <p class="text-code-white">{&nbsp;</p>
                <p class="text-code-white">str_replace(</p>
                <p class="text-code-class">'_'</p>
                <p class="text-code-fire">,&nbsp;</p>
                <p class="text-code-class">'-'</p>
                <p class="text-code-fire">,&nbsp;</p>
                <p class="text-code-white">app()-></p>
                <p class="text-code-gold">getLocale</p>
                <p class="text-code-white">())</p>
                <p class="text-code-white">&nbsp;}}</p>
                <p class="text-code-class">"</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;head</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;meta</p>
                <p class="text-code-white">&nbsp;</p>
                <p class="text-code-white">charset</p>
                <p class="text-code-class">="utf-8"</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;meta</p>
                <p class="text-code-white">&nbsp;</p>
                <p class="text-code-white">name</p>
                <p class="text-code-class">="viewport"</p>
                <p class="text-code-white">&nbsp;</p>
                <p class="text-code-white">content</p>
                <p class="text-code-class">="width=device-width, initial-scale=1"</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;meta</p>
                <p class="text-code-white">&nbsp;</p>
                <p class="text-code-white">name</p>
                <p class="text-code-class">="csrf-token"</p>
                <p class="text-code-white">&nbsp;</p>
                <p class="text-code-white">content</p>
                <p class="text-code-class">="</p>
                <p class="text-code-white">{</p>
                <p class="text-code-white">{&nbsp;</p>
                <p class="text-code-white">csrf_token()</p>
                <p class="text-code-white">&nbsp;}}</p>
                <p class="text-code-class">"</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;title</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{</p>
                <p class="text-code-white">{&nbsp;</p>
                <p class="text-code-white">config('app.name', 'Laravel')</p>
                <p class="text-code-white">&nbsp;}}</p>
                <p class="text-code-gold">&lt;/title&gt;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex text-muted-gray" :class="paddingLevel(2)">
                <div>&lt;!</div>
                <div>-- Fonts --</div>
                <div>&gt;</div>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;link</p>
                <p class="text-code-white">&nbsp;</p>
                <p class="text-code-white">rel</p>
                <p class="text-code-class">="stylesheet"</p>
                <p class="text-code-white">&nbsp;</p>
                <p class="text-code-white">href</p>
                <p class="text-code-class">="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex text-muted-gray" :class="paddingLevel(2)">
                <div>&lt;!</div>
                <div>-- tailwindcss jit scripts --</div>
                <div>&gt;</div>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;script</p>
                <p class="text-code-white">&nbsp;</p>
                <p class="text-code-white">src</p>
                <p class="text-code-class">="https://cdn.tailwindcss.com"</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-gold">&lt;/script&gt;</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;/head</p>
                <p class="text-code-gold">&gt;</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;body</p>
                <p class="text-code-gold">&gt;</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;div</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="font-sans text-gray-900 antialiased bg-gray-100 h-screen overview-y-auto"</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-gold">&lt;div</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="container mx-auto sm:px-4 md:px-6 lg:px-8"</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(4)">
                <p class="text-code-gold">&lt;div</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="py-8"</p>
                <p class="text-code-gold">&gt;</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(5)">
                <p class="text-code-white">{</p>
                <p class="text-code-white">{&nbsp;</p>
                <p class="text-code-purple">$slot</p>
                <p class="text-code-white">&nbsp;}}</p>
            </div>
            <div class="text-code-gold" :class="paddingLevel(4)">&lt;/div&gt;</div>
            <div class="text-code-gold" :class="paddingLevel(3)">&lt;/div&gt;</div>
            <div class="text-code-gold" :class="paddingLevel(2)">&lt;/div&gt;</div>

            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;/body</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-gold">&lt;/html</p>
                <p class="text-code-gold">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
