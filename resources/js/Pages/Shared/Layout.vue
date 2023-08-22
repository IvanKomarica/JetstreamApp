<template>
    <div class="container  p-6">
        <p v-if="$page.props.message" class="bg-indigo-600 h-10 flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">
            {{ $page.props.message }}
        </p>
        <ul>
            <li>
                <Link :href="route('home')">Home</Link>
            </li>
            <li>
                <Link :href="route('about')">About</Link>
            </li>
            <li>
                <Link :href="route('users.index')">Users</Link>
            </li>
        </ul>
        <slot></slot>
    </div>
</template>

<script>
import {Link} from "@inertiajs/vue3";
export default {
    components:
    {
        Link,
    }
}
</script>
