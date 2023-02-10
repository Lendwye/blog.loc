<template>
    <div class="post-container">
		<span>{{ user_name }}</span><br>
		<span class="user_email">{{ user_email }}</span>
		<hr>
	</div>
</template>

<script>
export default {
	props: ['user_id', 'user_name', 'user_email'],
	data() 
	{

	},
	methods: {

	},
}
</script>

<style>

</style>
