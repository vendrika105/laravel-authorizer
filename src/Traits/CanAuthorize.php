<?php

namespace Vendrika105\LaravelAuthorization\Traits;

use Vendrika105\LaravelAuthorization\Facades\Authorizer;

trait CanAuthorize
{
    public function getPermissions(): array
    {
        return Authorizer::getPermissions($this->getUserId());
    }

    public function hasPartialPermissions(...$permissions): bool
    {
        return Authorizer::hasPartialPermissions($this->getUserId(), $permissions);
    }

    public function hasPermission(...$permissions): bool
    {
        return Authorizer::hasExactPermissions($this->getUserId(), $permissions);
    }

    public function hasExactPermissions(...$permissions): bool
    {
        return Authorizer::hasExactPermissions($this->getUserId(), $permissions);
    }

    public function can(...$permissions): bool
    {
        return Authorizer::hasExactPermissions($this->getUserId(), $permissions);
    }

    public function assignPermission(...$permissions): bool
    {
        return Authorizer::assignPermissions($this->getUserId(), $permissions);
    }

    public function removePermission(...$permissions): bool
    {
        return Authorizer::removePermissions($this->getUserId(), $permissions);
    }

    public function getRoles(): array
    {
        return Authorizer::getRoles($this->getUserId());
    }

    public function hasPartialRoles(...$roles): bool
    {
        return Authorizer::hasPartialRoles($this->getUserId(), $roles);
    }

    public function hasRoles(...$roles): bool
    {
        return Authorizer::hasExactRoles($this->getUserId(), $roles);
    }

    public function hasExactRoles(...$roles): bool
    {
        return Authorizer::hasExactRoles($this->getUserId(), $roles);
    }

    public function is(...$roles): bool
    {
        return Authorizer::hasExactRoles($this->getUserId(), $roles);
    }

    public function assignRoles(...$roles): bool
    {
        return Authorizer::assignRoles($this->getUserId(), $roles);
    }

    public function removeRoles(...$roles): bool
    {
        return Authorizer::removeRoles($this->getUserId(), $roles);
    }
}