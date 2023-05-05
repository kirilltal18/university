<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {Head, Link, router, useForm} from '@inertiajs/vue3';
import axios from 'axios'
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

const form = useForm({
    name: '',
    surname: '',
    patronymic: '',
    passport_series: '',
    passport_number: '',
    passport_date: '',
    birthday: '',
    email: '',
    password: Math.random().toString(36).slice(-10),
    gender: '',
});

const submit = () => {
    axios.post(route('register'),form).then(res => router.visit(route('profile'))).catch(error => (toast(error.response.data.message, {
        autoClose: 1000,
        type: 'error'
    })))
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" ></Head>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Имя" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"

                    autofocus
                    autocomplete="name"
                />

            </div>
            <div class="mt-4">
                <InputLabel for="surname" value="Фамилия" />

                <TextInput
                    id="surname"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.surname"

                    autofocus
                    autocomplete="surname"
                />

            </div>
            <div class="mt-4">
                <InputLabel for="patronymic" value="Отчество" />

                <TextInput
                    id="patronymic"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.patronymic"

                    autofocus
                    autocomplete="patronymic"
                />

            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"

                    autocomplete="username"
                />

            </div>

            <div class="mt-4">
                <InputLabel for="passport_series" value="Серия паспорта" />

                <TextInput
                    id="passport_series"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.passport_series"

                    autocomplete="passport_series"
                />

            </div>

            <div class="mt-4">
                <InputLabel for="passport_number" value="Номер паспорта" />

                <TextInput
                    id="passport_number"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.passport_number"

                    autocomplete="passport_number"
                />

            </div>

            <div class="mt-4">
                <InputLabel for="passport_date" value="Дата регистрации" />

                <TextInput
                    id="passport_date"
                    type="date"
                    class="mt-1 block w-full"
                    v-model="form.passport_date"

                    autocomplete="passport_date"
                />

            </div>
            <div class="mt-4">
                <InputLabel for="birthday" value="Дата рождения" />

                <TextInput
                    id="birthday"
                    type="date"
                    class="mt-1 block w-full"
                    v-model="form.birthday"

                    autocomplete="passport_date"
                />

            </div>
            <div class="mt-4">
                <InputLabel for="gender" value="Пол" />


                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                    <input
                        class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                        type="radio"
                        name="flexRadioDefault"
                        id="radioDefault01"
                        value="мужской"
                        v-model="form.gender"
                    />

                    <label
                        class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                        for="radioDefault01">
                        мужской
                    </label>
                </div>
                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                    <input
                        class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                        type="radio"
                        name="flexRadioDefault"
                        id="radioDefault02"
                        value="женский"
                        v-model="form.gender"
                         />
                    <label
                        class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                        for="radioDefault02">
                        женский
                    </label>
                </div>
                <div class="mt-4">
                    Ваш пароль: {{ form.password}}

                </div>


            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already registered?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
