<?php

namespace Vendrika105\LaravelAuthorization\Facades;

use Illuminate\Support\Facades\Facade;
use Vendrika105\LaravelAuthorization\Authorizer as BaseClass;

/**
 * @method static bool hasExactPermissions(string|int $user_id, array $permissions)
 * @method static array getPermissions(string|int $user_id)
 * @method static bool hasPartialPermissions(string|int $user_id, array $permissions)
 * @method static bool hasExactRoles(string|int $user_id, array $roles)
 * @method static array getRoles(string|int $user_id)
 * @method static bool hasPartialRoles(string|int $user_id, array $roles)
 * @method static bool assignPermissions(string|int $user_id, array $permissions)
 * @method static bool assignRoles(string|int $user_id, array $roles)
 * @method static bool removePermissions(string|int $user_id, array $permissions)
 * @method static bool removeRoles(string|int $user_id, array $roles)
 *
 * @mixin BaseClass
 */
class Authorizer extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return BaseClass::class;
    }
}