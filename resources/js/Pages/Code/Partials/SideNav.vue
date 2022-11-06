<script setup>
import Commit from '@/Icons/Commit.vue';
import PullRequests from '@/Icons/PullRequests.vue';
import Bookmark from '@/Icons/Bookmark.vue';
import NPM from '@/Icons/NPM.vue';
import Structure from '@/Icons/Structure.vue';
import Folder from '@/Icons/Folder.vue';
</script>
<template>
    <div class="hidden md:flex flex-col justify-between items-end bg-menu-bg border-r-[1px] border-b-[1px] border-black/30 leading-4 font-sans font-medium">
        <div>
            <div class="pl-1 flex flex-col items-center bg-primary-bg pt-2 pb-1.5 space-y-1 cursor-pointer">
                <p class="text-white text-[0.6rem] transform rotate-180" style="writing-mode: vertical-rl">project</p>
                <Folder class="w-3 h-3"/>
            </div>
            <div class="pl-1 flex flex-col items-center pt-2 pb-1.5 space-y-1 hover:bg-primary-bg cursor-default">
                <p class="text-code-white text-[0.6rem] transform rotate-180" style="writing-mode: vertical-rl">Commit</p>
                <Commit class="w-3 h-3"/>
            </div>
            <div class="pl-1 flex flex-col items-center pt-2 pb-1.5 space-y-1 hover:bg-primary-bg cursor-default">
                <p class="text-code-white text-[0.6rem] transform rotate-180" style="writing-mode: vertical-rl">Pull requests</p>
                <PullRequests class="w-3 h-3"/>
            </div>
        </div>
        <div>
            <div class="pl-1 flex flex-col items-center pt-2 pb-1.5 space-y-1 hover:bg-primary-bg cursor-default">
                <p class="text-code-white text-[0.6rem] transform rotate-180" style="writing-mode: vertical-rl">Bookmarks</p>
                <Bookmark class="w-3 h-3"/>
            </div>
            <div class="pl-1 flex flex-col items-center pt-2 pb-1.5 space-y-1 hover:bg-primary-bg cursor-default">
                <p class="text-code-white text-[0.6rem] transform rotate-180" style="writing-mode: vertical-rl">npm</p>
                <NPM class="w-3 h-3"/>
            </div>
            <div class="pl-1 flex flex-col items-center pt-2 pb-1.5 space-y-1 hover:bg-primary-bg cursor-default">
                <p class="text-code-white text-[0.6rem] transform rotate-180" style="writing-mode: vertical-rl">Structure</p>
                <Structure class="w-3 h-3"/>
            </div>
        </div>
    </div>
</template>
