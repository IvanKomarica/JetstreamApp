<template>
    <div v-if="links.length > 3" class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
        <div class="flex flex-1 justify-between sm:hidden">
            <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">fasfs</a>
            <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
        </div>
        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700">
                    Showing
                    <span class="font-medium">1</span>
                    to
                    <span class="font-medium">10</span>
                    of
                    <span class="font-medium">97</span>
                    results
                </p>
            </div>
            <div>
                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                    <Link
                        :disabled="link.url === null"
                        :href="link.url"
                        v-for="(link, k) in links"
                        :key="k" v-html="link.label"
                        aria-current="page"
                        :class="
                        [
                            link.active ? 'text-red-500 font-bold' : 'text-white',
                            link.url === null ?? 'bg-gray-100',
                        ]"
                        class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        >
                    </Link>
                </nav>
            </div>
        </div>
    </div>
</template>
<script>
import {Link} from "@inertiajs/vue3";
export default {
    props:
    {
        links: Array,
    },
    components:
    {
        Link
    },
}
</script>
