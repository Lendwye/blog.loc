<template>
    <div class="post-container">
		<a v-bind:href="'user?id=' + user_id">{{ user_name }}</a><br>
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
