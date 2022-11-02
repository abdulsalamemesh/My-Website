import {useDark, useToggle} from "@vueuse/core/index";
import {computed, ref} from "vue";
import {usePage} from "@inertiajs/inertia-vue3";

export const isDark = useDark()
export const currentLocation = ref('home')
export const showNav = ref(false)
export const selectableLocale = computed(() => {
    return usePage().props.value.locale;
})

export function toggleDark() {
    showNav.value = false
    useToggle(isDark)()
}


export function syncScroll(){
    const elems = document.getElementsByClassName("scroll-js");

    function foo() {
        let top = this.scrollTop;

        for (let i = 0; i < elems.length; i++) {
            elems[i].scrollTop = top;
        }
    }

    for (let i = 0; i < elems.length; i++) {
        elems[i].addEventListener("scroll", foo);
    }
}




