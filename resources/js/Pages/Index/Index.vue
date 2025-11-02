<template>
    hello {{ counter }}3
    {{ name }}
     <Link href="/hello">heloe</Link>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    name: String
});

</script>
