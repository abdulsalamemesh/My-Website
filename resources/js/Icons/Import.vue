<script setup>
defineProps({classes: String});
</script>
<template>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" :class="classes">
        <g fill="none" fill-rule="evenodd">
            <rect width="2" height="10" x="2" y="4" fill="#9AA7B0"/>
            <rect width="10" height="2" x="2" y="12" fill="#9AA7B0"/>
            <g fill="#9AA7B0" transform="translate(6 1)">
                <rect width="2" height="8.386" x="3.532" y=".269" transform="rotate(45 4.532 4.462)"/>
                <polygon points="0 3 6 9 0 9"/>
            </g>
        </g>
    </svg>
</template>

