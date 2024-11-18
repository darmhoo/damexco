<template lang="">
	<div class="">
		<BlogHeader />
		<main>
			<slot />
		</main>
		<footer></footer>
	</div>
</template>
<script setup>
	import { computed } from 'vue';
	import { usePage } from '@inertiajs/vue3';
    import BlogHeader from '../Components/BlogHeader.vue';

	const page = usePage();

	const user = computed(() => page.props.auth.user);
</script>
<style lang=""></style>
