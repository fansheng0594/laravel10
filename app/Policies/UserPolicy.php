<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function update(User $authUser, User $user)
    {
        return $authUser->id === $user->id; 
    }
}
