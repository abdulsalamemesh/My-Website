<script setup>
import {Head, Link} from '@inertiajs/inertia-vue3';
import SourceRoot from '@/Icons/SourceRoot.vue';
import ResourceRoot from '@/Icons/ResourceRoot.vue';
import TestRoot from '@/Icons/TestRoot.vue';
import ExcludeRoot from '@/Icons/ExcludeRoot.vue';
import Folder from '@/Icons/Folder.vue';
import Blade from '@/Icons/Blade.vue';
import DotFile from '@/Icons/DotFile.vue';
import PHP from '@/Icons/PHP.vue';
import JSONFile from '@/Icons/JSONFile.vue';
import TestUnitFile from '@/Icons/TestUnitFile.vue';
import JSFile from '@/Icons/JSFile.vue';
import Markdown from '@/Icons/Markdown.vue';
import ChevronRight from '@/Icons/ChevronRight.vue';
import ChevronDown from '@/Icons/ChevronDown.vue';

import LangaugeSelector from '@/Layouts/LangaugeSelector.vue'
import {setActiveFiles, activeFilesList, removeFromActiveFilesList, toggleFolder, openedFolders} from "../store";


function message() {
    alert('I know you are programmer but this is still a website and not and IDE 😉')
}
</script>

<template>
    <div class="font-custom">
        <Head title="Abdulsalam Emesh"/>
        <div class="md:h-screen md:w-screen bg-[#2b2b2b] font-custom text-sm flex flex-col md:flex-row overflow-hidden">
            <div class="bg-[#3c3f41] min-w-[250px] border-r-[1px] border-black/30 text-[0.7rem] flex flex-col">
                <div class="h-7 flex items-center border-b-[1px] border-black/30 px-2">
                    <p class="text-[#adb5b8]">Project</p>
                </div>
                <div class="grow border-b-[1px] border-black/30 overflow-x-hidden overflow-y-auto custom-folders-scrollbar py-2 sm:pt-0 cursor-default font-sans font-semibold">
                    <div class="text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronDown classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>me</span>
                    </div>
                    <!--APP-->
                    <div @click="toggleFolder('app',!openedFolders.includes('app'))"
                         class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <div>
                            <ChevronDown v-show="openedFolders.includes('app')" classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                            <ChevronRight v-show="!openedFolders.includes('app')" classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        </div>
                        <SourceRoot classes="h-4 w-4"/>
                        <span>app</span>
                    </div>
                    <div v-show="openedFolders.includes('app')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>Actions</span>
                    </div>
                    <div v-show="openedFolders.includes('app')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>Console</span>
                    </div>
                    <div v-show="openedFolders.includes('app')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>Exceptions</span>
                    </div>
                    <div v-show="openedFolders.includes('app')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>Http</span>
                    </div>
                    <div v-show="openedFolders.includes('app')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>Models</span>
                    </div>
                    <div v-show="openedFolders.includes('app')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>Exceptions</span>
                    </div>
                    <div v-show="openedFolders.includes('app')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>Http</span>
                    </div>
                    <div v-show="openedFolders.includes('app')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>Models</span>
                    </div>
                    <div v-show="openedFolders.includes('app')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>Exceptions</span>
                    </div>
                    <div v-show="openedFolders.includes('app')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>Http</span>
                    </div>
                    <div v-show="openedFolders.includes('app')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>Models</span>
                    </div>
                    <div v-show="openedFolders.includes('app')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>Providers</span>
                    </div>
                    <!--APP-->
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>bootstrap</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>config</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <ResourceRoot classes="h-4 w-4"/>
                        <span>database</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>lang</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <ExcludeRoot classes="h-4 w-4"/>
                        <span>node_modules</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <ExcludeRoot classes="h-4 w-4"/>
                        <span>public</span>
                    </div>
                    <div @click="toggleFolder('resources',!openedFolders.includes('resources'))"
                         class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <div>
                            <ChevronDown v-show="openedFolders.includes('resources')" classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                            <ChevronRight v-show="!openedFolders.includes('resources')" classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        </div>
                        <ResourceRoot classes="h-4 w-4"/>
                        <span>resources</span>
                    </div>
                    <div v-show="openedFolders.includes('resources')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>css</span>
                    </div>
                    <div v-show="openedFolders.includes('resources')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>js</span>
                    </div>
                    <div v-show="openedFolders.includes('resources')" @click="message()"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>markdown</span>
                    </div>
                    <!--         Views           -->
                    <div v-show="openedFolders.includes('resources')" @click="toggleFolder('views',!openedFolders.includes('views'))"
                         class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <div>
                            <ChevronDown v-show="openedFolders.includes('views')" classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                            <ChevronRight v-show="!openedFolders.includes('views')" classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        </div>
                        <Folder classes="h-4 w-4"/>
                        <span>views</span>
                    </div>
                    <Link v-show="openedFolders.includes('views')" :href="route('index')" :class="[route().current('index') ? 'bg-[#4b6eaf]' : '']" @click="setActiveFiles('index')"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-default">
                        <Blade classes="h-4 w-4"/>
                        <span>index.blade.php</span>
                    </Link>
                    <Link v-show="openedFolders.includes('views')" :href="route('me')" :class="[route().current('me') ? 'bg-[#4b6eaf]' : '']" @click="setActiveFiles('me')"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-default">
                        <Blade classes="h-4 w-4"/>
                        <span>me.blade.php</span>
                    </Link>
                    <Link v-show="openedFolders.includes('views')" :href="route('work')" :class="[route().current('work') ? 'bg-[#4b6eaf]' : '']" @click="setActiveFiles('work')"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-default">
                        <Blade classes="h-4 w-4"/>
                        <span>work.blade.php</span>
                    </Link>
                    <Link v-show="openedFolders.includes('views')" :href="route('education')" :class="[route().current('education') ? 'bg-[#4b6eaf]' : '']"
                          @click="setActiveFiles('education')"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-default">
                        <Blade classes="h-4 w-4"/>
                        <span>education.blade.php</span>
                    </Link>
                    <Link v-show="openedFolders.includes('views')" :href="route('skill')" :class="[route().current('skill') ? 'bg-[#4b6eaf]' : '']" @click="setActiveFiles('skill')"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-default">
                        <Blade classes="h-4 w-4"/>
                        <span>skill.blade.php</span>
                    </Link>
                    <Link v-show="openedFolders.includes('views')" :href="route('project')" :class="[route().current('project') ? 'bg-[#4b6eaf]' : '']"
                          @click="setActiveFiles('project')"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-default">
                        <Blade classes="h-4 w-4"/>
                        <span>project.blade.php</span>
                    </Link>
                    <Link v-show="openedFolders.includes('views')" :href="route('other-information')" :class="[route().current('other-information') ? 'bg-[#4b6eaf]' : '']"
                          @click="setActiveFiles('other-information')"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-max cursor-default">
                        <Blade classes="h-4 w-4"/>
                        <span>other-information.blade.php</span>
                    </Link>
                    <Link v-show="openedFolders.includes('views')" :href="route('layout')" :class="[route().current('layout') ? 'bg-[#4b6eaf]' : '']"
                          @click="setActiveFiles('layout')"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-default">
                        <Blade classes="h-4 w-4"/>
                        <span>layout.blade.php</span>
                    </Link>
                    <!--         Routes           -->
                    <div @click="toggleFolder('routes',!openedFolders.includes('routes'))"
                         class=" pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 w-full cursor-default">
                        <div>
                            <ChevronDown v-show="openedFolders.includes('routes')" classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                            <ChevronRight v-show="!openedFolders.includes('routes')" classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        </div>
                        <Folder classes="h-4 w-4"/>
                        <span>routs</span>
                    </div>
                    <Link v-show="openedFolders.includes('routes')" :href="route('web')" :class="[route().current('web') ? 'bg-[#4b6eaf]' : '']"
                          @click="setActiveFiles('web')"
                          class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-default">
                        <PHP/>
                        <span>web.php</span>
                    </Link>
                    <Link v-show="openedFolders.includes('routes')" :href="route('console-route')" :class="[route().current('console-route') ? 'bg-[#4b6eaf]' : '']"
                          @click="setActiveFiles('console-route')"
                          class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-default">
                        <PHP/>
                        <span>console.php</span>
                    </Link>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <ExcludeRoot classes="h-4 w-4"/>
                        <span>storage</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <TestRoot classes="h-4 w-4"/>
                        <span>tests</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <ChevronRight classes="h-2.5 w-2.5 text-[#adb5b8] fill-current"/>
                        <Folder classes="h-4 w-4"/>
                        <span>vendor</span>
                    </div>
                    <!--         .env           -->
                    <Link :href="route('env')" :class="[route().current('env') ? 'bg-[#4b6eaf]' : '']" @click="setActiveFiles('env')"
                          class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-default">
                        <DotFile classes="h-4 w-4"/>
                        <span>.env</span>
                    </Link>
                    <!--         Fakes           -->
                    <Link :href="route('env-example')" :class="[route().current('env-example') ? 'bg-[#4b6eaf]' : '']" @click="setActiveFiles('env-example')"
                          class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-default">
                        <DotFile classes="h-4 w-4"/>
                        <span>.env.example</span>
                    </Link>
                    <Link :href="route('gitignore-root')" :class="[route().current('gitignore-root') ? 'bg-[#4b6eaf]' : '']" @click="setActiveFiles('gitignore-root')"
                          class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-default">
                        <DotFile classes="h-4 w-4"/>
                        <span>.gitignore</span>
                    </Link>
                    <div @click="message()" class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <PHP classes="h-4 w-4"/>
                        <span>artisan</span>
                    </div>
                    <div @click="message()" class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSONFile classes="h-4 w-4"/>
                        <span>composer.json</span>
                    </div>
                    <div @click="message()" class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSONFile classes="h-4 w-4"/>
                        <span>composer.lock</span>
                    </div>
                    <div @click="message()" class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSONFile classes="h-4 w-4"/>
                        <span>package.json</span>
                    </div>
                    <div @click="message()" class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSONFile classes="h-4 w-4"/>
                        <span>package-lock.json</span>
                    </div>
                    <div @click="message()" class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <TestUnitFile classes="h-4 w-4"/>
                        <span>phpunit.xml</span>
                    </div>
                    <div @click="message()" class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSFile classes="h-4 w-4"/>
                        <span>postcss.config.js</span>
                    </div>
                    <div @click="message()" class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <Markdown classes="h-4 w-4"/>
                        <span>README.md</span>
                    </div>
                    <div @click="message()" class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSFile classes="h-4 w-4"/>
                        <span>tailwind.config.js</span>
                    </div>
                    <div @click="message()" class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSFile classes="h-4 w-4"/>
                        <span>vite.config.js</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col grow text-xs">
                <div class="bg-[#3c3f41] border-b-[1px] border-black/30 min-h-[1.75rem] text-xs flex items-center justify-between max-w-full">
                    <div class="flex">
                        <template v-for="file in activeFilesList">
                            <div class="w-max h-full flex justify-center items-center text-[#adb5b8] p-1"
                                 :class="[route().current(file.link) ? 'bg-[#4e5254] border-b-2 border-blue-400':'border-b-2 border-transparent' ]">
                                <component :is="file.icon" :classes="'h-3 w-3 mr-0.5'"/>
                                <Link :href="route(file.link)" class="mr-1 text-[0.6rem] tracking-tight">{{ file.name }}</Link>
                                <div @click.self="removeFromActiveFilesList(file.link)" class="cursor-pointer text-gray-500">x</div>
                            </div>
                        </template>
                    </div>
                    <div class="mr-4 grow justify-end flex min-w-fit">
                        <LangaugeSelector/>
                    </div>
                </div>
                <div class="flex grow overflow-x-hidden md:overflow-y-auto bg-[#2b2b2b]">
                    <!-- Page Heading -->
                    <header
                        class="bg-[#313335] pl-2 pr-4 pt-1 border-r-[1px] border-[#5f6364] overflow-y-scroll hidde-scrollbar scroll-js md:h-full grow md:grow-0 pb-2 text-xs">
                        <template v-for="number in 150">
                            <div class="text-[#5f6364] leading-5">{{ number }}</div>
                        </template>
                    </header>

                    <!-- Page Content -->
                    <slot/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>
