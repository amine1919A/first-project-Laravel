@extends('layouts.app')

@section('title', 'Créer tâche')

@section('content')

<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">

    <h2 class="text-xl font-bold mb-4 text-blue-600">
        Nouvelle tâche
    </h2>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-1 font-medium">Titre *</label>

            <input type="text" name="title"
                   value="{{ old('title') }}"
                   class="w-full border rounded px-3 py-2 focus:ring focus:ring-blue-200">

            @error('title')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Description</label>

            <textarea name="description"
                      class="w-full border rounded px-3 py-2">{{ old('description') }}</textarea>
        </div>

        <div class="flex gap-2">
            <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
                Enregistrer
            </button>

            <a href="{{ route('tasks.index') }}"
               class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded">
                Annuler
            </a>
        </div>

    </form>

</div>

@endsection