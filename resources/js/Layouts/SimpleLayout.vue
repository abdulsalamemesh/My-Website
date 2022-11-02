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
import {computed, onMounted, ref, shallowRef} from "vue";
import LangaugeSelector from '@/Layouts/LangaugeSelector.vue'
let icon = shallowRef(Blade)
let showResources = ref(false)
let showViews = ref(false)
let showRoutes = ref(false)

onMounted(() => {
    const elems = document.getElementsByClassName("scroll-js");

    function foo() {
        let top = this.scrollTop;

        for (let i = 0; i < elems.length; i++) {
            elems[i].scrollTop = top;
        }
    }

    for (let i = 0; i < elems.length; i++) {
        elems[i].addEventListener("scroll", foo);
    }

})

const name = computed(() => {
    switch (route().current()) {
        case "index":
            showResources.value = true
            showViews.value = true
            icon.value = Blade
            return 'index.blade.php'
        case "me":
            showResources.value = true
            showViews.value = true
            icon.value = Blade
            return 'me.blade.php'
        case "work":
            showResources.value = true
            showViews.value = true
            icon.value = Blade
            return 'work.blade.php'
        case "education":
            showResources.value = true
            showViews.value = true
            icon.value = Blade
            return 'education.blade.php'
        case "skill":
            showResources.value = true
            showViews.value = true
            icon.value = Blade
            return 'skill.blade.php'
        case "other-information":
            showResources.value = true
            showViews.value = true
            icon.value = Blade
            return 'other-information.blade.php'
        case "layout":
            showResources.value = true
            showViews.value = true
            icon.value = Blade
            return 'layout.blade.php'
        case "web":
            showRoutes.value = true
            icon.value = PHP
            return 'web.php'
        case "env":
            icon.value = DotFile
            return '.env'
        case "env-example":
            icon.value = DotFile
            return '.env.example'
    }
})

function message() {
    alert('I know you are programmer but this is still a website and not and IDE 😉')
}
</script>

