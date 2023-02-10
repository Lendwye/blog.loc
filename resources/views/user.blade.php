@extends('layouts.app')

@section('scripts')
	@vite('resources/js/js_vue/user_page_component.js')
@endsection

@section('content')
<div class="container">
	<div id="app">
		<user-page user_id="{{ $user->id }}" user_name="{{ $user->name }}" user_email="{{ $user->email }}"></user-page>
	</div>
</div>
@endsection
