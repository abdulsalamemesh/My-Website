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
import Trait from '@/Icons/Trait.vue';
import AbstractClass from '@/Icons/AbstractClass.vue';
import PHPClass from '@/Icons/PHPClass.vue';
import Run from '@/Icons/Run.vue';
import Commit from '@/Icons/Commit.vue';
import PullRequests from '@/Icons/PullRequests.vue';
import Bookmark from '@/Icons/Bookmark.vue';
import NPM from '@/Icons/NPM.vue';
import Structure from '@/Icons/Structure.vue';
import Branch from '@/Icons/Branch.vue';
import ToDo from '@/Icons/ToDo.vue';
import Problem from '@/Icons/Problem.vue';
import Terminal from '@/Icons/Terminal.vue';
import Project from '@/Icons/Project.vue';


import LangaugeSelector from '@/Layouts/LangaugeSelector.vue'
import {setActiveFiles, activeFilesList, removeFromActiveFilesList, toggleFolder, openedFolders, rowsCount} from "../store";


function message() {
    alert('I know you want to open the file but this is still a website and not and IDE 😉')
}
</script>

<template>
    <div class="font-custom">
        <Head title="Abdulsalam Emesh"/>
        <div class="md:h-screen max-h-screen md:w-screen bg-primary-bg font-custom text-sm flex flex-col">
            <div class="grow flex flex-col md:flex-row overflow-y-auto">
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
                <div class="bg-menu-bg min-w-[250px] border-r-[1px] border-black/30 text-[0.7rem] flex flex-col">
                    <div class="h-7 flex items-center border-b-[1px] border-black/30 px-2 flex font-sans space-x-1">
                        <Project classes="h-4 w-4 text-menu-font fill-current"/>
                        <p class="text-menu-font text-[0.75rem]">Project</p>
                    </div>
                    <div class="grow border-b-[1px] border-black/30 overflow-x-hidden overflow-y-auto custom-folders-scrollbar py-2 sm:pt-0 font-sans font-semibold leading-[1.125rem]">
                        <div class="text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronDown classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>me</span>
                        </div>
                        <!--APP-->
                        <div @click="toggleFolder('app',!openedFolders.includes('app'))"
                             class="pl-5 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                            <div>
                                <ChevronDown v-show="openedFolders.includes('app')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                                <ChevronRight v-show="!openedFolders.includes('app')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            </div>
                            <SourceRoot classes="h-4 w-4"/>
                            <span>app</span>
                        </div>
                        <div v-show="openedFolders.includes('app')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>Actions</span>
                        </div>
                        <div v-show="openedFolders.includes('app')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>Console</span>
                        </div>
                        <div v-show="openedFolders.includes('app')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>Exceptions</span>
                        </div>
                        <div v-show="openedFolders.includes('app')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>Http</span>
                        </div>
                        <div v-show="openedFolders.includes('app')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>Models</span>
                        </div>
                        <div v-show="openedFolders.includes('app')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>Exceptions</span>
                        </div>
                        <div v-show="openedFolders.includes('app')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>Http</span>
                        </div>
                        <div v-show="openedFolders.includes('app')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>Models</span>
                        </div>
                        <div v-show="openedFolders.includes('app')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>Exceptions</span>
                        </div>
                        <div v-show="openedFolders.includes('app')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>Http</span>
                        </div>
                        <div v-show="openedFolders.includes('app')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>Models</span>
                        </div>
                        <div v-show="openedFolders.includes('app')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>Providers</span>
                        </div>
                        <!--APP-->
                        <div class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <Folder classes="h-4 w-4"/>
                            <span>bootstrap</span>
                        </div>
                        <div class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <Folder classes="h-4 w-4"/>
                            <span>config</span>
                        </div>
                        <div class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ResourceRoot classes="h-4 w-4"/>
                            <span>database</span>
                        </div>
                        <div class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <Folder classes="h-4 w-4"/>
                            <span>lang</span>
                        </div>
                        <div class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full bg-orange-300/10">
                            <ExcludeRoot classes="h-4 w-4"/>
                            <span>node_modules</span>
                        </div>
                        <div class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full bg-orange-300/10">
                            <ExcludeRoot classes="h-4 w-4"/>
                            <span>public</span>
                        </div>
                        <div @click="toggleFolder('resources',!openedFolders.includes('resources'))"
                             class="pl-5 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                            <div>
                                <ChevronDown v-show="openedFolders.includes('resources')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                                <ChevronRight v-show="!openedFolders.includes('resources')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            </div>
                            <ResourceRoot classes="h-4 w-4"/>
                            <span>resources</span>
                        </div>
                        <div v-show="openedFolders.includes('resources')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>css</span>
                        </div>
                        <div v-show="openedFolders.includes('resources')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>js</span>
                        </div>
                        <div v-show="openedFolders.includes('resources')"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <ChevronRight classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            <Folder classes="h-4 w-4"/>
                            <span>markdown</span>
                        </div>
                        <!--         Views           -->
                        <div v-show="openedFolders.includes('resources')" @click="toggleFolder('views',!openedFolders.includes('views'))"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                            <div>
                                <ChevronDown v-show="openedFolders.includes('views')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                                <ChevronRight v-show="!openedFolders.includes('views')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            </div>
                            <Folder classes="h-4 w-4"/>
                            <span>views</span>
                        </div>
                        <Link v-show="openedFolders.includes('views')" :href="route('me')" :class="[route().current('me') ? '!bg-default-blue' : '']" @click="setActiveFiles('me')"
                              class="pl-[3.8rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <Blade classes="h-4 w-4"/>
                            <span>me.blade.php</span>
                        </Link>
                        <Link v-show="openedFolders.includes('views')" :href="route('work')" :class="[route().current('work') ? '!bg-default-blue' : '']"
                              @click="setActiveFiles('work')"
                              class="pl-[3.8rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <Blade classes="h-4 w-4"/>
                            <span>work.blade.php</span>
                        </Link>
                        <Link v-show="openedFolders.includes('views')" :href="route('education')" :class="[route().current('education') ? '!bg-default-blue' : '']"
                              @click="setActiveFiles('education')"
                              class="pl-[3.8rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <Blade classes="h-4 w-4"/>
                            <span>education.blade.php</span>
                        </Link>
                        <Link v-show="openedFolders.includes('views')" :href="route('skill')" :class="[route().current('skill') ? '!bg-default-blue' : '']"
                              @click="setActiveFiles('skill')"
                              class="pl-[3.8rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <Blade classes="h-4 w-4"/>
                            <span>skill.blade.php</span>
                        </Link>
                        <Link v-show="openedFolders.includes('views')" :href="route('project')" :class="[route().current('project') ? '!bg-default-blue' : '']"
                              @click="setActiveFiles('project')"
                              class="pl-[3.8rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <Blade classes="h-4 w-4"/>
                            <span>project.blade.php</span>
                        </Link>
                        <Link v-show="openedFolders.includes('views')" :href="route('other-information')" :class="[route().current('other-information') ? '!bg-default-blue' : '']"
                              @click="setActiveFiles('other-information')"
                              class="pl-[3.8rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-max">
                            <Blade classes="h-4 w-4"/>
                            <span>other-information.blade.php</span>
                        </Link>
                        <Link v-show="openedFolders.includes('views')" :href="route('layout')" :class="[route().current('layout') ? '!bg-default-blue' : '']"
                              @click="setActiveFiles('layout')"
                              class="pl-[3.8rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <Blade classes="h-4 w-4"/>
                            <span>layout.blade.php</span>
                        </Link>
                        <!--         Routes           -->
                        <div @click="toggleFolder('routes',!openedFolders.includes('routes'))"
                             class="pl-5 text-menu-font flex justify-start items-center space-x-1 w-full cursor-pointer">
                            <div>
                                <ChevronDown v-show="openedFolders.includes('routes')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                                <ChevronRight v-show="!openedFolders.includes('routes')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            </div>
                            <Folder classes="h-4 w-4"/>
                            <span>routs</span>
                        </div>

                        <Link v-show="openedFolders.includes('routes')" :href="route('api')" :class="[route().current('api') ? '!bg-default-blue' : '']"
                              @click="setActiveFiles('api')"
                              class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <PHP/>
                            <span>api.php</span>
                        </Link>
                        <Link v-show="openedFolders.includes('routes')" :href="route('channels')" :class="[route().current('channels') ? '!bg-default-blue' : '']"
                              @click="setActiveFiles('channels')"
                              class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <PHP/>
                            <span>channels.php</span>
                        </Link>
                        <Link v-show="openedFolders.includes('routes')" :href="route('console-route')" :class="[route().current('console-route') ? '!bg-default-blue' : '']"
                              @click="setActiveFiles('console-route')"
                              class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <PHP/>
                            <span>console.php</span>
                        </Link>
                        <Link v-show="openedFolders.includes('routes')" :href="route('web')" :class="[route().current('web') ? '!bg-default-blue' : '']"
                              @click="setActiveFiles('web')"
                              class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <PHP/>
                            <span>web.php</span>
                        </Link>
                        <div class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full bg-orange-300/10">
                            <ExcludeRoot classes="h-4 w-4"/>
                            <span>storage</span>
                        </div>

                        <!--Tests-->

                        <div @click="toggleFolder('tests',!openedFolders.includes('tests'))"
                             class="pl-5 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer bg-green-300/10">
                            <div>
                                <ChevronDown v-show="openedFolders.includes('tests')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                                <ChevronRight v-show="!openedFolders.includes('tests')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            </div>
                            <TestRoot classes="h-4 w-4"/>
                            <span>tests</span>
                        </div>
                        <div v-show="openedFolders.includes('tests')"
                             class="pl-[2.9rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full bg-green-300/10">
                            <TestRoot classes="h-4 w-4"/>
                            <span>Feature</span>
                        </div>

                        <!--unit-->

                        <div v-show="openedFolders.includes('tests')" @click="toggleFolder('unit',!openedFolders.includes('unit'))"
                             class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer bg-green-300/10">
                            <div>
                                <ChevronDown v-show="openedFolders.includes('unit')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                                <ChevronRight v-show="!openedFolders.includes('unit')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                            </div>
                            <TestRoot classes="h-4 w-4"/>
                            <span>Unit</span>
                        </div>
                        <Link v-show="openedFolders.includes('unit')" :href="route('unit-test')" :class="[route().current('unit-test') ? '!bg-default-blue' : '']"
                              @click="setActiveFiles('unit-test')"
                              class="pl-[3.8rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full bg-green-300/10">
                            <PHPClass classes="h-4 w-4"/>
                            <span>UnitTest.php</span>
                        </Link>

                        <!--end unit-->

                        <Link v-show="openedFolders.includes('tests')" :href="route('creates-application')"
                              :class="[route().current('creates-application') ? '!bg-default-blue' : '']"
                              @click="setActiveFiles('creates-application')"
                              class="pl-[2.9rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full bg-green-300/10">
                            <Trait classes="h-4 w-4"/>
                            <span>CreatesApplication.php</span>
                        </Link>
                        <Link v-show="openedFolders.includes('tests')" :href="route('test-case')" :class="[route().current('test-case') ? '!bg-default-blue' : '']"
                              @click="setActiveFiles('test-case')"
                              class="pl-[2.9rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full bg-green-300/10">
                            <AbstractClass classes="h-4 w-4"/>
                            <span>TestCase.php</span>
                        </Link>

                        <!--end Tests-->

                        <div class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <Folder classes="h-4 w-4"/>
                            <span>vendor</span>
                        </div>
                        <!--         .env           -->
                        <Link :href="route('env')" :class="[route().current('env') ? '!bg-default-blue' : '']" @click="setActiveFiles('env')"
                              class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <DotFile classes="h-4 w-4"/>
                            <span>.env</span>
                        </Link>
                        <!--         Fakes           -->
                        <Link :href="route('env-example')" :class="[route().current('env-example') ? '!bg-default-blue' : '']" @click="setActiveFiles('env-example')"
                              class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <DotFile classes="h-4 w-4"/>
                            <span>.env.example</span>
                        </Link>
                        <Link :href="route('gitignore-root')" :class="[route().current('gitignore-root') ? '!bg-default-blue' : '']" @click="setActiveFiles('gitignore-root')"
                              class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <DotFile classes="h-4 w-4"/>
                            <span>.gitignore</span>
                        </Link>
                        <Link :href="route('artisan')" :class="[route().current('artisan') ? '!bg-default-blue' : '']" @click="setActiveFiles('artisan')"
                              class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <PHP classes="h-4 w-4"/>
                            <span>artisan</span>
                        </Link>
                        <Link :href="route('composer')" :class="[route().current('composer') ? '!bg-default-blue' : '']" @click="setActiveFiles('composer')"
                              class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <JSONFile classes="h-4 w-4"/>
                            <span>composer.json</span>
                        </Link>
                        <div class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <JSONFile classes="h-4 w-4"/>
                            <span>composer.lock</span>
                        </div>
                        <Link :href="route('package')" :class="[route().current('package') ? '!bg-default-blue' : '']" @click="setActiveFiles('package')"
                              class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <JSONFile classes="h-4 w-4"/>
                            <span>package.json</span>
                        </Link>
                        <div class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <JSONFile classes="h-4 w-4"/>
                            <span>package-lock.json</span>
                        </div>
                        <Link :href="route('phpunit')" :class="[route().current('phpunit') ? '!bg-default-blue' : '']" @click="setActiveFiles('phpunit')"
                              class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <TestUnitFile classes="h-4 w-4"/>
                            <span>phpunit.xml</span>
                        </Link>
                        <Link :href="route('postcss')" :class="[route().current('postcss') ? '!bg-default-blue' : '']" @click="setActiveFiles('postcss')"
                              class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <JSFile classes="h-4 w-4"/>
                            <span>postcss.config.js</span>
                        </Link>
                        <Link :href="route('readme')" :class="[route().current('readme') ? '!bg-default-blue' : '']" @click="setActiveFiles('readme')"
                              class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <Markdown classes="h-4 w-4"/>
                            <span>README.md</span>
                        </Link>
                        <Link :href="route('tailwind-config')" :class="[route().current('tailwind-config') ? '!bg-default-blue' : '']" @click="setActiveFiles('tailwind-config')"
                              class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <JSFile classes="h-4 w-4"/>
                            <span>tailwind.config.js</span>
                        </Link>
                        <Link :href="route('vite')" :class="[route().current('vite') ? '!bg-default-blue' : '']" @click="setActiveFiles('vite')"
                              class="pl-[2.1rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                            <JSFile classes="h-4 w-4"/>
                            <span>vite.config.js</span>
                        </Link>
                    </div>
                </div>
                <div class="flex flex-col grow text-xs">
                    <div class="bg-menu-bg border-b-[1px] border-black/30 min-h-[1.75rem] text-xs flex items-center justify-between max-w-full">
                        <div class="flex h-full">
                            <template v-for="file in activeFilesList">
                                <div class="w-max h-full flex justify-center items-center text-menu-font px-1 space-x-1"
                                     :class="[route().current(file.link) ? 'bg-[#4e5254] border-b-2 border-blue-400':'border-b-2 border-transparent' ]">
                                    <component :is="file.icon" :classes="'h-3.5 w-3.5'"/>
                                    <Link :href="route(file.link)" class="text-[0.65rem] tracking-tight">{{ file.name }}</Link>
                                    <div @click.self="removeFromActiveFilesList(file.link)" class="cursor-pointer text-gray-500">x</div>
                                </div>
                            </template>
                        </div>
                        <div class="mr-4 grow justify-end flex min-w-fit">
                            <LangaugeSelector/>
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
                    <div class="bg-secondary-bg border-t-[1px] border-gray-500/20 text-code-white text-[0.6rem] leading-5 pl-10  hidden md:block">
                        <template v-for="file in activeFilesList">
                            <template v-if="file.link === route().current()">
                                {{ file.name }}
                            </template>
                        </template>
                    </div>
                </div>
            </div>
            <div class="bg-menu-bg border-b-[1px] border-gray-500/20 hidden md:flex items-start justify-start w-full max-w-full text-[0.6rem] pl-5 leading-4  font-sans font-medium">
                <div class="pt-0.5 flex items-center justify-center max-w-fit hover:bg-primary-bg pr-2 pl-1.5 space-x-1 cursor-default">
                    <Branch class="h-3 w-3"/>
                    <p class="text-code-white text-[0.6rem]">Git</p>
                </div>
                <div class="pt-0.5 flex items-center justify-center max-w-fit hover:bg-primary-bg pr-2 pl-1.5 space-x-1 cursor-default">
                    <Run class="h-3 w-3"/>
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
                <p class="text-code-white text-[0.6rem] leading-4 flex items-center"><span class="mr-0.5">PHP:8.0 LF UTF-8 </span>  <Branch class="h-2.5 w-2.5"/> <span>Master</span></p>
            </div>
        </div>
    </div>
</template>

<script>

</script>
