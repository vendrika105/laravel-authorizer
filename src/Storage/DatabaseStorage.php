<?php

namespace Vendrika105\LaravelAuthorization\Storage;

use Illuminate\Support\Facades\Storage;
use Vendrika105\LaravelAuthorization\Interfaces\StorageInterface;

class DatabaseStorage implements StorageInterface
{
    public function fetchUserData(int|string $user_id): array
    {
        $result['permissions'] = $this->fetchUserPermissions($user_id);
        $result['roles'] = $this->fetchUserRoles($user_id);

        array_merge($result['permissions'], $this->fetchRolePermissions($result['roles']));

        Storage::disk('authorizer')->put($user_id . '.json', json_encode($result));

        return $result;
    }

    protected function fetchUserPermissions(int|string $user_id): array
    {

    }

    protected function fetchUserRoles(int|string $user_id): array
    {

    }

    protected function fetchRolePermissions(array $roles): array
    {

    }

    public function updateUserData(int|string $user_id, array $data)
    {
        // TODO: Implement updateUserData() method.
    }

    protected function fetchRoleChildPermissions(int|string $role_id): array
    {

    }
}