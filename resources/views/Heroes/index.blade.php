@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Heroes</h1>
    <div class="row">
        @foreach($heroes as $hero)
            <div class="col-md-4">
                <a href="{{ route('heroes.show', $hero) }}" class="text-decoration-none">
                    <div class="card mb-4 hero-card">
                        <img src="{{ asset('storage/' . $hero->image) }}" class="card-img-top hero-img" alt="{{ $hero->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $hero->name }}</h5>
                            <p class="card-text">{{ $hero->description }}</p>
                            <p class="card-text"><strong>Gender: </strong>{{ $hero->gender }}</p>
                            <p class="card-text"><strong>Skills: </strong>
                                @foreach($hero->skills as $skill)
                                    <img src="{{ asset('storage/' . strtolower($skill->name) . '.png') }}" alt="{{ $skill->name }} icon" style="width: 20px; height: 20px;">
                                    {{ $skill->name }}{{ !$loop->last ? ', ' : '' }}
                                @endforeach
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
