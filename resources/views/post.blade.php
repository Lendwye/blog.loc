@extends('layouts.app')

@section('scripts')
	@vite('resources/js/js_vue/post_page_component.js')
@endsection

@section('content')
<div class="container">
	<div id="app">
		<post-page post_id="{{$post->id}}" post_title="{{$post->title}}" post_author="{{$post->author}}" post_description="{{$post->description}}" post_date="{{$post->date}}"></post-page>
	</div>
</div>
@endsection
