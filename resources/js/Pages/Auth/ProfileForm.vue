<script setup>
import {router, useForm, usePage} from "@inertiajs/vue3";
import ProfileNav from "@/Components/ProfileNav.vue";
import axios from "axios";
import {toast} from "vue3-toastify";
import 'vue3-toastify/dist/index.css';

const user = usePage().props.auth.user;

const form = useForm({
    hobbies: user.hobbies,
});

const update = () => {
    axios.patch(route('form.update'),form)
        .then(res => toast(res.data, {
            autoClose: 1000,
            type: 'success'
        }))
        .catch(error => console.log(error.response.data.message))
};

</script>

<template>
    <ProfileNav/>

    <!-- User Profile Form -->
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h2 class="text-lg leading-6 font-medium text-gray-900">Обновить информацию анкеты</h2>

                <div class="mt-5">
                    <div class="w-full sm:max-w-xs mt-2">
                        <label for="hobbies">Hobbies</label>
                        <input id="hobbies" v-model="form.hobbies" autocomplete="hobbies" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" name="name" placeholder="Hobbies"
                               required
                               type="text">
                    </div>

                    <div class="mt-5 ">
                        <button @click.prevent="update" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition"
                                >
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
