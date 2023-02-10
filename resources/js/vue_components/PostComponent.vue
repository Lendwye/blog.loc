<template>
    <div class="post-container">
		<a v-bind:href="'post?id=' + post_id">{{ post_title }}</a><br>
		<span class="post__author">{{ post_author }}</span>
		<p class="post__description">{{ post_description }}</p>
		<span class="post__date">{{ post_date }}</span>
		<hr>
	</div>
</template>

<script>
export default {
	props: ['post_id', 'post_title', 'post_author', 'post_description', 'post_date'],
	data() 
	{

	},
	methods: {

	},
}
</script>

<style>

</style>
