<?php

namespace Vendrika105\LaravelAuthorization\Storage;

use Vendrika105\LaravelAuthorization\Interfaces\StorageInterface;

class DatabaseStorage implements StorageInterface
{
    public function fetchUserData(int|string $user_id): array
    {
        // TODO: Implement fetchUserData() method.
    }

    public function updateUserData(int|string $user_id, array $data)
    {
        // TODO: Implement updateUserData() method.
    }
}