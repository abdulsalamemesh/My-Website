<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Inertia} from "@inertiajs/inertia";

defineProps({contacts: Object});
</script>

<template>
    <AppLayout>
        <div class="py-12">
            <div class=" sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="overflow-x-auto">
                        <div class="w-full">
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                <tr class="bg-gray-100 text-gray-600 text-sm ">
                                    <th class="py-3 pl-6 text-left">Id</th>
                                    <th class="py-3 pl-6 text-left">Name</th>
                                    <th class="py-3 pl-6 text-center">Email</th>
                                    <th class="py-3 pl-6 text-center">Phone</th>
                                    <th class="py-3 pl-6 text-center">Message</th>
                                    <th class="py-3 pl-6 text-center">Read at</th>
                                    <th class="py-3 pl-6 text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-medium">
                                <template v-for="contact in contacts">
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-1 pl-6 text-left">
                                            {{ contact.id }}
                                        </td>
                                        <td class="py-1 pl-6 text-left">
                                            {{ contact.name }}
                                        </td>
                                        <td class="py-1 pl-6 text-left">
                                            <a :href="'mailto:'+contact.email" class="hover:text-blue-500"> {{ contact.email }}</a>
                                        </td>
                                        <td class="py-1 pl-6 text-left">
                                            <a :href="'tel:'+contact.phone" class="hover:text-blue-500"> {{ contact.phone }}</a>
                                        </td>
                                        <td class="py-1 pl-6 text-left max-w-sm">
                                            {{ contact.message }}
                                        </td>
                                        <td class="py-1 pl-6 text-left">
                                            {{ contact.read_at }}
                                        </td>
                                        <td class="py-1 px-6 text-center">
                                            <form @submit.prevent="Inertia.post(route('set-read'),contact)">
                                                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Toggle read</button>
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
