<script setup>
	import Layout from '../../Layouts/Layout.vue';
	const props = defineProps({
        message: String
    })
	console.log(props.message);
</script>
<template>
	<Layout>
		<section class="mx-5 my-8 py-8 text-center">
			<article>
				<h1 class="text-3xl text-primary my-5">Verify</h1>
				<p>Check Your mail to verify your email address</p>
				<div v-if="message" class="text-green-600 font-bold">
				{{ message }}</div>

				<a :href="'/email/resend'" class="text-blue-500">Didn't see it? Resend</a>
			</article>
		</section>
	</Layout>
</template>
