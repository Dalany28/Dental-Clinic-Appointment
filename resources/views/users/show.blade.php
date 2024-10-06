@extends('layouts.main')

@section('content')
<div class="page page-user">
    <div class="row">
        <div class="col-lg-2">
            <img class="rounded-circle img-fluid" src="{{ $user->avatar }}" alt="{{ $user->name }}">
            <h1>{{ $user->name }}</h1>
            <div>
                <p>Posts: {{ $user->services()->count() }}</p>
                
            </div>
           
        </div>
        
        </div>
    </div>

@endsection