<script setup>
defineProps({
    id: {
        type: String,
        default: 'home'
    },
})
</script>
<template>
    <a :href="'#' + id" class="flex justify-center items-center relative">
        <div
            class="w-[80px] h-[80px] scale-0 opacity-100 border-8 border-hot-500 dark:border-indigo-600 rounded-full absolute animate-[grow_2.5s_linear_infinite]"
            style="animation-delay: 1.3s">
        </div>
        <div class="w-[80px] h-[80px] scale-0 opacity-100 border-8 border-hot-500 dark:border-indigo-600 rounded-full absolute animate-[grow_2.5s_linear_infinite]"
             style="animation-delay: 1.7s">
        </div>
        <div class="w-[80px] h-[80px] scale-0 opacity-100 border-8 border-hot-500 dark:border-indigo-600 rounded-full absolute animate-[grow_2.5s_linear_infinite]"
             style="animation-delay: 2.1s">
        </div>
        <div class="relative top-0 w-[20px] h-[82px] overflow-hidden flex justify-center">

            <div class="relative top-[37px] -left-1 animate-[arrow-tip_2.5s_ease-in_infinite]">

                <div class="absolute w-[3px] h-[9px] bg-black dark:bg-white -rotate-45  ">
                </div>
                <div class="absolute w-[3px] h-[9px] bg-black dark:bg-white rotate-45 left-1">
                </div>
            </div>
        </div>
    </a>
</template>


<style>
@keyframes grow {
    0% {
        transform: scale(0.5);
    }
    40% {
        transform: scale(1.0);
        opacity: 0;
    }
    100% {
        transform: scale(1.0);
        opacity: 0;
    }
}


@keyframes arrow-tip {
    0% {
        transform: translateY(-100%);
    }
    50% {
        transform: translateY(-1px);
    }
    90% {
        opacity: 1
    }
    100% {
        opacity: 0;
    }
}
</style>
