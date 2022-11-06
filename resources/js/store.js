import {useDark, useToggle} from "@vueuse/core/index";
import {computed, ref, shallowRef} from "vue";
import {usePage} from "@inertiajs/inertia-vue3";


import SourceRoot from '@/Icons/SourceRoot.vue';
import ResourceRoot from '@/Icons/ResourceRoot.vue';
import PHPClass from '@/Icons/PHPClass.vue';
import AbstractClass from '@/Icons/AbstractClass.vue';
import Trait from '@/Icons/Trait.vue';
import Blade from '@/Icons/Blade.vue';
import DotFile from '@/Icons/DotFile.vue';
import PHP from '@/Icons/PHP.vue';
import JSONFile from '@/Icons/JSONFile.vue';
import TestUnitFile from '@/Icons/TestUnitFile.vue';
import JSFile from '@/Icons/JSFile.vue';
import Markdown from '@/Icons/Markdown.vue';
import {Inertia} from "@inertiajs/inertia";
import {value} from "lodash/seq";

export const showTestTerminal = ref(false)
export const isDark = useDark()
export const currentLocation = ref('home')
export const rowsCount = ref(150)
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

export const activeFilesList = shallowRef([
    {
        'name': 'README.md',
        'link': 'readme',
        'icon': Markdown
    },
])

export function setActiveFiles(link) {
    let selectedFile = filesList.value.filter(file => file.link === link)
    if (activeFilesList.value.filter(file => file.link === selectedFile[0].link).length === 0) {
        activeFilesList.value.push(selectedFile[0])
    }
    if (activeFilesList.value.length > 5) {
        activeFilesList.value.shift()
    }
}


export function removeFromActiveFilesList(link) {
    activeFilesList.value = activeFilesList.value.filter(file => file.link !== link)

    if (activeFilesList.value.length === 0 && route().current(link) !== 'empty') {
        Inertia.get('empty')
        return
    }
    if (route().current(link)) {
        Inertia.get(activeFilesList.value[0].link)
    }

}

const filesList = shallowRef([
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
    {
        'name': 'skill.blade.php',
        'link': 'skill',
        'icon': Blade
    },
    {
        'name': 'other-information.blade.php',
        'link': 'other-information',
        'icon': Blade
    },
    {
        'name': 'project.blade.php',
        'link': 'project',
        'icon': Blade
    },
    {
        'name': 'layout.blade.php',
        'link': 'layout',
        'icon': Blade
    },
    {
        'name': 'web.php',
        'link': 'web',
        'icon': PHP
    },
    {
        'name': '.env',
        'link': 'env',
        'icon': DotFile
    },
    {
        'name': '.env.example',
        'link': 'env-example',
        'icon': DotFile
    },
    {
        'name': '.gitignore',
        'link': 'gitignore-root',
        'icon': DotFile
    },
    {
        'name': 'web.php',
        'link': 'web',
        'icon': PHP
    },
    {
        'name': 'console.php',
        'link': 'console-route',
        'icon': PHP
    },
    {
        'name': 'channels.php',
        'link': 'channels',
        'icon': PHP
    },
    {
        'name': 'api.php',
        'link': 'api',
        'icon': PHP
    },
    {
        'name': 'artisan.php',
        'link': 'artisan',
        'icon': PHP
    },
    {
        'name': 'composer.json',
        'link': 'composer',
        'icon': JSONFile
    },
    {
        'name': 'package.json',
        'link': 'package',
        'icon': JSONFile
    },
    {
        'name': 'phpunit.xml',
        'link': 'phpunit',
        'icon': TestUnitFile
    },
    {
        'name': 'postcss.config.js',
        'link': 'postcss',
        'icon': JSFile
    },
    {
        'name': 'README.md',
        'link': 'readme',
        'icon': Markdown
    },
    {
        'name': 'tailwind.config.js',
        'link': 'tailwind-config',
        'icon': JSFile
    },
    {
        'name': 'vite.config.js',
        'link': 'vite',
        'icon': JSFile
    },
    {
        'name': 'CreatesApplication.php',
        'link': 'creates-application',
        'icon': Trait
    },
    {
        'name': 'TestCase.php',
        'link': 'test-case',
        'icon': AbstractClass
    },
    {
        'name': 'UnitTest.php',
        'link': 'unit-test',
        'icon': PHPClass
    },
])

export function toggleFolder(folderName, open) {
    let clickedFolder = foldersStructure.value.find(folder => folder.name === folderName)

    if (open) {
        openedFolders.value.push(clickedFolder.name)
    } else {

        if (clickedFolder.children) {
            clickedFolder.children.forEach(function (child) {
                const childIndex = openedFolders.value.indexOf(child)
                if (childIndex > -1) {
                    openedFolders.value.splice(childIndex,1)
                }
            })
        }
        let clickedFolderIndex = openedFolders.value.indexOf(clickedFolder.name)
        if (clickedFolderIndex > -1) {
            openedFolders.value.splice(clickedFolderIndex,1)
        }
    }
}

export const foldersStructure = ref([
    {
        'name': 'app',
        'topLevel': true,
        'parent': null,
        'children': null
    },
    {
        'name': 'resources',
        'topLevel': true,
        'parent': null,
        'children': ['css', 'js', 'markdown', 'views']
    },
    {
        'name': 'routes',
        'topLevel': true,
        'parent': null,
        'children': ['feature', 'unit']
    },
    {
        'name': 'tests',
        'topLevel': true,
        'parent': null,
        'children': null
    },
    {
        'name': 'views',
        'topLevel': false,
        'parent': 'resources',
        'children': null
    },
    {
        'name': 'unit',
        'topLevel': false,
        'parent': 'tests',
        'children': null
    },
])

export const openedFolders = ref(['resources', 'views'])

export function setRowsCountFromWindowListener(mobile, desktop){
    if (window.innerWidth < 950) {
        rowsCount.value = mobile
    } else {
        rowsCount.value = desktop
    }
    window.addEventListener('resize', function () {
        if (window.innerWidth < 950) {
            rowsCount.value = mobile
        } else {
            rowsCount.value = desktop
        }
    })
}
export function removeRowsCountFromWindowListener(){
    window.removeEventListener('resize', () => rowsCount.value = 150);
}
