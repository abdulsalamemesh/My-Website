<script setup>
import {onDeactivated, onMounted, ref} from "vue";

const navigations = ['Home', 'Work experience', 'education', 'projects', 'other info', 'contact']

const showNavigation = ref(false)
const inMove = ref(false)
const inMoveDelay = ref(0)
const activeSection = ref(0)
const offsets = ref([])
const touchStartY = ref(0)

function calculateSectionOffsets() {
    let sections = document.getElementsByTagName('section');
    let length = sections.length;
    for (let i = 0; i < length; i++) {
        let sectionOffset = sections[i].offsetTop;
        offsets.value.push(sectionOffset);
    }
}

function scrollToSection(id, force = false) {
    if (inMove.value && !force) return false;
    activeSection.value = id;
    inMove.value = true;
    document.getElementsByTagName('section')[id].scrollIntoView({
        behavior: 'smooth'
    });
    setTimeout(() => {
        inMove.value = false;
    }, inMoveDelay.value);
}

function handleMouseWheel(e) {
    if (e.wheelDelta < 30 && !inMove.value) {
        moveUp();
    } else if (e.wheelDelta > 30 && !inMove.value) {
        moveDown();
    }
    e.preventDefault();
    return false;
}

function moveDown() {
    inMove.value = true;
    activeSection.value--;
    if (activeSection.value < 0) activeSection.value = offsets.value.length - 1;
    scrollToSection(activeSection.value, true);
}

function moveUp() {
    inMove.value = true;
    activeSection.value++;
    if (activeSection.value > offsets.value.length - 1) activeSection.value = 0;
    scrollToSection(activeSection.value, true);
}

function touchStart(e) {
    e.preventDefault();
    touchStartY.value = e.touches[0].clientY;
}

function touchMove(e) {
    if (inMove.value) return false;
    e.preventDefault();
    const currentY = e.touches[0].clientY;
    if (touchStartY.value < currentY) {
        moveDown();
    } else {
        moveUp();
    }
    touchStartY.value = 0;
    return false;
}

onMounted(() => {
    calculateSectionOffsets()
    window.addEventListener('mousewheel', handleMouseWheel, {
        passive: false
    }); // Other browsers
    window.addEventListener('touchstart', touchStart, {
        passive: false
    }); // mobile devices
    window.addEventListener('touchmove', touchMove, {
        passive: false
    }); // mobile devices
})

onDeactivated(() => {
    window.removeEventListener('mousewheel', handleMouseWheel, {
        passive: false
    }); // Other browsers
    window.removeEventListener('touchstart', touchStart); // mobile devices
    window.removeEventListener('touchmove', touchMove); // mobile devices
})

</script>

<template>
    <div>
        <button class="fixed top-2 right-2 p-1 z-50" @click="showNavigation = ! showNavigation">
            <svg v-show="! showNavigation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-current h-6 w-6" :class="[activeSection % 2 === 0 ? 'text-[#e94343]':'text-[#323232] ']">
                <path
                    d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
            </svg>
            <svg v-show="showNavigation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="fill-current h-6 w-6" :class="[activeSection % 2 === 0 ? 'text-[#e94343]':'text-[#323232] ']">
                <path
                    d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/>
            </svg>
        </button>
        <transition
            enter-active-class="transition-[width] transition-[padding] ease-in-out duration-500"
            enter-from-class="transform w-0"
            enter-to-class="transform w-auto"
            leave-active-class="transition-[width] transition-[padding] ease-in-out duration-75"
            leave-from-class="transform w-auto"
            leave-to-class="transform w-0"
        >
            <div v-show="showNavigation"
                 @click="showNavigation = false"
                 class="fixed inset-y-0 left-0 p-4 border-r-4 flex flex-col justify-center space-y-4 shadow-2xl duration-75"
                 :class="[activeSection % 2 === 0 ? 'bg-[#e94343] border-[#323232]/70':'bg-[#323232] border-[#e94343]/70']">
                <template v-for="(offset, index) in offsets"
                          @key="index"
                >
                    <div class="cursor-pointer " @click="scrollToSection(index)">
                        <!--                    <div class="hidden md:block w-5 h-1 bg-white bg-opacity-60 transition-all"-->
                        <!--                         :class="[activeSection == index ?? 'bg-opacity-100':'opacity-60']"></div>-->
                        <div class="text-sm font-semibold capitalize text-center border-b-2 border-transparent  pb-1"
                             :class="[activeSection == index ? 'opacity-100':'opacity-70',activeSection % 2 === 0 ? 'text-black hover:border-black':'text-white hover:border-white',{'hidden':!showNavigation}]"
                             v-text="navigations[index]"></div>
                    </div>
                </template>
                <div class="cursor-pointer text-center">
                    <!--                    <div class="hidden md:block w-5 h-1 bg-white bg-opacity-60 transition-all"-->
                    <!--                         :class="[activeSection == index ?? 'bg-opacity-100':'opacity-60']"></div>-->
                    <a href="/index" class="text-sm font-semibold capitalize text-center border-b-2 border-transparent opacity-70 pb-1"
                       :class="[activeSection % 2 === 0 ? 'text-black hover:border-black':'text-white hover:border-white',{'hidden':!showNavigation}]"
                    >For Programers</a>
                </div>
            </div>

        </transition>
        <section class="h-screen w-full bg-[#323232] flex justify-center items-center px-4">
            <div class="max-w-6xl mx-auto flex justify-center flex-col">
                <p class="text-[#e94343]">Who am I?</p>
                <h1 class="uppercase text-3xl text-white mt-1">Abdulsalam Emesh</h1>
                <h1 class="text-lg text-white/70 mt-4">I develop things for the Web. and I love what i do!</h1>

            </div>
        </section>
        <section class="h-screen w-full bg-[#e94343] flex justify-center items-center px-4">
            <div class="bg-white p-4 rounded">
                <h1 class="uppercase text-5xl text-center" v-text="navigations[activeSection]"></h1>
            </div>
        </section>
        <section class="h-screen w-full bg-[#323232] flex justify-center items-center px-4">
            <div class="bg-white p-4 rounded">
                <h1 class="uppercase text-5xl text-center" v-text="navigations[activeSection]"></h1>
            </div>
        </section>
        <section class="h-screen w-full bg-[#e94343] flex justify-center items-center px-4">
            <div class="bg-white p-4 rounded">
                <h1 class="uppercase text-5xl text-center" v-text="navigations[activeSection]"></h1>
            </div>
        </section>
        <section class="h-screen w-full bg-[#323232] flex justify-center items-center px-4">
            <div class="bg-white p-4 rounded">
                <h1 class="uppercase text-5xl text-center" v-text="navigations[activeSection]"></h1>
            </div>
        </section>
        <section class="h-screen w-full bg-[#e94343] flex justify-center items-center px-4">
            <div class="bg-white p-4 rounded">
                <h1 class="uppercase text-5xl text-center" v-text="navigations[activeSection]"></h1>
            </div>
        </section>

    </div>
</template>

<style>
</style>
