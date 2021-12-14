<?php

namespace App\Containers\Vendor\Beaner\Models;

use App\Containers\AppSection\Authorization\Models\Role as ApiatoRole;
use App\Containers\Vendor\Uuider\Traits\HasUuid;
use App\Containers\Vendor\Tenanter\Models\Concerns\HasTenancy;

class Role extends ApiatoRole
{
    use HasUuid;
    use HasTenancy;
}
