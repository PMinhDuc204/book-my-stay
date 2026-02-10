<script setup>
import { Link, Head } from '@inertiajs/vue3';
</script>


<template>
    <Head title="About" />
    <div class="">
        <!-- <header class="bg-green-500 text-white">
            <nav class="flex items-center justify-between p-4 max-w-5xl mx-auto">
                <div class="space-x-6">
                    <Link :href="route('home')">Home</Link>
                    <Link :href="route('about')">About</Link>
                </div>
            </nav>
        </header> -->
        <main class="p-4">
            <slot />
        </main>
    </div>
</template>
