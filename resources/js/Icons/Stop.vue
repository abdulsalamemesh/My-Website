<script setup>
defineProps({classes: String});
</script>
<template>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" :class="classes">
        <title>StopTest</title>
        <g>
            <rect width="16" height="16" fill="#ffc4ff" opacity="0"/>
            <rect x="3" y="3" width="10" height="10" fill="#db5860"/>
        </g>
    </svg>
</template>

