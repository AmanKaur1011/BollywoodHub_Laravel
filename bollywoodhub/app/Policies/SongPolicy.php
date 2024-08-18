<?php

namespace App\Policies;

use App\Models\Song;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SongPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Song $song): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->isAdmin();
    }

    public function update(User $user, Song $song): bool
    {
        return $user->isAdmin();
    }

    public function delete(User $user, Song $song): bool
    {
        return $user->isAdmin();
    }

    public function restore(User $user, Song $song): bool
    {
        return $user->isAdmin();
    }

    public function forceDelete(User $user, Song $song): bool
    {
        return $user->isAdmin();
    }
}