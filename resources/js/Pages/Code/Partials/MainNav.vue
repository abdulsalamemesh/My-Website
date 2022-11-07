<script setup>
import {Link} from '@inertiajs/inertia-vue3';
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
import Project from '@/Icons/Project.vue';
import CSSFile from '@/Icons/CSSFile.vue';
import {setActiveFiles, toggleFolder, openedFolders} from "../../../store";

</script>
<template>
    <div class="bg-menu-bg min-w-[250px] border-r-[1px] border-black/30 text-[0.7rem] flex flex-col">
        <div class="h-7 min-h-[1.75rem] flex items-center border-b-[1px] border-black/30 px-2 flex font-sans space-x-1">
            <Project classes="h-4 w-4 text-menu-font fill-current"/>
            <p class="text-menu-font text-[0.75rem]">Project</p>
        </div>
        <div
            class="grow border-b-[1px] border-black/30 overflow-x-hidden overflow-y-auto custom-folders-scrollbar py-2 sm:pt-0 font-sans font-semibold leading-[1.125rem]">
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
            <div @click="toggleFolder('Actions',!openedFolders.includes('Actions'))"
                 v-show="openedFolders.includes('app')"
                 class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('Actions')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('Actions')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <Folder classes="h-4 w-4"/>
                <span>Actions</span>
            </div>
            <div @click="toggleFolder('Console',!openedFolders.includes('Console'))"
                 v-show="openedFolders.includes('app')"
                 class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('Console')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('Console')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <Folder classes="h-4 w-4"/>
                <span>Console</span>
            </div>
            <div @click="toggleFolder('Exceptions',!openedFolders.includes('Exceptions'))"
                 v-show="openedFolders.includes('app')"
                 class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('Exceptions')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('Exceptions')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <Folder classes="h-4 w-4"/>
                <span>Exceptions</span>
            </div>
            <div @click="toggleFolder('Http',!openedFolders.includes('Http'))"
                 v-show="openedFolders.includes('app')"
                 class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('Http')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('Http')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <Folder classes="h-4 w-4"/>
                <span>Http</span>
            </div>
            <div @click="toggleFolder('Models',!openedFolders.includes('Models'))"
                 v-show="openedFolders.includes('app')"
                 class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('Models')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('Models')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <Folder classes="h-4 w-4"/>
                <span>Models</span>
            </div>
            <div @click="toggleFolder('Providers',!openedFolders.includes('Providers'))"
                 v-show="openedFolders.includes('app')"
                 class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('Providers')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('Providers')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <Folder classes="h-4 w-4"/>
                <span>Providers</span>
            </div>
            <!--end APP-->
            <div @click="toggleFolder('bootstrap',!openedFolders.includes('bootstrap'))"
                 class="pl-5 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('bootstrap')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('bootstrap')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <Folder classes="h-4 w-4"/>
                <span>bootstrap</span>
            </div>
            <div @click="toggleFolder('config',!openedFolders.includes('config'))"
                 class="pl-5 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('config')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('config')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <Folder classes="h-4 w-4"/>
                <span>config</span>
            </div>
            <!--database-->
            <div @click="toggleFolder('database',!openedFolders.includes('database'))"
                 class="pl-5 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('database')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('database')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <ResourceRoot classes="h-4 w-4"/>
                <span>database</span>
            </div>
            <div @click="toggleFolder('factories',!openedFolders.includes('factories'))"
                 v-show="openedFolders.includes('database')"
                 class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('factories')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('factories')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <SourceRoot classes="h-4 w-4"/>
                <span>factories</span>
            </div>
            <div @click="toggleFolder('migrations',!openedFolders.includes('migrations'))"
                 v-show="openedFolders.includes('database')"
                 class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('migrations')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('migrations')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <Folder classes="h-4 w-4"/>
                <span>migrations</span>
            </div>
            <div @click="toggleFolder('seeders',!openedFolders.includes('seeders'))"
                 v-show="openedFolders.includes('database')"
                 class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('seeders')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('seeders')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <SourceRoot classes="h-4 w-4"/>
                <span>seeders</span>
            </div>

            <!--end database-->

            <div @click="toggleFolder('lang',!openedFolders.includes('lang'))"
                 class="pl-5 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('lang')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('lang')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <Folder classes="h-4 w-4"/>
                <span>lang</span>
            </div>
            <div @click="toggleFolder('node_modules',!openedFolders.includes('node_modules'))"
                 class="pl-5 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('node_modules')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('node_modules')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <ExcludeRoot classes="h-4 w-4"/>
                <span>node_modules</span>
            </div>
            <!--         public           -->
            <div @click="toggleFolder('public',!openedFolders.includes('public'))"
                 class="pl-5 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('public')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('public')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <ExcludeRoot classes="h-4 w-4"/>
                <span>public</span>
            </div>
            <Link v-show="openedFolders.includes('public')" :href="route('index-public')" :class="[route().current('index-public') ? '!bg-default-blue' : '']"
                  @click="setActiveFiles('index-public')"
                  class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <PHP classes="h-4 w-4"/>
                <span>index.php</span>
            </Link>
            <!--         end public           -->
            <!--         resources           -->
            <div @click="toggleFolder('resources',!openedFolders.includes('resources'))"
                 class="pl-5 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('resources')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('resources')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <ResourceRoot classes="h-4 w-4"/>
                <span>resources</span>
            </div>
            <div @click="toggleFolder('css',!openedFolders.includes('css'))"
                 v-show="openedFolders.includes('resources')"
                 class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('css')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('css')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <Folder classes="h-4 w-4"/>
                <span>css</span>
            </div>
            <Link
                v-show="openedFolders.includes('css')" :href="route('app.css')" :class="[route().current('app.css') ? '!bg-default-blue' : '']" @click="setActiveFiles('app.css')"
                class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <CSSFile classes="h-4 w-4"/>
                <span>app.css</span>
            </Link>
            <div @click="toggleFolder('js',!openedFolders.includes('js'))"
                 v-show="openedFolders.includes('resources')"
                 class="pl-8 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('js')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('js')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <Folder classes="h-4 w-4"/>
                <span>js</span>
            </div>
            <Link
                v-show="openedFolders.includes('js')" :href="route('app.js')" :class="[route().current('app.js') ? '!bg-default-blue' : '']" @click="setActiveFiles('app.js')"
                class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <JSFile classes="h-4 w-4"/>
                <span>app.js</span>
            </Link>
            <Link
                v-show="openedFolders.includes('js')" :href="route('bootstrap.js')" :class="[route().current('bootstrap.js') ? '!bg-default-blue' : '']" @click="setActiveFiles('bootstrap.js')"
                class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <JSFile classes="h-4 w-4"/>
                <span>bootstrap.js</span>
            </Link>
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
                  class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <Blade classes="h-4 w-4"/>
                <span>me.blade.php</span>
            </Link>
            <Link v-show="openedFolders.includes('views')" :href="route('work')" :class="[route().current('work') ? '!bg-default-blue' : '']"
                  @click="setActiveFiles('work')"
                  class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <Blade classes="h-4 w-4"/>
                <span>work.blade.php</span>
            </Link>
            <Link v-show="openedFolders.includes('views')" :href="route('education')" :class="[route().current('education') ? '!bg-default-blue' : '']"
                  @click="setActiveFiles('education')"
                  class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <Blade classes="h-4 w-4"/>
                <span>education.blade.php</span>
            </Link>
            <Link v-show="openedFolders.includes('views')" :href="route('skill')" :class="[route().current('skill') ? '!bg-default-blue' : '']"
                  @click="setActiveFiles('skill')"
                  class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <Blade classes="h-4 w-4"/>
                <span>skill.blade.php</span>
            </Link>
            <Link v-show="openedFolders.includes('views')" :href="route('project')" :class="[route().current('project') ? '!bg-default-blue' : '']"
                  @click="setActiveFiles('project')"
                  class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <Blade classes="h-4 w-4"/>
                <span>project.blade.php</span>
            </Link>
            <Link v-show="openedFolders.includes('views')" :href="route('other-information')" :class="[route().current('other-information') ? '!bg-default-blue' : '']"
                  @click="setActiveFiles('other-information')"
                  class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-max">
                <Blade classes="h-4 w-4"/>
                <span>other-information.blade.php</span>
            </Link>
            <Link v-show="openedFolders.includes('views')" :href="route('layout')" :class="[route().current('layout') ? '!bg-default-blue' : '']"
                  @click="setActiveFiles('layout')"
                  class="pl-12 text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <Blade classes="h-4 w-4"/>
                <span>layout.blade.php</span>
            </Link>
            <!--       end resources           -->

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
            <div @click="toggleFolder('storage',!openedFolders.includes('storage'))"
                 class="pl-5 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('storage')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('storage')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
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

            <div @click="toggleFolder('vendor',!openedFolders.includes('vendor'))"
                 class="pl-5 text-menu-font flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                <div>
                    <ChevronDown v-show="openedFolders.includes('vendor')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                    <ChevronRight v-show="!openedFolders.includes('vendor')" classes="h-2.5 w-2.5 text-menu-font fill-current"/>
                </div>
                <Folder classes="h-4 w-4"/>
                <span>vendor</span>
            </div>
            <!--         .env           -->
            <Link :href="route('env')" :class="[route().current('env') ? '!bg-default-blue' : '']" @click="setActiveFiles('env')"
                  class="pl-[2.2rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <DotFile classes="h-4 w-4"/>
                <span>.env</span>
            </Link>
            <!--         Fakes           -->
            <Link :href="route('env-example')" :class="[route().current('env-example') ? '!bg-default-blue' : '']" @click="setActiveFiles('env-example')"
                  class="pl-[2.2rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <DotFile classes="h-4 w-4"/>
                <span>.env.example</span>
            </Link>
            <Link :href="route('gitignore-root')" :class="[route().current('gitignore-root') ? '!bg-default-blue' : '']" @click="setActiveFiles('gitignore-root')"
                  class="pl-[2.2rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <DotFile classes="h-4 w-4"/>
                <span>.gitignore</span>
            </Link>
            <Link :href="route('artisan')" :class="[route().current('artisan') ? '!bg-default-blue' : '']" @click="setActiveFiles('artisan')"
                  class="pl-[2.2rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <PHP classes="h-4 w-4"/>
                <span>artisan</span>
            </Link>
            <Link :href="route('composer')" :class="[route().current('composer') ? '!bg-default-blue' : '']" @click="setActiveFiles('composer')"
                  class="pl-[2.2rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <JSONFile classes="h-4 w-4"/>
                <span>composer.json</span>
            </Link>
            <div class="pl-[2.2rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <JSONFile classes="h-4 w-4"/>
                <span>composer.lock</span>
            </div>
            <Link :href="route('package')" :class="[route().current('package') ? '!bg-default-blue' : '']" @click="setActiveFiles('package')"
                  class="pl-[2.2rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <JSONFile classes="h-4 w-4"/>
                <span>package.json</span>
            </Link>
            <div class="pl-[2.2rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <JSONFile classes="h-4 w-4"/>
                <span>package-lock.json</span>
            </div>
            <Link :href="route('phpunit')" :class="[route().current('phpunit') ? '!bg-default-blue' : '']" @click="setActiveFiles('phpunit')"
                  class="pl-[2.2rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <TestUnitFile classes="h-4 w-4"/>
                <span>phpunit.xml</span>
            </Link>
            <Link :href="route('postcss')" :class="[route().current('postcss') ? '!bg-default-blue' : '']" @click="setActiveFiles('postcss')"
                  class="pl-[2.2rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <JSFile classes="h-4 w-4"/>
                <span>postcss.config.js</span>
            </Link>
            <Link :href="route('readme')" :class="[route().current('readme') ? '!bg-default-blue' : '']" @click="setActiveFiles('readme')"
                  class="pl-[2.2rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <Markdown classes="h-4 w-4"/>
                <span>README.md</span>
            </Link>
            <Link :href="route('tailwind-config')" :class="[route().current('tailwind-config') ? '!bg-default-blue' : '']" @click="setActiveFiles('tailwind-config')"
                  class="pl-[2.2rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <JSFile classes="h-4 w-4"/>
                <span>tailwind.config.js</span>
            </Link>
            <Link :href="route('vite')" :class="[route().current('vite') ? '!bg-default-blue' : '']" @click="setActiveFiles('vite')"
                  class="pl-[2.2rem] text-menu-font flex justify-start items-center space-x-1 px-2 w-full">
                <JSFile classes="h-4 w-4"/>
                <span>vite.config.js</span>
            </Link>
        </div>
    </div>
</template>
