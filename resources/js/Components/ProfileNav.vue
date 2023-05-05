<script setup>
import {Link, router} from '@inertiajs/vue3'
</script>

<template>
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="#" class="text-white font-bold">University</a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <Link :href="route('profile')" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Личный кабинет</Link>
                            <Link :href="route('form')" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">страница анкеты</Link>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button @click.prevent="router.post(route('logout'))" class="bg-gray-700 text-white px-3 py-2 rounded-md text-sm font-medium">Log Out</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>


<style scoped>

</style>
