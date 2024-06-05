@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <img src="{{ asset('storage/' . $hero->image) }}" class="card-img-top" alt="{{ $hero->name }}">
                <div class="card-body">
                    <h3 class="card-title">{{ $hero->name }}</h3>
                    <p class="card-text">{{ $hero->description }}</p>
                    <p class="card-text"><strong>Gender: </strong>{{ $hero->gender }}</p>
                    <p class="card-text"><strong>Skills: </strong>{{ $hero->skills->pluck('name')->implode(', ') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
