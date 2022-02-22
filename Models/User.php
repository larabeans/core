<?php

namespace App\Containers\Vendor\Beaner\Models;

use App\Containers\AppSection\User\Models\User as ApiatoUser;
use App\Containers\Vendor\Beaner\Events\UserCreated;
use App\Containers\Vendor\Beaner\Traits\HasLocations;
use App\Containers\Vendor\Beaner\Traits\HasMobileLocation;
use App\Containers\Vendor\Beaner\Traits\HasUuid;
use App\Containers\Vendor\Beaner\Events;
use App\Containers\Vendor\Tenanter\Models\Concerns\HasTenancy;

class User extends ApiatoUser
{
    use HasUuid;
    //use HasTenancy;  // UnComment if the tenanter package is installed before migration
    use HasLocations;
    use HasMobileLocation;

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
