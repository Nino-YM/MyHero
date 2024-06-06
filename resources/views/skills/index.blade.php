@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Universe</h1>
    <div class="row">
        @foreach($skills as $skill)
            <div class="col-md-3 text-center">
                <a href="{{ route('skills.show', $skill) }}">
                    <img src="{{ asset('storage/' . strtolower($skill->name) . '.png') }}" alt="{{ $skill->name }} icon" style="width: auto; height: 50px; object-fit: contain; vertical-align: middle;">
                    <h3>{{ $skill->name }}</h3>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
