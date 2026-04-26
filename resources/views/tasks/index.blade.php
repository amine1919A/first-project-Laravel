@extends('layouts.app')

@section('title', 'Mes Tâches')

@section('content')

<div class="max-w-4xl mx-auto">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">
            Mes Tâches
            <span class="bg-blue-500 text-white px-2 py-1 rounded text-sm">
                {{ $tasks->count() }}
            </span>
        </h2>

        <a href="{{ route('tasks.create') }}"
           class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded shadow">
            + Nouvelle tâche
        </a>
    </div>

    @forelse($tasks as $task)

    <div class="bg-white p-4 rounded-lg shadow mb-3 flex justify-between items-center">

        <div>
            <h5 class="text-lg font-semibold {{ $task->completed ? 'line-through text-gray-400' : '' }}">
                {{ $task->title }}
            </h5>

            <p class="text-gray-500">
                {{ $task->description }}
            </p>
        </div>

        <div class="flex gap-2">

            @can('update', $task)
                <a href="{{ route('tasks.edit', $task) }}"
                   class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">
                    Modifier
                </a>
            @endcan

            @can('delete', $task)
                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded"
                            onclick="return confirm('Supprimer cette tâche ?')">
                        Supprimer
                    </button>
                </form>
            @endcan

        </div>

    </div>

    @empty
    <div class="bg-blue-100 text-blue-700 p-4 rounded">
        Aucune tâche.
        <a href="{{ route('tasks.create') }}" class="underline">
            Créer votre première tâche
        </a>
    </div>
    @endforelse

</div>

@endsection