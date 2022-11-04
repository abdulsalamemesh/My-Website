<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {ref, onMounted, onBeforeMount, onBeforeUnmount} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(50, 20)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-code-gold">&lt;x-layout</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;h1</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="font-bold text-lg text-indigo-500"</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('Hallo dear programmer') }}</p>
                <p class="text-code-gold">&lt;/h1&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;h2</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="font-bold text-md text-indigo-500"</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('I just wanted to have some fun and create the website in your well-known environment') + ' 😉' }}</p>
                <p class="text-code-gold">&lt;/h2&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;h2</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="font-bold text-md text-indigo-500"</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('This is made for you. Have fun!!') }}</p>
                <p class="text-code-gold">&lt;/h2&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;ol</p>
                <p class="text-code-white">&nbsp;class</p>
                <p class="text-code-class">="text-base list-disc space-y-1 my-2</p>
                <p class="text-code-gold">&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;li</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('Start with resources/views/me.blade.php to get to know me.') }}</p>
                <p class="text-code-gold">&lt;/li&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;li</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('In resources/views/work.blade.php you can read about my work experience.') }}</p>
                <p class="text-code-gold">&lt;/li&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;li</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('In resources/views/education.blade.php you can read about my education.') }}</p>
                <p class="text-code-gold">&lt;/li&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;li</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('In resources/views/skill.blade.php you can find out what I can do.') }}</p>
                <p class="text-code-gold">&lt;/li&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;li</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('In resources/views/project.blade.php you can find out what I build.') }}</p>
                <p class="text-code-gold">&lt;/li&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;li</p>
                <p class="text-code-gold">&gt;</p>
                <p class="text-code-white">{{ __('In resources/views/other-information.blade.php you can find out what I do in my free time and did I accomplish.') }}</p>
                <p class="text-code-gold">&lt;/li&gt;</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;/ol&gt;</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-gold">&lt;/x-layout</p>
                <p class="text-code-gold">&gt;</p>
            </div>
        </div>
    </SimpleLayout>
</template>
