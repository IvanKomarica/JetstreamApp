<template>
    <a :href="route('users.index')" class="text-indigo-600 hover:text-indigo-900 my-5 block">
        Вернуться назад
    </a>
        <div class=" bg-white px-6 py-4 lg:px-8">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Редактировать пользователя</h2>
            </div>
            <form @submit.prevent="update" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-8">
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                    <div class="sm:col-span-2">
                        <label for="name" class="block text-sm font-semi-bold leading-6 text-gray-900">Имя</label>
                        <div class="mt-2.5">
                            <input :class="{'border-red-500' : form.errors.name}" v-model="form.name" type="text" name="name" id="name" autocomplete="Name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <div class="text-red-500 mt-2" v-if="form.errors.name">{{ form.errors.name }}</div>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semi-bold leading-6 text-gray-900">Email</label>
                        <div class="mt-2.5">
                            <input :class="{'border-red-500' : form.errors.email}" v-model="form.email" type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <div class="text-red-500 mt-2" v-if="form.errors.email">{{ form.errors.email }}</div>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <button :disabled="form.processing" type="submit" class="block w-full rounded-md bg-green-900 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Обновить</button>
                </div>
                <div v-if="form.isDirty">
                    Что-то изменилось не забудьте сохранить форму
                </div>
            </form>
        </div>
</template>

<script>
import {Link, useForm} from "@inertiajs/vue3";
export default {
    components:
    {
        Link,
    },
    props:
    {
        user: Object,
    },
    setup(props)
    {
        const form = useForm({
            name: props.user.name,
            email: props.user.email,
        });
        function update()
        {
            form.put(route('users.update', props.user.id));
        }
        return { form, update }
    }
}
</script>
