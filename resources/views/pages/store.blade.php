@extends('master')

@section('title', 'Create Project')


@section('content')


<h1>Додади нов проект</h1>
<form action=" {{ route('home.create') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value=" {{ old('name') }}">
    </div>
    @error('name')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror
    <div class="mb-3">
        <label for="subtitle" class="form-label">Subtitle</label>
        <input type="text" class="form-control" id="subtitle" name="subtitle" value=" {{ old('subtitle') }}">
    </div>
    @error('subtitle')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror
    <div class="mb-3">
        <label for="image" class="form-label">Image Url</label>
        <input type="text" class="form-control" id="image" name="image" value=" {{ old('image') }}">
    </div>
    @error('image')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
    </div>
    @error('description')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror
    <button type="submit" class="btn btn-primary">Додај</button>
</form>

@endsection