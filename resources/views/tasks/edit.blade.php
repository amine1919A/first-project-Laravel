@extends('layouts.app')

@section('title', 'Modifier tâche')

@section('content')

<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">

    <h2 class="text-xl font-bold mb-4 text-yellow-600">
        Modifier tâche
    </h2>

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 font-medium">Titre *</label>

            <input type="text" name="title"
                   value="{{ old('title', $task->title) }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Description</label>

            <textarea name="description"
                      class="w-full border rounded px-3 py-2">{{ old('description', $task->description) }}</textarea>
        </div>

        <div class="mb-4 flex items-center gap-2">
            <input type="checkbox" name="completed"
                   {{ $task->completed ? 'checked' : '' }}>

            <label>Marquer comme terminée</label>
        </div>

        <div class="flex gap-2">
            <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Mettre à jour
            </button>

            <a href="{{ route('tasks.index') }}"
               class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded">
                Annuler
            </a>
        </div>

    </form>

</div>

@endsection