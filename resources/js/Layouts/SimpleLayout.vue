<script setup>
import {Head, Link} from '@inertiajs/inertia-vue3';
import Folder from '@/Icons/Folder.vue';
import Blade from '@/Icons/Blade.vue';
import PHP from '@/Icons/PHP.vue';
import {computed, onMounted, ref} from "vue";
import LangaugeSelector from '@/Layouts/LangaugeSelector.vue'
let icon = ref('Blade')
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
            showViews.value = true
            icon.value = 'Blade'
            return 'index.blade.php'
        case "me":
            showViews.value = true
            icon.value = 'Blade'
            return 'me.blade.php'
        case "work":
            showViews.value = true
            icon.value = 'Blade'
            return 'work.blade.php'
        case "education":
            showViews.value = true
            icon.value = 'Blade'
            return 'education.blade.php'
        case "skill":
            showViews.value = true
            icon.value = 'Blade'
            return 'skill.blade.php'
        case "layout":
            showViews.value = true
            icon.value = 'Blade'
            return 'layout.blade.php'
        case "web":
            showRoutes.value = true
            icon.value = 'PHP'
            return 'web.php'
    }
})

function message() {
    alert('I know you are programmer but this is still a website and not and IDE :)')
}
</script>

<template>
    <div>
        <Head title="Abdulsalam Emesh"/>
        <div class="h-screen w-screen bg-[#2b2b2b] font-custom flex">
            <div class="bg-[#3c3f41] min-w-[250px] border-r-[1px] border-black/30 text-xs flex flex-col">
                <div class="h-7 flex items-center border-b-[1px] border-black/30 px-2">
                    <p class="text-[#adb5b8]">Project</p>
                </div>
                <div class="grow border-b-[1px] border-black/30 ">
                    <div class="text-[#adb5b8] flex justify-start items-center space-x-2 px-2 w-full cursor-pointer">
                        <span class="text-base">&#8964;</span>
                        <Folder/>
                        <span>me</span>
                    </div>
                    <!--         Views           -->
                    <div @click="showViews = ! showViews" class="pl-8 text-[#adb5b8] flex justify-start items-center space-x-2 px-2 w-full cursor-pointer">
                    <span>
                        <span v-show="showViews" class="text-base">&#8964;</span>
                        <span v-show="!showViews" class="text-base">&#x203A;</span>
                    </span>
                        <Folder/>
                        <span>views</span>
                    </div>
                    <Link v-show="showViews" :href="route('index')" :class="[route().current('index') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-12 text-[#adb5b8] flex justify-start items-center space-x-2 px-2 w-full">
                        <Blade/>
                        <span>index.blade.php</span>
                    </Link>
                    <Link v-show="showViews" :href="route('me')" :class="[route().current('me') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-12 text-[#adb5b8] flex justify-start items-center space-x-2 px-2 w-full">
                        <Blade/>
                        <span>me.blade.php</span>
                    </Link>
                    <Link v-show="showViews" :href="route('work')" :class="[route().current('work') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-12 text-[#adb5b8] flex justify-start items-center space-x-2 px-2 w-full">
                        <Blade/>
                        <span>work.blade.php</span>
                    </Link>
                    <Link v-show="showViews" :href="route('education')" :class="[route().current('education') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-12 text-[#adb5b8] flex justify-start items-center space-x-2 px-2 w-full">
                        <Blade/>
                        <span>education.blade.php</span>
                    </Link>
                    <Link v-show="showViews" :href="route('skill')" :class="[route().current('skill') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-12 text-[#adb5b8] flex justify-start items-center space-x-2 px-2 w-full">
                        <Blade/>
                        <span>skill.blade.php</span>
                    </Link>
                    <Link v-show="showViews" :href="route('layout')" :class="[route().current('layout') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-12 text-[#adb5b8] flex justify-start items-center space-x-2 px-2 w-full">
                        <Blade/>
                        <span>layout.blade.php</span>
                    </Link>
                    <!--         Routes           -->
                    <div @click="showRoutes = ! showRoutes" class=" pl-8 text-[#adb5b8] flex justify-start items-center space-x-2 px-2 w-full cursor-pointer">
                    <span>
                        <span v-show="showRoutes" class="text-base">&#8964;</span>
                        <span v-show="!showRoutes" class="text-base">&#x203A;</span>
                    </span>
                        <Folder/>
                        <span>routs</span>
                    </div>
                    <Link v-show="showRoutes" :href="route('web')" :class="[route().current('web') ? 'bg-[#4b6eaf]' : '']"
                          class="pl-12 text-[#adb5b8] flex justify-start items-center space-x-2 px-2 w-full">
                        <PHP/>
                        <span>web.php</span>
                    </Link>
                </div>
            </div>
            <div class="flex flex-col grow">
                <div class="bg-[#3c3f41] border-b-[1px] border-black/30 h-7 text-xs flex items-center justify-between">
                    <div class="w-min h-full bg-[#4e5254] flex justify-between items-center text-[#adb5b8] px-2 py-1 space-x-2">
                        <Blade/>
                        <span>{{ name }}</span>
                        <div @click="message()" class="cursor-pointer">x</div>
                    </div>
                    <div class="mr-4">
                        <LangaugeSelector/>
                    </div>
                </div>
                <div class="flex grow overflow-hidden">
                    <!-- Page Heading -->
                    <header v-if="$slots.header"
                            class="bg-[#313335] pl-2 pr-4 pt-1 space-y-0.5 border-r-[1px] border-[#5f6364] overflow-y-scroll hidde-scrollbar scroll-js h-full pb-5">
                        <slot name="header"/>
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
