<template>
    <main>
    <header>
      <Link href="/">Home</Link>
      <Link href="/hello">About main</Link>
    </header>
    <article>
      <slot />
    </article>
    <h1>counter: {{ counter }}</h1>
  </main>
</template>

<script setup>
import { ref } from 'vue'
let counter = ref(0)
const increment = () => {
    counter.value++
    console.log(counter.value)
}
setInterval(increment, 1000)
import { Link } from '@inertiajs/vue3';
</script>