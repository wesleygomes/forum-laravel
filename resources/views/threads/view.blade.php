@extends('layouts.default.default')

@section('content')
    <div class="container">
        <h3>{{ $result->title }}</h3>

        <div class="card gray lighten-4">
            <div class="card-content">
                {{ $result->body }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection