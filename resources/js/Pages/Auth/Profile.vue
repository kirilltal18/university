<script setup>
import {router, useForm, usePage} from "@inertiajs/vue3";
import ProfileNav from "@/Components/ProfileNav.vue";
import axios from "axios";
import {toast} from "vue3-toastify";
import 'vue3-toastify/dist/index.css';

const user = usePage().props.auth.user;

const form = useForm({
    name: user.name,
    surname: user.surname,
    patronymic: user.patronymic,
    passport_series: user.passport_series,
    passport_number: user.passport_number,
    passport_date: user.passport_date,
    birthday: user.birthday,
    gender: user.gender,
    email: user.email
});

const update = () => {
    axios.patch(route('profile.update'),form)
        .then(res => toast(res.data, {
            autoClose: 1000,
            type: 'success'
        }))
        .catch(error => (toast(error.response.data.message, {
        autoClose: 1000,
        type: 'error'
    })))
};

</script>

<template>
    <ProfileNav/>

    <!-- User Profile Form -->
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h2 class="text-lg leading-6 font-medium text-gray-900">Обновить информацию профиля</h2>

                <div class="mt-5">
                    <div class="w-full sm:max-w-xs mt-2">
                        <label for="name">Имя</label>
                        <input id="name" v-model="form.name" autocomplete="name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" name="name" placeholder="Email address"
                               required
                               type="text">
                    </div>
                    <div class="w-full sm:max-w-xs mt-2">
                        <label for="surname">Фамилия</label>
                        <input id="surname" v-model="form.surname" autocomplete="surname" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" name="surname"
                               placeholder="Email address"
                               required
                               type="text">
                    </div>
                    <div class="w-full sm:max-w-xs mt-2">
                        <label for="surname">Отчество</label>
                        <input id="patronymic" v-model="form.patronymic" autocomplete="patronymic" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                               name="patronymic" placeholder="Email address"
                               required
                               type="text">
                    </div>
                    <div class="w-full sm:max-w-xs mt-2">
                        <label for="email">Серия паспорта</label>
                        <input id="passport_series" v-model="form.passport_series" autocomplete="passport_series" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                               name="passport_series" placeholder="Email address"
                               required
                               type="text">
                    </div>
                    <div class="w-full sm:max-w-xs mt-2">
                        <label for="email">Номер паспорта</label>
                        <input id="passport_number" v-model="form.passport_number" autocomplete="passport_number" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                               name="passport_number" placeholder="Email address"
                               required
                               type="text">
                    </div>
                    <div class="w-full sm:max-w-xs mt-2">
                        <label for="email">Дата регистрации</label>
                        <input id="passport_date" v-model="form.passport_date" autocomplete="passport_date" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                               name="passport_date" placeholder="Email address"
                               required
                               type="date">
                    </div>
                    <div class="w-full sm:max-w-xs mt-2">
                        <label for="email">Дата рождения</label>
                        <input id="birthday" v-model="form.birthday" autocomplete="birthday" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" name="birthday"
                               placeholder="Email address"
                               required
                               type="date">
                    </div>
                    <div class="w-full sm:max-w-xs mt-2">
                        <label for="email">Email</label>
                        <input id="email" v-model="form.email" autocomplete="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" name="email" placeholder="Email address"
                               required
                               type="email">
                    </div>
                    <div class="w-full sm:max-w-xs mt-2">
                        <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                            <input
                                id="radioDefault01"
                                v-model="form.gender"
                                class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                name="flexRadioDefault"
                                type="radio"
                                value="мужской"
                            />

                            <label
                                class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                for="radioDefault01">
                                мужской
                            </label>
                        </div>
                        <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                            <input
                                id="radioDefault02"
                                v-model="form.gender"
                                class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                name="flexRadioDefault"
                                type="radio"
                                value="женский"
                            />
                            <label
                                class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                for="radioDefault02">
                                женский
                            </label>
                        </div>
                    </div>
                    <div class="mt-3">
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
