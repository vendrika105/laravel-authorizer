<?php

namespace Vendrika105\LaravelAuthorization;

class Authorizer
{
    public function hasExactPermissions(string|int $user_id, array $permissions): bool
    {
        $stored_permissions = $this->getPermissions($user_id);

        foreach ($permissions as $permission) {
            if (!in_array($permission, $stored_permissions)) {
                return false;
            }
        }

        return true;
    }

    public function getPermissions(string|int $user_id): array
    {

    }

    public function hasPartialPermissions(string|int $user_id, array $permissions): bool
    {
        $stored_permissions = $this->getPermissions($user_id);

        foreach ($permissions as $permission) {
            if (in_array($permission, $stored_permissions)) {
                return true;
            }
        }

        return false;
    }

    public function hasExactRoles(string|int $user_id, array $roles): bool
    {
        $stored_roles = $this->getRoles($user_id);

        foreach ($roles as $role) {
            if (!in_array($role, $stored_roles)) {
                return false;
            }
        }

        return true;
    }

    public function getRoles(string|int $user_id): array
    {

    }

    public function hasPartialRoles(string|int $user_id, array $roles): bool
    {
        $stored_roles = $this->getRoles($user_id);

        foreach ($roles as $role) {
            if (in_array($role, $stored_roles)) {
                return true;
            }
        }

        return false;
    }

    public function assignPermissions(string|int $user_id, array $permissions): bool
    {

    }

    public function assignRoles(string|int $user_id, array $roles): bool
    {

    }

    public function removePermissions(string|int $user_id, array $permissions): bool
    {

    }

    public function removeRoles(string|int $user_id, array $roles): bool
    {

    }
}