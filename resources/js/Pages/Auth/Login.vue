<script setup>
	import { useForm } from '@inertiajs/vue3';

	const form = useForm({
		email: null,
		password: null,
	});

	function submit() {
		router.post('/login', form);
	}
</script>
<template>
	<div class="flex flex-col justify-center items-center min-h-screen bg-rose-100">
		<div class="p-10 bg-white rounded-md shadow-sm md:w-2/5">
			<div class="text-center">
				<h1 class="my-3 text-3xl font-semibold text-gray-700">Login</h1>
			</div>
			<div>
				<form @submit.prevent="form.post('/login')">
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
						<label for="phone" class="text-sm text-gray-600">Password</label>
						<input
							v-model="form.password"
							type="password"
							name="password"
							placeholder="Enter your password"
							required
							class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
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
					<a :href="'/forgot-password'"><div class="text-center text-sm font-medium text-blue-500">Forgot password</div></a>

					<a :href="'/register'"><div class="text-center text-sm">Don't have an account? Create One</div></a>
				</form>
			</div>
		</div>
	</div>
</template>
