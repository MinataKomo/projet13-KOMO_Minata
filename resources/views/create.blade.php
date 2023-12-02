@extends('layouts.app')

@section('content')
<div class="container">
 <h1 >Deposer une annonce</h1>
 <hr>
 
 <form action="{{ route('ad.store') }}" method="POST">
    @csrf
<div class="form-group">
    <label for="exampleInputEmail">titre</label>
    <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }} " id="title" placeholder="" name="title">

    @if($errors->has('title'))
    <span class="invalid-feedback">{{$errors->first('title') }}</span>
@endif
</div>
<div class="form-group">
    <label for="description">description</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    
</div>
<div class="form-group">
    <label for="localisation">localisation</label>
    <input type="text" class="form-control" id="localisation" name="localisation">
    
</div>
<div class="form-group">
    <label for="price">prix</label>
    <input type="text" class="form-control" id="price" name="price">
    
</div>

<button type="submit" class="btn btn-primary">soumettre une annonce</button>
</form>
</div>
@endsection