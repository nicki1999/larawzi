<template>
<div>
    <Link href="/hello">Show Page </Link>
    <Link href="/">Main Page </Link>

    <!-- This is the counter {{ timer }} -->
</div>
<div v-if="page.props.flash?.success" class="success">
    {{ page.props.value.flash.success }}
</div>
<slot>
    Default
</slot>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';

//page.props.value.flash.success
const page = usePage()
console.log("Inertia Page Props:", page.props); // Debugging flash messages

//import {ref} from 'vue'

// const timer = ref(0); // Start with 0, no need for `value`

// setInterval(() => {
//     timer.value++
// }, 1000);

</script>
