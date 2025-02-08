<?php

namespace Vendrika105\LaravelAuthorization\Interfaces;

interface AuthorizableModel
{
    public function getPermissions(): array;

    public function hasPartialPermissions(...$permissions): bool;

    public function hasExactPermissions(...$permissions): bool;

    public function hasPermission(...$permissions): bool;

    public function can(...$permissions): bool;

    public function assignPermission(...$permissions): bool;

    public function removePermission(...$permissions): bool;


    public function getRoles(): array;

    public function hasPartialRoles(...$roles): bool;

    public function hasExactRoles(...$roles): bool;

    public function hasRoles(...$roles): bool;

    public function is(...$roles): bool;

    public function assignRoles(...$roles): bool;

    public function removeRoles(...$roles): bool;
}