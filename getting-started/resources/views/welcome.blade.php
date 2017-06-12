@extends('templates.master')

@section('content')
<h1>Some Content</h1>
<p>{{ 2 == 2 ? "Hello" : "Does not equal" }}</p>
@endsection

