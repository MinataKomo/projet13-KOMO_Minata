@extends('layouts.app')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
@endif
<h1 class="container">laravel</h1>
@endsection