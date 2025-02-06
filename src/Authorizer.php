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

    }

    public function hasExactRoles(...$roles): bool
    {

    }

    public function hasPartialRoles(...$roles): bool
    {

    }

    public function getRoles(): array
    {

    }
}