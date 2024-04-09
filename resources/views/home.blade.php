@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1 class="text-danger mb-5">Movie List Returns</h1>

    <div class="movies-list">
        @foreach ($movies as $movie)
        <div class="card d-flex flex-column gap-3 p-3 bg-body-secondary rounded-3">
            <div class="title">
                <strong class="text-body-tertiary">Title:<br></strong>
                <span>{{ $movie->title }}</span><br>
                <i><small>{{ $movie->original_title }}</small></i>
            </div>
            <div class="nationality">
                <strong class="text-body-tertiary">Nazionality:<br></strong>
                <span>{{ $movie->nationality }}</span>
            </div>
            <div class="vote">
                <strong class="text-body-tertiary">Vote:<br></strong>
                <span>{{ $movie->vote }}</span>
            </div>
    
        </div> 
        @endforeach
    </div>

</div>


@endsection