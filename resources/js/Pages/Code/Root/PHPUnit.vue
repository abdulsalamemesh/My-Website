<script setup>
import SimpleLayout from '@/Layouts/SimpleLayout.vue';
import {onBeforeUnmount, onMounted} from "vue";
import {removeRowsCountFromWindowListener, setRowsCountFromWindowListener, syncScroll} from "../../../store";

onMounted(() => {
    syncScroll()
    setRowsCountFromWindowListener(60, 32)
})
onBeforeUnmount(() => {
    removeRowsCountFromWindowListener()
})
</script>

<template>
    <SimpleLayout title="PHPUnit">
        <div class="pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js" id="count">

            <div class="flex flex-wrap">
                <p class="text-code-gold">&lt;? </p>
                <p class="text-code-white">xml version</p>
                <p class="text-code-green">="1.0"&nbsp;</p>
                <p class="text-code-white">encoding</p>
                <p class="text-code-green">="UTF-8"</p>
                <p class="text-code-gold">?> </p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-gold">&lt;phpunit&nbsp;</p>
                <p class="text-code-white">xmlns:</p>
                <p class="text-code-purple">xsi</p>
                <p class="text-code-green">"http://www.w3.org/2001/XMLSchema-instance"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-purple">xsi</p>
                <p class="text-code-white">:noNamespaceSchemaLocation:</p>
                <p class="text-code-green">="./vendor/phpunit/phpunit/phpunit.xsd"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-white">bootstrap</p>
                <p class="text-code-green">="vendor/autoload.php"</p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-white">colors</p>
                <p class="text-code-green">="true"</p>
            </div>
            <div class="flex flex-wrap">
                <p class="text-code-gold">></p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;testsuites> </p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;testsuite&nbsp;</p>
                <p class="text-code-white">name</p>
                <p class="text-code-green">="Unit"</p>
                <p class="text-code-gold">> </p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-gold">&lt;directory&nbsp;</p>
                <p class="text-code-white">suffix</p>
                <p class="text-muted-gray">="Test.php"</p>
                <p class="text-code-gold">> </p>
                <p class="text-code-white">./tests/Unit</p>
                <p class="text-code-gold">&lt;/directory></p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;/testsuite> </p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;testsuite&nbsp;</p>
                <p class="text-code-white">name</p>
                <p class="text-code-green">="Feature"</p>
                <p class="text-code-gold">> </p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-gold">&lt;directory&nbsp;</p>
                <p class="text-code-white">suffix</p>
                <p class="text-muted-gray">="Test.php"</p>
                <p class="text-code-gold">> </p>
                <p class="text-code-white">./tests/Feature</p>
                <p class="text-code-gold">&lt;/directory></p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;/testsuite> </p>
            </div>

            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;/testsuites> </p>
            </div>




            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;coverage&nbsp;</p>
                <p class="text-code-white">processUncoveredFiles</p>
                <p class="text-code-green">="true"</p>
                <p class="text-code-gold">> </p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;include</p>
                <p class="text-code-gold">> </p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(3)">
                <p class="text-code-gold">&lt;directory&nbsp;</p>
                <p class="text-code-white">suffix</p>
                <p class="text-code-green">=".php"</p>
                <p class="text-code-gold">> </p>
                <p class="text-code-white">./app</p>
                <p class="text-code-gold">&lt;/directory></p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;/include> </p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;/coverage> </p>
            </div>




            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;php> </p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;env&nbsp;</p>
                <p class="text-code-white">name</p>
                <p class="text-code-green">="APP_ENV"&nbsp;</p>
                <p class="text-code-white">value</p>
                <p class="text-code-green">="testing"</p>
                <p class="text-code-gold"> /></p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;env&nbsp;</p>
                <p class="text-code-white">name</p>
                <p class="text-code-green">="BCRYPT_ROUNDS"&nbsp;</p>
                <p class="text-code-white">value</p>
                <p class="text-code-green">="4"</p>
                <p class="text-code-gold"> /></p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;env&nbsp;</p>
                <p class="text-code-white">name</p>
                <p class="text-code-green">="CACHE_DRIVER"&nbsp;</p>
                <p class="text-code-white">value</p>
                <p class="text-code-green">="array"</p>
                <p class="text-code-gold"> /></p>
            </div>
            <div class="flex flex-wrap text-muted-gray" :class="paddingLevel(2)">
                <p>&lt;!</p>
                <p>--&nbsp;</p>
                <p>&lt;env&nbsp;</p>
                <p>name</p>
                <p>="DB_CONNECTION"&nbsp;</p>
                <p>value</p>
                <p>="sqlite"</p>
                <p> /></p>
                <p>&nbsp;--</p>
                <p>!></p>
            </div>
            <div class="flex flex-wrap text-muted-gray" :class="paddingLevel(2)">
                <p>&lt;!</p>
                <p>--&nbsp;</p>
                <p>&lt;env&nbsp;</p>
                <p>name</p>
                <p>="DB_DATABASE"&nbsp;</p>
                <p>value</p>
                <p>=":memory:"</p>
                <p> /></p>
                <p>&nbsp;--</p>
                <p>!></p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;env&nbsp;</p>
                <p class="text-code-white">name</p>
                <p class="text-code-green">="MAIL_MAILER"&nbsp;</p>
                <p class="text-code-white">value</p>
                <p class="text-code-green">="array"</p>
                <p class="text-code-gold"> /></p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;env&nbsp;</p>
                <p class="text-code-white">name</p>
                <p class="text-code-green">="QUEUE_CONNECTION"&nbsp;</p>
                <p class="text-code-white">value</p>
                <p class="text-code-green">="sync"</p>
                <p class="text-code-gold"> /></p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;env&nbsp;</p>
                <p class="text-code-white">name</p>
                <p class="text-code-green">="SESSION_DRIVER"&nbsp;</p>
                <p class="text-code-white">value</p>
                <p class="text-code-green">="array"</p>
                <p class="text-code-gold"> /></p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(2)">
                <p class="text-code-gold">&lt;env&nbsp;</p>
                <p class="text-code-white">name</p>
                <p class="text-code-green">="TELESCOPE_ENABLED"&nbsp;</p>
                <p class="text-code-white">value</p>
                <p class="text-code-green">="false"</p>
                <p class="text-code-gold"> /></p>
            </div>
            <div class="flex flex-wrap" :class="paddingLevel(1)">
                <p class="text-code-gold">&lt;/php> </p>
            </div>



            <div class="flex flex-wrap">
                <p class="text-code-gold">&lt;/phpunit> </p>
            </div>


        </div>
    </SimpleLayout>
</template>
