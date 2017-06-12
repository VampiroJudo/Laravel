@extends('templates.master')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Control Structures</h1>
				@if(true)
					<p>This only displays if it is true.</p>
				@else
					<p>This only displays if it is false</p>
				@endif
				<hr>
				@for($i = 0; $i < 5; $i++)
					<p>{{ $i + 1 }}. Iteration</p>
				@endfor
				<hr>
				<h2>XSS</h2>
				{{ "<script>alert('Hello');</script>"}}
				{!!"<script>alert('Hello');</script>"!!}
		</div>
	</div>

@endsection

