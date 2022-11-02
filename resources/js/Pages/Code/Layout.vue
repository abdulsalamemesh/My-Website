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
            <div class="flex flex-wrap">
                <p class="text-[#dfc087]">&lt;!DOCTYPE</p>
                <p class="text-[#a9b1b3]">&nbsp;html</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-[#dfc087]">&lt;html</p>
                <p class="text-[#a9b1b3]">&nbsp;lang</p>
                <p class="text-[#a7bb7c]">="</p>
                <p class="text-[#a9b1b3]">{</p>
                <p class="text-[#a9b1b3]">{&nbsp;</p>
                <p class="text-[#a9b1b3]">str_replace(</p>
                <p class="text-[#a7bb7c]">'_'</p>
                <p class="text-[#c96f1b]">,&nbsp;</p>
                <p class="text-[#a7bb7c]">'-'</p>
                <p class="text-[#c96f1b]">,&nbsp;</p>
                <p class="text-[#a9b1b3]">app()-></p>
                <p class="text-[#dfc087]">getLocale</p>
                <p class="text-[#a9b1b3]">())</p>
                <p class="text-[#a9b1b3]">&nbsp;}}</p>
                <p class="text-[#a7bb7c]">"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;head</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#dfc087]">&lt;meta</p>
                <p class="text-[#a9b1b3]">&nbsp;</p>
                <p class="text-[#a9b1b3]">charset</p>
                <p class="text-[#a7bb7c]">="utf-8"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#dfc087]">&lt;meta</p>
                <p class="text-[#a9b1b3]">&nbsp;</p>
                <p class="text-[#a9b1b3]">name</p>
                <p class="text-[#a7bb7c]">="viewport"</p>
                <p class="text-[#a9b1b3]">&nbsp;</p>
                <p class="text-[#a9b1b3]">content</p>
                <p class="text-[#a7bb7c]">="width=device-width, initial-scale=1"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#dfc087]">&lt;meta</p>
                <p class="text-[#a9b1b3]">&nbsp;</p>
                <p class="text-[#a9b1b3]">name</p>
                <p class="text-[#a7bb7c]">="csrf-token"</p>
                <p class="text-[#a9b1b3]">&nbsp;</p>
                <p class="text-[#a9b1b3]">content</p>
                <p class="text-[#a7bb7c]">="</p>
                <p class="text-[#a9b1b3]">{</p>
                <p class="text-[#a9b1b3]">{&nbsp;</p>
                <p class="text-[#a9b1b3]">csrf_token()</p>
                <p class="text-[#a9b1b3]">&nbsp;}}</p>
                <p class="text-[#a7bb7c]">"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#dfc087]">&lt;title</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#a9b1b3]">{</p>
                <p class="text-[#a9b1b3]">{&nbsp;</p>
                <p class="text-[#a9b1b3]">config('app.name', 'Laravel')</p>
                <p class="text-[#a9b1b3]">&nbsp;}}</p>
                <p class="text-[#dfc087]">&lt;/title&gt;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex text-[#505759]" :class="paddingLevel(2)">
                <div>&lt;!</div>
                <div>-- Fonts --</div>
                <div>&gt;</div>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#dfc087]">&lt;link</p>
                <p class="text-[#a9b1b3]">&nbsp;</p>
                <p class="text-[#a9b1b3]">rel</p>
                <p class="text-[#a7bb7c]">="stylesheet"</p>
                <p class="text-[#a9b1b3]">&nbsp;</p>
                <p class="text-[#a9b1b3]">href</p>
                <p class="text-[#a7bb7c]">="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex text-[#505759]" :class="paddingLevel(2)">
                <div>&lt;!</div>
                <div>-- tailwindcss jit scripts --</div>
                <div>&gt;</div>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#dfc087]">&lt;script</p>
                <p class="text-[#a9b1b3]">&nbsp;</p>
                <p class="text-[#a9b1b3]">src</p>
                <p class="text-[#a7bb7c]">="https://cdn.tailwindcss.com"</p>
                <p class="text-[#dfc087]">&gt;</p>
                <p class="text-[#dfc087]">&lt;/script&gt;</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;/head</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;body</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-[#dfc087]">&lt;div</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="font-sans text-gray-900 antialiased bg-gray-100 h-screen overview-y-auto"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-[#dfc087]">&lt;div</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="container mx-auto sm:px-4 md:px-6 lg:px-8"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(4)">
                <p class="text-[#dfc087]">&lt;div</p>
                <p class="text-[#a9b1b3]">&nbsp;class</p>
                <p class="text-[#a7bb7c]">="py-8"</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(5)">
                <p class="text-[#a9b1b3]">{</p>
                <p class="text-[#a9b1b3]">{&nbsp;</p>
                <p class="text-[#86698a]">$slot</p>
                <p class="text-[#a9b1b3]">&nbsp;}}</p>
            </div>
            <div class="text-[#dfc087]" :class="paddingLevel(4)">&lt;/div&gt;</div>
            <div class="text-[#dfc087]" :class="paddingLevel(3)">&lt;/div&gt;</div>
            <div class="text-[#dfc087]" :class="paddingLevel(2)">&lt;/div&gt;</div>

            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-[#dfc087]">&lt;/body</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-[#dfc087]">&lt;/html</p>
                <p class="text-[#dfc087]">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
