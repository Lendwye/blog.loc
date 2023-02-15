@extends('layouts.app')

@section('scripts')
	@vite('resources/js/js_vue/author_component.js')
@endsection

@section('content')
<div class="container">
	<div id="app">
		<author></author>
	</div>
</div>
@endsection
