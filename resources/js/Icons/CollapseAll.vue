<script setup>
defineProps({classes: String});
</script>
<template>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" :class="classes">
        <g fill="none" fill-rule="evenodd">
            <rect width="12" height="2" x="2" y="7" fill="#9AA7B0"/>
            <polygon fill="#9AA7B0" points="8 2 11.5 5.5 4.5 5.5" transform="matrix(1 0 0 -1 0 7.5)"/>
            <polygon fill="#9AA7B0" points="8 10.5 11.5 14 4.5 14"/>
        </g>
    </svg>
</template>

