@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Universe</h1>
    <div class="row">
        @foreach($skills as $skill)
            <div class="col-md-3 text-center">
                <a href="{{ route('skills.show', $skill) }}" class="skill-link">
                    <img src="{{ asset('storage/' . strtolower($skill->name) . '.png') }}" alt="{{ $skill->name }} icon" class="skill-icon">
                    <span class="skill-name">{{ $skill->name }}</span>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
