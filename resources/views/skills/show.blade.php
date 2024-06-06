@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $skill->name }}</h1>
    <p>{{ $skill->description }}</p>

    <h2>Scientists with {{ $skill->name }} skill</h2>
    <div class="row">
        @foreach($heroes as $hero)
            <div class="col-md-4">
                <div class="card mb-3 hero-card">
                    <img src="{{ asset('storage/' . $hero->image) }}" class="card-img-top hero-img" alt="{{ $hero->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $hero->name }}</h5>
                        <p class="card-text">{{ $hero->description }}</p>
                        <a href="{{ route('heroes.show', $hero) }}" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
