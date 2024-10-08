<?php

declare(strict_types=1);

namespace App\Services\Auth;

use App\Models\User;
use Laravel\Passport\PersonalAccessTokenResult;

class AuthTokenService
{
    public function createToken(User $user, string $name): PersonalAccessTokenResult
    {
        return $user->createToken($name);
    }
}
