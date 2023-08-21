<template>
    <Head>
        <title>
            {{ title }}
        </title>
    </Head>
    <h1>
        {{ title }}
    </h1>
</template>

<script>
import {Head} from "@inertiajs/vue3";
export default {
    props: [ 'title' ],
    components:
    {
        Head
    }
}
</script>
