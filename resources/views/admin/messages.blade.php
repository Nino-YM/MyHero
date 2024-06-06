@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Messages</h1>
    @foreach($messages as $message)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $message->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $message->email }}</h6>
                <p class="card-text">{{ $message->message }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
