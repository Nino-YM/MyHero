<?php

namespace App\Policies;

use App\Models\ContactMessage;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactMessagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given contact message can be viewed by the user.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContactMessage  $contactMessage
     * @return bool
     */
    public function viewAny(User $user)
    {
        // Only admin can view contact messages
        return $user->role && $user->role->name === 'admin';
    }

    /**
     * Determine if the given contact message can be deleted by the user.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContactMessage  $contactMessage
     * @return bool
     */
    public function delete(User $user, ContactMessage $contactMessage)
    {
        // Only admin can delete contact messages
        return $user->role && $user->role->name === 'admin';
    }
}
