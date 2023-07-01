<script setup>
	import { useForm } from '@inertiajs/vue3';

	const form = useForm({
		email: null,
		name: null,
		password: null,
		password_confirmation: null,
	});
</script>
<template>
	<div class="container mx-auto">
		<div class="max-w-xl p-5 mx-auto my-10 bg-white rounded-md shadow-sm">
			<div class="text-center">
				<h1 class="my-3 text-3xl font-semibold text-gray-700">Register</h1>
			</div>
			<div>
				<form @submit.prevent="form.post('/register')">
					<div v-if="form.hasErrors" class="my-5">
						<div v-for="error in form.errors" class="text-red-500 text-center">
							{{ error }}
						</div>
					</div>
					<div class="mb-6">
						<label for="email" class="block mb-2 text-sm text-gray-600"
							>Email Address</label
						>
						<input
							v-model="form.email"
							type="email"
							name="email"
							placeholder="you@email.com"
							required
							class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
						/>
					</div>
					<div class="mb-6">
						<label for="email" class="block mb-2 text-sm text-gray-600"
							>Name</label
						>
						<input
							v-model="form.name"
							type="text"
							name="name"
							placeholder="Full Name"
							required
							class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
						/>
					</div>
					<div class="mb-6">
						<label for="password" class="text-sm text-gray-600">Password</label>
						<input
							v-model="form.password"
							type="password"
							name="password"
							placeholder="Enter your password"
							required
							class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
						/>
					</div>
					<div class="mb-6">
						<label
							for="password_confirmation"
							class="block mb-2 text-sm text-gray-600"
							>Password Confirmation</label
						>
						<input
							type="password"
							v-model="form.password_confirmation"
							class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
							id="password_confirmation"
							name="password_confirmation"
						/>
					</div>

					<div class="mb-2">
						<button
							type="submit"
							class="w-full px-2 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none"
						>
							Submit
						</button>
					</div>
					<a :href="'/login'"><div class="text-center text-sm">Have an account? Login</div></a>

				</form>
			</div>
		</div>
	</div>
</template>
