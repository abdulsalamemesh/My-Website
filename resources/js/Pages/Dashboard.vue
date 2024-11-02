<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { router } from '@inertiajs/vue3'
import { Head } from '@inertiajs/vue3';

defineProps({contacts: Object});
</script>

<template>
    <Head title="Dashboard"/>
    <AppLayout>
        <div class="w-full text-center py-6 dark:text-white border-b border-slate-300 dark:border-slate-600 font-medium">
           Contacts
        </div>
        <div class="py-12">

            <div class="px-4 sm:px-6 lg:px-8">
                <div class="space-y-6 md:hidden">
                    <template v-for="contact in contacts">
                        <div
                            class="border-b border-gray-200 dark:border-slate-600 bg-white dark:bg-slate-600 border border-gray-300 rounded shadow divide-y divide-gray-300 dark:divide-slate-600 flex flex-col overflow-hidden">
                            <div class="flex flex-col">
                                <div class="w-full text-left p-2 dark:text-white bg-slate-100 dark:bg-slate-800 border-r dark:border-slate-600">
                                    id
                                </div>
                                <div class="text-left p-2 dark:bg-slate-700 dark:text-white w-full">
                                    {{ contact.id }}
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="w-full text-left p-2 dark:text-white bg-slate-100 dark:bg-slate-800 border-r dark:border-slate-600">
                                    created
                                </div>
                                <div class="text-left p-2 dark:bg-slate-700 dark:text-white w-full">
                                    {{ contact.created_at }}
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="w-full text-left p-2 dark:text-white bg-slate-100 dark:bg-slate-800 border-r dark:border-slate-600">
                                    name
                                </div>
                                <div class="text-left p-2 dark:bg-slate-700 dark:text-white w-full">
                                    {{ contact.name }}
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="w-full text-left p-2 dark:text-white bg-slate-100 dark:bg-slate-800 border-r dark:border-slate-600">
                                    email
                                </div>
                                <div class="text-left p-2 dark:bg-slate-700 dark:text-white w-full">
                                    <a :href="'mailto:'+contact.email" class="hover:text-blue-500 hover:dark:text-slate-900"> {{ contact.email }}</a>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="w-full text-left p-2 dark:text-white bg-slate-100 dark:bg-slate-800 border-r dark:border-slate-600">
                                    phone
                                </div>
                                <div class="text-left p-2 dark:bg-slate-700 dark:text-white w-full">
                                    <a :href="'tel:'+contact.phone" class="hover:text-blue-500 hover:dark:text-slate-900"> {{ contact.phone }}</a>
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <div class="w-full text-left p-2 dark:text-white bg-slate-100 dark:bg-slate-800 border-r dark:border-slate-600">
                                    message
                                </div>
                                <div class="text-left p-2 dark:bg-slate-700 dark:text-white w-full">
                                    {{ contact.message }}
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="w-full text-left p-2 dark:text-white bg-slate-100 dark:bg-slate-800 border-r dark:border-slate-600">
                                    read at:
                                </div>
                                <div class="text-left p-2 dark:bg-slate-700 dark:text-white w-full">
                                    <span v-if=" contact.read_at ">contact.read_at</span>
                                    <div v-else> not marked yet
                                        <form @submit.prevent="router.post(route('set-read'),contact)">
                                            <button type="submit"
                                                    class="inline-block p-1 rounded text-sm font-medium text-white bg-blue-500 dark:bg-indigo-600 hover:bg-blue-600 hover:dark:bg-indigo-700 focus:bg-blue-400 focus:dark:bg-indigo-800 focus:ring focus:dark:ring focus:ring-slate-400 focus:dark:ring-white disabled:bg-gray-600 disabled:dark:bg-gray-600">
                                                set to now
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </template>
                </div>
                <div class="bg-white dark:bg-slate-800 overflow-hidden shadow-xl rounded-lg hidden md:block">
                    <div class="overflow-x-auto">
                        <div class="w-full">
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                <tr class="bg-gray-100 text-gray-600 dark:text-white dark:bg-slate-700 text-sm ">
                                    <th class="py-3 pl-6 text-left">Id</th>
                                    <th class="py-3 pl-6 text-left">Send at</th>
                                    <th class="py-3 pl-6 text-left">Name</th>
                                    <th class="py-3 pl-6 text-center">Email</th>
                                    <th class="py-3 pl-6 text-center">Phone</th>
                                    <th class="py-3 pl-6 text-center">Message</th>
                                    <th class="py-3 pl-6 text-center">Read at</th>
                                    <th class="py-3 pl-6 text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody class="text-gray-600 dark:text-white text-sm font-medium">
                                <template v-for="contact in contacts">
                                    <tr class="border-b border-gray-200 dark:border-slate-600 hover:bg-gray-100 hover:dark:bg-slate-600">
                                        <td class="py-1 pl-6 text-left">
                                            {{ contact.id }}
                                        </td>
                                        <td class="py-1 pl-6 text-left">
                                            {{ contact.created_at }}
                                        </td>
                                        <td class="py-1 pl-6 text-left">
                                            {{ contact.name }}
                                        </td>
                                        <td class="py-1 pl-6 text-left">
                                            <a :href="'mailto:'+contact.email" class="hover:text-blue-500 hover:dark:text-slate-900"> {{ contact.email }}</a>
                                        </td>
                                        <td class="py-1 pl-6 text-left">
                                            <a :href="'tel:'+contact.phone" class="hover:text-blue-500 hover:dark:text-slate-900"> {{ contact.phone }}</a>
                                        </td>
                                        <td class="py-1 pl-6 text-left max-w-sm">
                                            {{ contact.message }}
                                        </td>
                                        <td class="py-1 pl-6 text-left">
                                            {{ contact.read_at }}
                                        </td>
                                        <td class="py-1 px-6 text-center">
                                            <form @submit.prevent="router.post(route('set-read'),contact)">
                                                <button type="submit"
                                                        class="inline-block py-2 px-4 my-2 rounded text-sm font-medium text-white bg-blue-500 dark:bg-indigo-600 hover:bg-blue-600 hover:dark:bg-indigo-700 focus:bg-blue-400 focus:dark:bg-indigo-800 focus:ring focus:dark:ring focus:ring-slate-400 focus:dark:ring-white disabled:bg-gray-600 disabled:dark:bg-gray-600">
                                                    Toggle read
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
