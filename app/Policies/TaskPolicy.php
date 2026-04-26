<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;

class TaskPolicy
{
    // Voir la liste (autorisé si connecté)
    public function viewAny(User $user): bool
    {
        return true;
    }

    // Voir une tâche (seulement si elle lui appartient)
    public function view(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }

    // Créer une tâche (autorisé si connecté)
    public function create(User $user): bool
    {
        return true;
    }

    // Modifier une tâche
    public function update(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }

    // Supprimer une tâche
    public function delete(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }

    // Restaurer (optionnel)
    public function restore(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }

    // Suppression définitive (optionnel)
    public function forceDelete(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }
}