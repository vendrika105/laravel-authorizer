<?php

namespace Vendrika105\LaravelAuthorization;

class Authorizer
{
    public function hasExactPermissions(...$permissions): bool
    {
        $stored_permissions = $this->getPermissions();

        foreach ($permissions as $permission) {
            if (!in_array($permission, $stored_permissions)) {
                return false;
            }
        }

        return true;
    }

    public function getPermissions(): array
    {

    }

    public function hasPartialPermissions(...$permissions): bool
    {
        $stored_permissions = $this->getPermissions();

        foreach ($permissions as $permission) {
            if (in_array($permission, $stored_permissions)) {
                return true;
            }
        }

        return false;
    }

    public function hasExactRoles(...$roles): bool
    {
        $stored_roles = $this->getRoles();

        foreach ($roles as $role) {
            if (!in_array($role, $stored_roles)) {
                return false;
            }
        }

        return true;
    }

    public function getRoles(): array
    {

    }

    public function hasPartialRoles(...$roles): bool
    {
        $stored_roles = $this->getRoles();

        foreach ($roles as $role) {
            if (in_array($role, $stored_roles)) {
                return true;
            }
        }

        return false;
    }
}