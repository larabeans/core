<?php

namespace App\Containers\Vendor\Beaner\Models;

use App\Containers\AppSection\Authorization\Models\Role as ApiatoRole;
use App\Containers\Vendor\Beaner\Traits\HasUuid;
use App\Containers\Vendor\Tenanter\Models\Concerns\HasTenancy;

class Role extends ApiatoRole
{
    use HasUuid;
    //use HasTenancy; // UnComment if the tenanter package is installed before migration

    protected $fillable = [
        'name',
        'guard_name',
        'display_name',
        'description',
        'level',
        'tenant_id'
    ];
}
