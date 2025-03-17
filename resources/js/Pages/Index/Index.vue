<template><div>
    Index
</div>
<Link href="/hello">Show Page {{ message }}</Link>
</template>
<script setup>
import {Link} from '@inertiajs/vue3';
defineProps({message:String});
</script>