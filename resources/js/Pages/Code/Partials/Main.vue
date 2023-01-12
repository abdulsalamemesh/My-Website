<script setup>
import {Link} from '@inertiajs/inertia-vue3';
import PHPUnit from '@/Icons/PHPUnit.vue';
import Bug from '@/Icons/Bug.vue';
import Coverage from '@/Icons/Coverage.vue';
import DebugListen from '@/Icons/DebugListen.vue';
import Stop from '@/Icons/Stop.vue';
import LangaugeSelector from '@/Layouts/LangaugeSelector.vue'
import Run from '@/Icons/Run.vue';
import {activeFilesList, removeFromActiveFilesList, rowsCount, showTestTerminal} from "../../../store";
</script>
<template>
    <div class="flex flex-col grow text-xs">
        <div class="bg-menu-bg border-b-[1px] border-black/30 min-h-[1.75rem] text-xs flex items-center justify-between max-w-full">
            <div class="flex h-full" v-if="activeFilesList.length > 0">
                <template v-for="file in activeFilesList">
                    <div class="w-max h-full flex justify-center items-center text-menu-font px-1 space-x-1"
                         :class="[route().current(file.link) ? 'bg-[#4e5254] border-b-2 border-blue-400':'border-b-2 border-transparent' ]">
                        <component :is="file.icon" :classes="'h-3.5 w-3.5'"/>
                        <Link :href="route(file.link)" class="text-[0.65rem] tracking-tight">{{ file.name }}</Link>
                        <div @click.self="removeFromActiveFilesList(file.link)" class="cursor-pointer text-gray-500">x</div>
                    </div>
                </template>
            </div>
            <div class="mr-4 grow justify-end items-center flex min-w-fit space-x-2">
                <div class="hidden md:flex items-center border border-muted-gray rounded px-2 cursor-pointer" @click="showTestTerminal = true">
                    <PHPUnit class="w-3 h-3 mr-0.5"/>
                    <p class="text-code-white text-[0.7rem] inline-block">phpunit.xml</p>
                </div>
                <Run class="hidden md:block w-4 h-4 text-green-500 fill-current cursor-pointer" @click="showTestTerminal = true"/>
                <Bug class="hidden md:block w-4 h-4"/>
                <Coverage class="hidden md:block w-4 h-4"/>
                <DebugListen class="hidden md:block w-4 h-4"/>
                <Stop class="hidden md:block w-4 h-4"/>
                <LangaugeSelector/>
                <Link :href="route('home')">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 h-4 fill-code-white hover:fill-white"><path
                            d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
                    </svg>
                </Link>
            </div>
        </div>
        <div class="flex grow overflow-x-hidden md:overflow-y-auto bg-primary-bg">
            <!-- Page Heading -->
            <header
                class="bg-secondary-bg pl-2 pr-4 pt-1 border-r-[1px] border-muted-gray overflow-y-scroll hidde-scrollbar scroll-js md:h-full grow md:grow-0 pb-2 text-xs">
                <template v-for="number in rowsCount">
                    <div class="text-muted-gray leading-5">{{ number }}</div>
                </template>
            </header>

            <!-- Page Content -->
            <slot/>
        </div>
        <div v-if="activeFilesList.length > 0" class="bg-secondary-bg border-t-[1px] border-gray-500/20 text-code-white text-[0.6rem] leading-5 pl-10 hidden md:block">
            <template v-for="file in activeFilesList">
                <template v-if="file.link === route().current()">
                    {{ file.name }}
                </template>
            </template>
        </div>
    </div>
</template>
