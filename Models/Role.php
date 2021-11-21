<?php

namespace App\Containers\Vendor\Beaner\Models;

use App\Containers\AppSection\Authorization\Models\Role as ApiatoRole;
use App\Containers\Vendor\Beaner\Traits\HasUuid;
use App\Containers\Vendor\Beaner\Traits\HasMultiTenancy;

class Role extends ApiatoRole
{
    use HasUuid;
    use HasMultiTenancy;
}
