import {useDark, useToggle} from "@vueuse/core/index";
import {computed, ref} from "vue";
import {usePage} from "@inertiajs/inertia-vue3";


import SourceRoot from '@/Icons/SourceRoot.vue';
import ResourceRoot from '@/Icons/ResourceRoot.vue';
import TestRoot from '@/Icons/TestRoot.vue';
import ExcludeRoot from '@/Icons/ExcludeRoot.vue';
import Folder from '@/Icons/Folder.vue';
import Blade from '@/Icons/Blade.vue';
import DotFile from '@/Icons/DotFile.vue';
import PHP from '@/Icons/PHP.vue';
import JSONFile from '@/Icons/JSONFile.vue';
import TestUnitFile from '@/Icons/TestUnitFile.vue';
import JSFile from '@/Icons/JSFile.vue';
import Markdown from '@/Icons/Markdown.vue';

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


export function syncScroll() {
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

export const activeFilesList = ref([
    {
        'name': 'index.blade.php',
        'link': 'index',
        'icon': Blade
    },
    {
        'name': 'me.blade.php',
        'link': 'me',
        'icon': Blade
    },
    {
        'name': 'work.blade.php',
        'link': 'work',
        'icon': Blade
    },
    {
        'name': 'education.blade.php',
        'link': 'education',
        'icon': Blade
    },
])

export function setActiveFiles(link) {
    let selectedFile = filesList.filter(file => file.link === link)
    if (activeFilesList.value.filter(file => file.link === selectedFile[0].link).length === 0) {
        activeFilesList.value.push(selectedFile[0])
    }
    if (activeFilesList.value.length > 5){
        activeFilesList.value.shift()
    }
}


export function removeFromActiveFilesList(link) {
    activeFilesList.value =  activeFilesList.value.filter(file => file.link !== link)
}

const filesList = [
    {
        'name': 'index.blade.php',
        'link': 'index',
        'icon': Blade
    },
    {
        'name': '.env',
        'link': 'env',
        'icon': DotFile
    },
    {
        'name': 'work.blade.php',
        'link': 'work',
        'icon': Blade
    },
    {
        'name': 'me.blade.php',
        'link': 'me',
        'icon': Blade
    },
    {
        'name': 'education.blade.php',
        'link': 'education',
        'icon': Blade
    },
    {
        'name': 'skill.blade.php',
        'link': 'skill',
        'icon': Blade
    },

]



