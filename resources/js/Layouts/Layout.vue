<template lang="">
	<div class="">
		<!-- <header class="b w-full flex justify-between px-5">
			<h3 class="text-center text-lg font-bold text-blue-300 py-5">Welcome back, {{ user.name }}</h3>
			<nav class="text-center text-lg font-bold text-blue-400 py-5">
                <a :href="'/logout'">Logout</a>
            </nav>
		</header> -->
		<Header/>
		<main>
			<slot />
		</main>
		<footer></footer>
	</div>
</template>
<script setup>
	import { computed } from 'vue';
	import { usePage } from '@inertiajs/vue3';
	import Header from '../Components/Header.vue';

	const page = usePage();
	// console.log(page);

	const user = computed(() => page.props.auth.user);
</script>
<style lang=""></style>
