<template lang="">
    <div class="container ">
        <header>
            Welcome, {{user.name}}
        </header>
        <main>
            <slot />
        </main>
        <footer>Footer</footer>
        
    </div>
</template>
<script setup>
    import { computed } from 'vue';
    import { usePage } from '@inertiajs/vue3';

    const page = usePage();

    const user = computed(() => page.props.auth.user)
</script>
<style lang="">
    
</style>