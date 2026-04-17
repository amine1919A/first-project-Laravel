@extends('layouts.app')

@section('title', 'Mes Tâches')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Mes Tâches <span class="badge bg-primary">{{ $tasks->count() }}</span></h2>

    <a href="{{ route('tasks.create') }}" class="btn btn-success">
        + Nouvelle tâche
    </a>
</div>

@forelse($tasks as $task)

<div class="card mb-3 shadow-sm border-0">
    <div class="card-body">

        <div class="d-flex justify-content-between">

            <div>
                <h5 class="{{ $task->completed ? 'text-decoration-line-through text-muted' : '' }}">
                    {{ $task->title }}
                </h5>

                <p class="text-muted mb-0">
                    {{ $task->description }}
                </p>
            </div>

            <div class="d-flex gap-2">

                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm">
                    Modifier
                </a>

                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Supprimer cette tâche ?')">
                        Supprimer
                    </button>
                </form>

            </div>

        </div>

    </div>
</div>

@empty
<div class="alert alert-info">
    Aucune tâche. <a href="{{ route('tasks.create') }}">Créer votre première tâche</a>
</div>
@endforelse

@endsection