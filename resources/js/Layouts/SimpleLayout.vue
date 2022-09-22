<script setup>
import {Head, Link} from '@inertiajs/inertia-vue3';
import Blade from '@/Icons/Blade.vue';
import {onMounted} from "vue";


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
</script>

<template>
    <div>
        <Head title="Abdulsalam Emesh"/>
        <div class="h-screen w-screen bg-[#2b2b2b] font-custom flex">
            <div class="bg-[#3f3e43] min-w-[250px] border-r-[1px] border-black/30 text-xs flex flex-col">
                <div class="h-7 flex items-center border-b-[1px] border-black/30 px-2">
                    <p class="text-[#adb5b8]">Project</p>
                </div>
                <div class="grow border-b-[1px] border-black/30 ">
                    <Link href="/" :class="[route().current('/') ? 'bg-[#2f64ca]' : 'bg-[#2f64ca]']" class="text-[#adb5b8] flex justify-start items-center space-x-2 px-2 w-full">
                        <Blade/>
                        <span> index.blade.php</span>
                    </Link>
                </div>
            </div>
            <div class="flex flex-col grow">
                <div class="bg-[#3e3f43] border-b-[1px] border-black/30 h-7 text-xs">
                    <div class="w-min h-full bg-[#4e5156] flex justify-between items-center text-[#adb5b8] px-2 py-1 space-x-2">
                        <Blade/>
                        <span> index.blade.php</span>
                        <div>x</div>
                    </div>
                </div>
                <div class="flex grow overflow-hidden">
                    <!-- Page Heading -->
                    <header v-if="$slots.header"
                            class="bg-[#333237] pl-2 pr-4 pt-1 space-y-0.5 border-r-[1px] border-[#5f6364] overflow-y-scroll hidde-scrollbar scroll-js h-full pb-5">
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
