<?php

namespace App\Containers\Vendor\Beaner\Models;

use App\Containers\AppSection\User\Models\User as ApiatoUser;
use App\Containers\Vendor\Beaner\Events;
// use App\Containers\Vendor\Uuider\Traits\HasUuid;
// use App\Containers\Vendor\Tenanter\Models\Concerns\HasTenancy;
// use App\Containers\Vendor\Tenanter\Traits\AuthenticationTrait;
// use App\Containers\Vendor\Locationer\Traits\HasLocations;

class User extends ApiatoUser
{
    // use HasUuid;
    // use HasTenancy;
    // use AuthenticationTrait;
    // use HasLocations;

    protected $fillable = [
        'name',
        'email',
        'password',
        'device',
        'platform',
        'gender',
        'birth',
        'social_provider',
        'social_token',
        'social_refresh_token',
        'social_expires_in',
        'social_token_secret',
        'social_id',
        'social_avatar',
        'social_avatar_original',
        'social_nickname',
        'email_verified_at',
        'is_admin',
        'tenant_id'
    ];

    protected $dispatchesEvents = [
        'created' => Events\UserCreated::class
    ];
}
