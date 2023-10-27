@extends('layouts.app')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
@endif

<h1 class="container">laravel</h1>
<div class="container">
@foreach($ads as $ad)
        <div class="justify-content-center d-flex">

                <div class="card mb-3" style="width=50%">
                    <div class="card-body">
                        <h5 class="card-title">{{ $ad->title }}</h5>
                        <h5 class="card-subtitle mb-2 text-muted">{{ $ad->localisation }}</h5>
                        <p class="card-text">{{ $ad->description }}</p>
                        <a href="#" class="card-link">voir l'annonce</a>
                        <a href="#" class="card-link">contacter le vendeur</a>
                    </div>
                </div>
        </div>
        @endforeach

</div>
@endsection