<template>
    <div>
        <Head title="Abdulsalam Emesh"/>
        <div class="md:h-screen md:w-screen bg-[#2b2b2b] font-custom text-sm flex flex-col md:flex-row overflow-hidden">
            <div class="bg-[#3c3f41] min-w-[250px] border-r-[1px] border-black/30 text-xs flex flex-col">
                <div class="h-7 flex items-center border-b-[1px] border-black/30 px-2">
                    <p class="text-[#adb5b8]">Project</p>
                </div>
                <div class="grow border-b-[1px] border-black/30 space-y-1 overflow-hidden py-2 sm:py-0">
                    <div class="text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#8964;</span>
                        <Folder classes="h-4 w-4"/>
                        <span>me</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <SourceRoot classes="h-4 w-4"/>
                        <span>app</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <Folder classes="h-4 w-4"/>
                        <span>bootstrap</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <Folder classes="h-4 w-4"/>
                        <span>config</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <ResourceRoot classes="h-4 w-4"/>
                        <span>database</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <Folder classes="h-4 w-4"/>
                        <span>lang</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <ExcludeRoot classes="h-4 w-4"/>
                        <span>node_modules</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <ExcludeRoot classes="h-4 w-4"/>
                        <span>public</span>
                    </div>
                    <div @click="showResources = ! showResources" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <ResourceRoot classes="h-4 w-4"/>
                        <span>resources</span>
                    </div>
                    <div v-show="showResources" @click="message()"  class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <Folder classes="h-4 w-4"/>
                        <span>css</span>
                    </div>
                    <div v-show="showResources" @click="message()"  class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <Folder classes="h-4 w-4"/>
                        <span>js</span>
                    </div>
                    <div v-show="showResources" @click="message()"  class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <Folder classes="h-4 w-4"/>
                        <span>markdown</span>
                    </div>
                    <!--         Views           -->
                    <div v-show="showResources" @click="showViews = ! showViews" class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                    <span>
                        <span v-show="showViews" class="text-xs">&#8964;</span>
                        <span v-show="!showViews" class="text-xs">&#x203A;</span>
                    </span>
                        <Folder classes="h-4 w-4"/>
                        <span>views</span>
                    </div>
                    <Link v-show="showViews" :href="route('index')" :class="[route().current('index') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <Blade classes="h-4 w-4"/>
                        <span>index.blade.php</span>
                    </Link>
                    <Link v-show="showViews" :href="route('me')" :class="[route().current('me') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <Blade classes="h-4 w-4"/>
                        <span>me.blade.php</span>
                    </Link>
                    <Link v-show="showViews" :href="route('work')" :class="[route().current('work') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <Blade classes="h-4 w-4"/>
                        <span>work.blade.php</span>
                    </Link>
                    <Link v-show="showViews" :href="route('education')" :class="[route().current('education') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <Blade classes="h-4 w-4"/>
                        <span>education.blade.php</span>
                    </Link>
                    <Link v-show="showViews" :href="route('skill')" :class="[route().current('skill') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <Blade classes="h-4 w-4"/>
                        <span>skill.blade.php</span>
                    </Link>
                    <Link v-show="showViews" :href="route('other-information')" :class="[route().current('other-information') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-max">
                        <Blade classes="h-4 w-4"/>
                        <span>other-information.blade.php</span>
                    </Link>
                    <Link v-show="showViews" :href="route('layout')" :class="[route().current('layout') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-20 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <Blade classes="h-4 w-4"/>
                        <span>layout.blade.php</span>
                    </Link>
                    <!--         Routes           -->
                    <div @click="showRoutes = ! showRoutes" class=" pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 w-full cursor-pointer">
                    <span>
                        <span v-show="showRoutes" class="text-xs">&#8964;</span>
                        <span v-show="!showRoutes" class="text-xs">&#x203A;</span>
                    </span>
                        <Folder classes="h-4 w-4"/>
                        <span>routs</span>
                    </div>
                    <Link v-show="showRoutes" :href="route('web')" :class="[route().current('web') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-14 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <PHP/>
                        <span>web.php</span>
                    </Link>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <ExcludeRoot classes="h-4 w-4"/>
                        <span>storage</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <TestRoot classes="h-4 w-4"/>
                        <span>tests</span>
                    </div>
                    <div @click="message()" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full cursor-pointer">
                        <span class="text-xs">&#x203A;</span>
                        <Folder classes="h-4 w-4"/>
                        <span>vendor</span>
                    </div>
                    <!--         .env           -->
                    <Link :href="route('env')" :class="[route().current('env') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <DotFile classes="h-4 w-4"/>
                        <span>.env</span>
                    </Link>
                    <!--         Fakes           -->
                    <Link :href="route('env-example')" :class="[route().current('env-example') ? 'bg-[#4b6eaf]' : '']" class="cursor-pointer pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <DotFile classes="h-4 w-4"/>
                        <span>.env.example</span>
                    </Link>
                    <div @click="message()" class="cursor-pointer pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <DotFile classes="h-4 w-4"/>
                        <span>.gitignore</span>
                    </div>
                    <div @click="message()" class="cursor-pointer pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <PHP classes="h-4 w-4"/>
                        <span>artisan</span>
                    </div>
                    <div @click="message()" class="cursor-pointer pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSONFile classes="h-4 w-4"/>
                        <span>composer.json</span>
                    </div>
                    <div @click="message()" class="cursor-pointer pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSONFile classes="h-4 w-4"/>
                        <span>composer.lock</span>
                    </div>
                    <div @click="message()" class="cursor-pointer pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSONFile classes="h-4 w-4"/>
                        <span>package.json</span>
                    </div>
                    <div @click="message()" class="cursor-pointer pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSONFile classes="h-4 w-4"/>
                        <span>package-lock.json</span>
                    </div>
                    <div @click="message()" class="cursor-pointer pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <TestUnitFile classes="h-4 w-4"/>
                        <span>phpunit.xml</span>
                    </div>
                    <div @click="message()" class="cursor-pointer pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSFile classes="h-4 w-4"/>
                        <span>postcss.config.js</span>
                    </div>
                    <div @click="message()" class="cursor-pointer pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <Markdown classes="h-4 w-4"/>
                        <span>README.md</span>
                    </div>
                    <div @click="message()" class="cursor-pointer pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSFile classes="h-4 w-4"/>
                        <span>tailwind.config.js</span>
                    </div>
                    <div @click="message()" class="cursor-pointer pl-11 text-[#adb5b8] flex justify-start items-center space-x-1 px-2 w-full">
                        <JSFile classes="h-4 w-4"/>
                        <span>vite.config.js</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col grow text-xs">
                <div class="bg-[#3c3f41] border-b-[1px] border-black/30 h-7 text-xs flex items-center justify-between">
                    <div class="w-max h-full bg-[#4e5254] flex justify-between items-center text-[#adb5b8] px-2 py-1 space-x-2">
                        <component :is="icon" :classes="'h-4 w-4'"/>
                        <span>{{ name }}</span>
                        <div @click="message()" class="cursor-pointer">x</div>
                    </div>
                    <div class="mr-4">
                        <LangaugeSelector/>
                    </div>
                </div>
                <div class="flex grow md:overflow-x-hidden md:overflow-y-auto bg-[#2b2b2b]">
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
