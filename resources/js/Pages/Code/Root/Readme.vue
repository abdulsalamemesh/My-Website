<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onMounted, onBeforeUnmount} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(35, 18)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="Abdulsalam Emesh">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">
            <div class="flex flex-wrap">
                <p class="text-code-fire">#&nbsp;</p>
                <p class="text-code-purple">{{ __('Hallo dear programmer') }}</p>
            </div>
            <div>&nbsp;</div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">##&nbsp;</p>
                <p class="text-code-purple">{{ __('I just wanted to have some fun and create the website in your well-known environment') + ' 😉' }}</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-fire">##&nbsp;</p>
                <p class="text-code-purple">{{ __('This is made for you. Have fun!!') }}</p>
            </div>
            <div>&nbsp;</div>
            <p class="text-code-white">{{ __('Start with resources/views/me.blade.php to get to know me.') }}</p>
            <div>&nbsp;</div>
            <p class="text-code-white">{{ __('In resources/views/work.blade.php you can read about my work experience.') }}</p>
            <div>&nbsp;</div>
            <p class="text-code-white">{{ __('In resources/views/education.blade.php you can read about my education.') }}</p>
            <div>&nbsp;</div>
            <p class="text-code-white">{{ __('In resources/views/skill.blade.php you can find out what I can do.') }}</p>
            <div>&nbsp;</div>
            <p class="text-code-white">{{ __('In resources/views/project.blade.php you can find out what I build.') }}</p>
            <div>&nbsp;</div>
            <p class="text-code-white">{{ __('In resources/views/other-information.blade.php you can find out what I do in my free time and did I accomplish.') }}</p>
        </div>
    </SimpleLayout>
</template>
