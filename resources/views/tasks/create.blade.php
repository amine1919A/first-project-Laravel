@extends('layouts.app')

@section('title', 'Créer tâche')

@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Nouvelle tâche</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Titre *</label>

                <input type="text" name="title"
                       class="form-control @error('title') is-invalid @enderror"
                       value="{{ old('title') }}">

                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>

                <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
            </div>

            <button class="btn btn-success">Enregistrer</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Annuler</a>

        </form>

    </div>
</div>

@endsection