<?php

namespace Vendrika105\LaravelAuthorization\Storage;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Vendrika105\LaravelAuthorization\Interfaces\StorageInterface;

class DatabaseStorage implements StorageInterface
{
    public function fetchUserData(int|string $user_id): array
    {
        // TODO: Implement fetchUserData() method.
    }

    protected function fetchUserPermissions(int|string $user_id): array
    {

    }

    protected function fetchUserRoles(int|string $user_id): array
    {

    }

    protected function fetchRoleChildPermissions(int|string $role_id): array
    {

    }

    protected function fetchRolePermissions(array $roles): array
    {

    }

    public function updateUserData(int|string $user_id, array $data)
    {
        // TODO: Implement updateUserData() method.
    }
}