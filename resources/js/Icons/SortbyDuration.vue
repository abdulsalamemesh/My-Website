<script setup>
defineProps({classes: String});
</script>
<template>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" :class="classes">
        <g fill="none" fill-rule="evenodd">
            <rect width="2" height="9" x="4" y="2" fill="#9AA7B0"/>
            <polygon fill="#9AA7B0" points="5 10 9 14 1 14" transform="matrix(1 0 0 -1 0 24)"/>
            <rect width="7" height="2" x="8" y="2" fill="#9AA7B0"/>
            <rect width="5" height="2" x="10" y="6" fill="#9AA7B0"/>
            <rect width="3" height="2" x="12" y="10" fill="#9AA7B0"/>
        </g>
    </svg>
</template>

