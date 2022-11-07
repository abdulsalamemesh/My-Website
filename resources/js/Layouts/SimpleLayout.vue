<script setup>
import {Head} from '@inertiajs/inertia-vue3';
import TestTerminal from '@/Pages/Code/Partials/TestTerminal.vue'
import SideNav from '@/Pages/Code/Partials/SideNav.vue'
import Footer from '@/Pages/Code/Partials/Footer.vue'
import Main from '@/Pages/Code/Partials/Main.vue'
import MainNav from '@/Pages/Code/Partials/MainNav.vue'
import {onMounted} from "vue";
import {setActiveFiles} from "../store";

onMounted(()=>{
    setActiveFiles(route().current())
})
</script>

<template>
    <div class="font-custom">
        <Head title="Abdulsalam Emesh"/>
        <div class="md:h-screen max-h-screen md:w-screen bg-primary-bg font-custom text-sm flex flex-col">
            <div class="grow flex flex-col md:flex-row overflow-y-auto">
                <SideNav/>
                <MainNav/>
                <Main>
                    <!-- Page Content -->
                    <slot/>
                </Main>
            </div>
            <TestTerminal/>
            <Footer/>
        </div>
    </div>
</template>

<script>

</script>
