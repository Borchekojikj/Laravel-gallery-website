@extends('master')

@section('title', 'Edit Project')


@section('content')


<h1>Измени проект</h1>
<form action=" {{ route('update', $project->id )}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
    </div>
    @error('name')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror
    <div class="mb-3">
        <label for="subtitle" class="form-label">Subtitle</label>
        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $project->subtitle }}">
    </div>
    @error('subtitle')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror
    <div class="mb-3">
        <label for="image" class="form-label">Image Url</label>
        <input type="text" class="form-control" id="image" name="image" value="{{ $project->image }}">
    </div>
    @error('image')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="3" name="description">{{ $project->description }} </textarea>
    </div>
    @error('description')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection