<script setup>
defineProps({classes: String});
</script>
<template>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" :class="classes">
        <g fill="none" fill-rule="evenodd">
            <polygon fill="#9AA7B0" fill-opacity=".8" points="7 1 3 5 7 5"/>
            <polygon fill="#9AA7B0" fill-opacity=".8" points="8 1 8 6 3 6 3 8 13 8 13 1"/>
            <polygon fill="#62B543" points="12 16 15.5 12.443 12 9"/>
            <polygon fill="#F26522" fill-opacity=".7" points="6 9 .9 9 0 10.556 4.5 16 6 14.186"/>
            <polygon fill="#F26522" points="7.5 12.5 11 9 11 16"/>
        </g>
    </svg>

</template>

