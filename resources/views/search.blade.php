@extends('layouts.app')

@section('scripts')
@endsection

@section('content')
<div class="container">
	<div id="app">
		@foreach ($answers as $answer)
			{{ $answer->title }}<br>
			{{ $answer->description }}<br>
			{{ $answer->author }}<br>
			{{ $answer->date }}<br>
			<hr>
		@endforeach
	</div>
</div>
@endsection