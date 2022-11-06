<script setup>
import Branch from '@/Icons/Branch.vue';
import ToDo from '@/Icons/ToDo.vue';
import Problem from '@/Icons/Problem.vue';
import Terminal from '@/Icons/Terminal.vue';
import Run from '@/Icons/Run.vue';
import {showTestTerminal} from "../../../store";

</script>

<template>
    <div
        class="bg-menu-bg border-b-[1px] border-gray-500/20 hidden md:flex items-start justify-start w-full max-w-full text-[0.6rem] pl-5 leading-4  font-sans font-medium">
        <div class="pt-0.5 flex items-center justify-center max-w-fit hover:bg-primary-bg pr-2 pl-1.5 space-x-1 cursor-default">
            <Branch class="h-3 w-3"/>
            <p class="text-code-white text-[0.6rem]">Git</p>
        </div>
        <div class="pt-0.5 flex items-center justify-center max-w-fit hover:bg-primary-bg pr-2 pl-1.5 space-x-1 cursor-default"
             :class="{'bg-primary-bg' : showTestTerminal}"
             @click="showTestTerminal = !showTestTerminal">
            <Run class="h-3 w-3 text-[#adb5b8] fill-current"/>
            <p class="text-code-white text-[0.6rem]">Run</p>
        </div>
        <div class="pt-0.5 flex items-center justify-center max-w-fit hover:bg-primary-bg pr-2 pl-1.5 space-x-1 cursor-default">
            <ToDo class="h-3 w-3"/>
            <p class="text-code-white text-[0.6rem]">TODO</p>
        </div>
        <div class="pt-0.5 flex items-center justify-center max-w-fit hover:bg-primary-bg pr-2 pl-1.5 space-x-1 cursor-default">
            <Problem class="h-3 w-3"/>
            <p class="text-code-white text-[0.6rem]">Problems</p>
        </div>
        <div class="pt-0.5 flex items-center justify-center max-w-fit hover:bg-primary-bg pr-2 pl-1.5 space-x-1 cursor-default">
            <Terminal class="h-3 w-3"/>
            <p class="text-code-white text-[0.6rem]">Terminal</p>
        </div>
    </div>
    <div class="bg-menu-bg hidden md:flex items-start justify-end w-full max-w-full text-[0.6rem] pr-5 leading-4 font-sans font-medium">
        <p class="text-code-white text-[0.6rem] leading-4 flex items-center"><span class="mr-0.5">PHP:8.0 LF UTF-8 </span>
            <Branch class="h-2.5 w-2.5"/>
            <span>Master</span></p>
    </div>
</template>
