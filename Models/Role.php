<?php

namespace App\Containers\Larabeans\Core\Models;

use App\Containers\AppSection\Authorization\Models\Role as ApiatoRole;
// use App\Containers\Larabeans\Uuider\Traits\HasUuid;
// use App\Containers\Larabeans\Tenanter\Models\Concerns\HasTenancy;

class Role extends ApiatoRole
{
    // use HasUuid;
    // use HasTenancy;

    protected $fillable = [
        'name',
        'guard_name',
        'display_name',
        'description',
        'level',
        'tenant_id'
    ];
}
