<template>
    <div>
        <Link href="/hello">Show Page </Link>
        <Link href="/">Main Page </Link>

        <!-- This is the counter {{ timer }} -->
    </div>
    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>
    <slot> Default </slot>
</template>

<script setup>
import { usePage, Link } from "@inertiajs/vue3";
import { watch, computed, watchEffect } from "vue";
import { ref } from "vue";
//page.props.value.flash.success
const page = usePage();
const flashSuccess = ref(page.props.flash?.success || null);

// watchEffect(() => {
//     console.log("watchEffect triggered");
//     if (page.props.flash?.success) {
//         flashSuccess.value = page.props.flash.success;
//         setTimeout(() => {
//             flasghSuccess.value = null;
//         }, 5000);
//         console.log("Flash message updated:", flashSuccess.value);
//     }
// });

//import {ref} from 'vue'

// const timer = ref(0); // Start with 0, no need for `value`

// setInterval(() => {
//     timer.value++
// }, 1000);
</script>

<style scoped>
.success {
    background-color: green;
    color: white;
    padding: 10px;
    margin: 10px 0;
}
</style>
