<script setup>
defineProps({classes:String});
</script>
<template>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" :class="classes">
        <g fill="none" fill-rule="evenodd">
            <g transform="translate(1 1)">
                <polygon fill="#B99BF8" fill-opacity=".7" points="0 15 15 15 15 8 0 8"/>
                <polygon fill="#9AA7B0" fill-opacity=".8" points="6 0 2 4 6 4"/>
                <polygon fill="#9AA7B0" fill-opacity=".8" points="7 0 7 5 2 5 2 7 12 7 12 0"/>
            </g>
            <path fill="#231F20" fill-opacity=".7" d="M1.9,2.5 C2.564,2.5 3,2.38439941 3,1.75 C3,1.11560059 2.557,1 1.9,1 L1,1 L1,2.5 L1.9,2.5 Z M0,0 L1.971,0 C3.142,0 4,0.642 4,1.65 C4,3.28582764 2.971,3.5 1.872,3.5 L1,3.5 L1,5 L0,5 L0,0 Z" transform="translate(2 10)"/>
            <path fill="#231F20" fill-opacity=".7" d="M1.9,2.5 C2.564,2.5 3,2.38439941 3,1.75 C3,1.11560059 2.557,1 1.9,1 L1,1 L1,2.5 L1.9,2.5 Z M0,0 L1.971,0 C3.142,0 4,0.642 4,1.65 C4,3.28582764 2.971,3.5 1.872,3.5 L1,3.5 L1,5 L0,5 L0,0 Z" transform="translate(12 10)"/>
            <polygon fill="#231F20" fill-opacity=".7" points="0 0 1 0 1 2 3 2 3 0 4 0 4 5 3 5 3 3 1 3 1 5 0 5" transform="translate(7 10)"/>
        </g>
    </svg>

</template>

