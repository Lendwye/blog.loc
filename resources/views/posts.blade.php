@extends('layouts.app')

@section('scripts')
	@vite('resources/js/js_vue/post_component.js')
@endsection

@section('content')
<div class="container">
	<div id="app">
		@foreach ($posts as $post)
			<post post_id="{{$post->id}}" post_title="{{$post->title}}" post_author="{{$post->author}}" post_description="{{$post->description}}" post_date="{{$post->date}}"></post>
		@endforeach
	</div>
</div>
@endsection