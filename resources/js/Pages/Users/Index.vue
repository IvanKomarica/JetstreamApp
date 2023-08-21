<template>
    <Head>
        <title>
            {{ title }}
        </title>
    </Head>
    <header class="bg-white shadow mb-10">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                {{ title }}
            </h1>
        </div>
    </header>
    <Link :href="route('users.create')" class="text-indigo-600 hover:text-indigo-900 my-5 ml-6 block ">
        Add user
    </Link>
    <div class="flex flex-col">
        <ul v-if="users.total" role="list" class="divide-y divide-gray-200">
            <li v-for="user in users.data" :key="user.id">
                <a href="#" class="block hover:bg-gray-50">
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="truncate text-sm font-medium text-black">{{ user.name }}</div>
                            <div class="ml-2 flex flex-shrink-0">
<!--                                <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Full-time</span>-->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                                <a :href="route('users.edit', user.id)" class="text-indigo-600 hover:text-indigo-900">
                                    Редактировать</a>
                            </div>
                        </div>
                        <div class="mt-2 flex justify-between">
                            <div class="sm:flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 hover:border-gray-300 mr-1">
                                    <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                                </svg>
                                <div class="mr-6 flex items-center text-sm text-gray-500">
                                    {{ user.email }}
                                </div>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                                <a @click="destroy(user.id)" class="text-red-600 hover:text-red-900 cursor-pointer">
                                    Удалить
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <Pagination :links="users.links"></Pagination>
        </ul>
        <div v-else class="text-center font-bold text-xl">
            Пользователей пока нет
        </div>

    </div>
</template>

<script>
import {Head, router} from "@inertiajs/vue3";
import Pagination from "@/Pages/Shared/Pagination.vue";
import {Link} from "@inertiajs/vue3";
export default {
    props:
    {
        title: String,
        users: Array,
    },
    components:
    {
        Head,
        Pagination,
        Link
    },
    methods:
    {
        router() {
            return router
        },
        destroy(id)
        {
            if(confirm('Вы уверенны?'))
            {
                this.$inertia.delete(this.route('users.destroy', id));
            }
        }
    }
}
</script>
