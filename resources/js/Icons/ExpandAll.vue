<script setup>
defineProps({classes: String});
</script>
<template>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" :class="classes">
        <g fill="none" fill-rule="evenodd">
            <rect width="12" height="2" x="2" y="1" fill="#9AA7B0"/>
            <rect width="12" height="2" x="2" y="13" fill="#9AA7B0"/>
            <polygon fill="#9AA7B0" points="8 9 11.5 12 4.5 12" transform="matrix(1 0 0 -1 0 21)"/>
            <polygon fill="#9AA7B0" points="8 4 11.5 7 4.5 7"/>
        </g>
    </svg>
</template>

