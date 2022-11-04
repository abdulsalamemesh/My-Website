<script setup>
defineProps({classes: String});
</script>
<template>
    <svg width='16' height='16' viewBox='0,0,16,16' xmlns='http://www.w3.org/2000/svg' :class="classes">
        <g>
            <path fill-rule='evenodd' d='M0,0L16,0L16,16L0,16Z' fill="#adb5b8" opacity='0'/>
            <path fill-rule='evenodd' d='M15,14L1,14L1,1L15,1L15,14Z' fill='#3c3f41'/>
            <path fill-rule='evenodd' d='M2,13L14,13L14,5L2,5L2,13Z' fill='#adb5b8'/>
            <path fill-rule='evenodd' d='M13,12L3,12L3,5L13,5L13,12Z' fill='#60a5fa'/>
            <path fill-rule='evenodd' d='M14,5L2,5L2,2L14,2L14,5Z' fill='#adb5b8'/>
        </g>
    </svg>
</template>

