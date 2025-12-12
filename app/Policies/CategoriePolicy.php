<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Categorie;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoriePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Categorie');
    }

    public function view(AuthUser $authUser, Categorie $categorie): bool
    {
        return $authUser->can('View:Categorie');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Categorie');
    }

    public function update(AuthUser $authUser, Categorie $categorie): bool
    {
        return $authUser->can('Update:Categorie');
    }

    public function delete(AuthUser $authUser, Categorie $categorie): bool
    {
        return $authUser->can('Delete:Categorie');
    }

    public function restore(AuthUser $authUser, Categorie $categorie): bool
    {
        return $authUser->can('Restore:Categorie');
    }

    public function forceDelete(AuthUser $authUser, Categorie $categorie): bool
    {
        return $authUser->can('ForceDelete:Categorie');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Categorie');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Categorie');
    }

    public function replicate(AuthUser $authUser, Categorie $categorie): bool
    {
        return $authUser->can('Replicate:Categorie');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Categorie');
    }

}