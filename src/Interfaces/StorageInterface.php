<?php

namespace Vendrika105\LaravelAuthorization\Interfaces;

interface StorageInterface
{
    public function fetchUserData(string|int $user_id): array;

    public function updateUserData(string|int $user_id, array $data);
}