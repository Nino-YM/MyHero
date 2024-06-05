@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Heroes</h1>
    <div class="row">
        @foreach($heroes as $hero)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('storage/' . $hero->image) }}" class="card-img-top" alt="{{ $hero->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $hero->name }}</h5>
                        <p class="card-text">{{ $hero->description }}</p>
                        <p class="card-text"><strong>Gender: </strong>{{ $hero->gender }}</p>
                        <p class="card-text"><strong>Skills: </strong>{{ $hero->skills->pluck('name')->implode(', ') }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
