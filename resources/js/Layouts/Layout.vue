<template lang="">
	<div class="">
		<header class="bg-blue-400 w-full flex justify-between px-5">
			<h3 class="text-center text-lg font-bold text-slate-100 py-5">Welcome, {{ user.name }}</h3>
			<nav class="text-center text-lg font-bold text-slate-100 py-5">
                <a :href="'/logout'">Logout</a>
            </nav>
		</header>
		<main>
			<slot />
		</main>
		<footer></footer>
	</div>
</template>
<script setup>
	import { computed } from 'vue';
	import { usePage } from '@inertiajs/vue3';

	const page = usePage();

	const user = computed(() => page.props.auth.user);
</script>
<style lang=""></style>
