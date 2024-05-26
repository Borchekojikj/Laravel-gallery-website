@extends('master')


@section('title', 'Projects')


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
                <a href="{{ route('editProject',$project->id) }}" class="btn btn-dark">Промени</a>
                <!-- Add data attribute to store project ID -->
                <button class="btn btn-dark delete-project-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" data-project-id="{{ $project->id }}">Избриши</button>
            </div>
        </div>
    </div>
    @endforeach
</div>

@include('partials.delete-modal')


@endsection

@section('scripts')
<script>
    // JavaScript to capture clicked project ID and pass it to the modal
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-project-btn');
        const modalDeleteButton = document.querySelector('#staticBackdrop1 .modal-footer a.btn-danger');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const projectId = this.getAttribute('data-project-id');
                modalDeleteButton.setAttribute('href', `/delete/${projectId}`);
            });
        });
    });
</script>
@endsection