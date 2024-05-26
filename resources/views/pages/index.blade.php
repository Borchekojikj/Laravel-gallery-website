@extends('master')

@section('title', 'Home')

@section('content')



@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<div class="row row-cols-1 row-cols-md-3 g-4 my-5">
    @foreach($projects as $project)
    <div class="col-md-6 col-sm-12 col-lg-4">
        <div class="card h-100 text-center">
            <img src="{{ $project->image }}" alt="{{ $project->name }}" width="50%" height="150px" class="m-auto mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $project->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $project->subtitle }}</h6>
                <p class="card-text">{{ $project->description }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection