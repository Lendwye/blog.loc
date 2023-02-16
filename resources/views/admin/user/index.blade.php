@extends('layouts.admin')

@section('scripts')
	@vite('resources/js/js_vue/user_component.js')
@endsection

@section('content')
<div class="container">
	<div id="app">
		@foreach ($users as $user)
			<user user_id="{{ $user->id }}" user_name="{{ $user->name }}" user_email="{{ $user->email }}"></user>
		@endforeach
	</div>
</div>
@endsection
