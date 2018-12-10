@extends('layouts.influence_health')

@section('content')

    <div class="panel-body">
        <a href="{{ action('InfluenceHealthController@index') }}">link</a>
            <div class="card">
                <div class="card-header">
                   Influence Health Scratchpad
                </div>
                <div class="card-body">
                    <button>click me</button>
                </div>
            </div>
    </div>

@endsection