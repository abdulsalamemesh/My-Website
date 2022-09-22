<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
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
    <SimpleLayout title="Abdulsalam Emesh">
        <template #header>
                <template v-for="(number, key) in Array.from(Array(41).keys())">
                    <div class="text-[#5f6364]" v-if="key !== 0">{{ number }}</div>
                </template>
        </template>

        <div class="pl-1 pt-1 grow space-y-0.5 overflow-y-scroll custom-scrollbar scroll-js pb-5">
            <div class="flex">
                <p class="text-[#dfc087] ">&lt;h1</p>
                <p class="text-[#a9b1b3] ">&nbsp;class </p>
                <p class="text-[#a7bb7c] ">"h-screen w-screen bg-[#2b2b2b] p-10"</p>
                <p class="text-[#dfc087] ">&gt;</p>
                <p class="text-[#a9b1b3] ">Abdulsalam Emesh</p>
                <p class="text-[#dfc087] ">&lt;h1&gt;</p>
            </div>
            <div class="flex">
                <p class="text-[#dfc087] ">&lt;div</p>
                <p class="text-[#a9b1b3] ">&nbsp;class </p>
                <p class="text-[#a7bb7c] ">"h-screen w-screen bg-[#2b2b2b] p-10"</p>
                <p class="text-[#dfc087] ">&gt;</p>

            </div>
            <div class="flex">
                &nbsp; &nbsp;&nbsp;
                <p class="text-[#dfc087] ">&lt;div</p>
                <p class="text-[#a9b1b3] ">&nbsp;class</p>
                <p class="text-[#a7bb7c] ">"h-screen w-screen bg-[#2b2b2b] p-10"</p>
                <p class="text-[#dfc087] ">&gt;</p>
            </div>
            <div class="flex">
                <p class="text-[#a9b1b3] ">
                    &nbsp; &nbsp; &nbsp; </p>
                <p class="text-[#a9b1b3] ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dolor id ipsa porro quibusdam, quo? A ad animi debitis
                    dignissimos, enim?</p>
            </div>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&nbsp;&nbsp;&nbsp;&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
            <p class="text-[#dfc087] ">&lt;div&gt;</p>
        </div>
    </SimpleLayout>
</template>
