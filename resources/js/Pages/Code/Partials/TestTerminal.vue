<script setup>
import FailedTestColorless from '@/Icons/FailedTestColorless.vue';
import CheckMark from '@/Icons/CheckMark.vue';
import CheckMarkGreen from '@/Icons/CheckMarkGreen.vue';
import TestIgnored from '@/Icons/TestIgnored.vue';
import Sorted from '@/Icons/Sorted.vue';
import SortbyDuration from '@/Icons/SortbyDuration.vue';
import ExpandAll from '@/Icons/ExpandAll.vue';
import CollapseAll from '@/Icons/CollapseAll.vue';
import ArrowTop from '@/Icons/ArrowTop.vue';
import History from '@/Icons/History.vue';
import Import from '@/Icons/Import.vue';
import Export from '@/Icons/Export.vue';
import Settings from '@/Icons/Settings.vue';
import PHPUnit from '@/Icons/PHPUnit.vue';
import StopColorless from '@/Icons/StopColorless.vue';
import Run from '@/Icons/Run.vue';
import ChevronRight from '@/Icons/ChevronRight.vue';
import {showTestTerminal} from "../../../store";
</script>

<template>
    <div class="w-full bg-menu-bg border-b-[1px] border-black/30 hidden md:block" v-show="showTestTerminal">
        <div class="bg-code-banner flex items-center justify-between border-b-[1px] border-black/30">
            <div class="flex items-center">
                <p class="text-code-white text-[0.7rem] inline-block px-2 border-b-2 border-transparent pb-0.5">Run:</p>
                <div class="flex items-center border-b-2 border-blue-400 pb-0.5">
                    <PHPUnit class="w-4 h-4"/>
                    <p class="text-code-white text-[0.7rem] inline-block px-2">UnitTest.php</p>
                    <div class="cursor-pointer text-gray-500">x</div>
                </div>
            </div>
            <div>
                <button @click="showTestTerminal = false" class="px-3 py-0.5 text-code-white">
                    <span class="inline-block w-2 h-[3px] bg-code-white"></span>
                </button>
            </div>
        </div>
        <div class="flex">
            <div class="py-1.5 px-1 border-r border-black/30 flex flex-col space-y-2">
                <Run class="w-3.5 h-3.5 text-green-500 fill-current"/>
                <FailedTestColorless class="w-3.5 h-3.5 text-muted-gray fill-current"/>
                <span class="border-b border-muted-gray"></span>
                <Settings class="w-3.5 h-3.5"/>
                <span class="border-b border-muted-gray"></span>
                <StopColorless class="w-3.5 h-3.5"/>
            </div>
            <div class="grow flex">
                <div class="grow max-w-md">
                    <div class="px-1.5 py-1 border-b border-black/30 flex items-center space-x-1 h-7">
                        <CheckMark class="w-4 h-4"/>
                        <TestIgnored class="w-4 h-4"/>
                        <div class="px-1"> <div class="h-4 w-[1px] bg-muted-gray"></div></div>
                        <Sorted class="w-4 h-4"/>
                        <SortbyDuration class="w-4 h-4"/>
                        <div class="px-1"> <div class="h-4 w-[1px] bg-muted-gray"></div></div>
                        <ExpandAll class="w-4 h-4"/>
                        <CollapseAll class="w-4 h-4"/>
                        <div class="px-1"> <div class="h-4 w-[1px] bg-muted-gray"></div></div>
                        <ArrowTop class="w-4 h-4"/>
                        <ArrowTop class="w-4 h-4 rotate-180"/>
                        <div class="px-1"> <div class="h-4 w-[1px] bg-muted-gray"></div></div>
                        <History class="w-4 h-4 rotate-180"/>
                        <Import class="w-4 h-4 rotate-180"/>
                        <Export class="w-4 h-4 rotate-180"/>
                    </div>
                    <div class="grow">
                        <div class="px-1.5  border-b border-black/30 flex items-center justify-between space-x-1 bg-slate-800 h-7">
                            <div class="flex items-center">
                                <ChevronRight class="h-3 w-3 text-menu-font fill-current"/>
                                <CheckMarkGreen class="w-4 h-4 mr-1"/>
                                <p class="text-code-white text-[0.7rem]">Test Results</p>
                            </div>
                            <div>
                                <p class="text-code-white text-[0.7rem]">172ms</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grow">
                    <div class="px-1.5 py-1 border-b border-black/30 flex items-center space-x-1">
                        <div class="flex items-center">
                            <CheckMarkGreen class="w-4 h-4 mr-1"/>
                            <p class="text-code-white text-[0.7rem]">1 Tests passed: 1 <span class="text-gray-500">of 1 test - 172ms</span></p>
                        </div>
                    </div>
                    <div class="min-h-[250px] border-l border-black/30 bg-primary-bg py-0.5 px-2">
                        <p class="text-code-white">PHPUnit 9.5.25</p>
                        <br>
                        <br>
                        <br>
                        <p class="text-code-white">Time: 00:00.172, Memory: 20.00 MB</p>
                        <p class="bg-code-green-comment px-1 py-1 break-words">"{{__('Yes, all tests confirm that Abdulsalam is a great Developer')}}"</p>
                        <p class="inline-block bg-code-green-comment px-1 py-1">OK (1 test, 1 assertion)</p>
                        <p class="text-code-white">Process finished with exit code 0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
