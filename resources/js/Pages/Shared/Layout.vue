<template>
    <div class="container  p-6">
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
