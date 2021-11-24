<?php

namespace App\Containers\Vendor\Beaner\Models;

use App\Containers\AppSection\Authorization\Models\Permission as ApiatoPermission;
use App\Containers\Vendor\Beaner\Traits\HasUuid;
use App\Containers\Vendor\Beaner\Traits\HasMultiTenancy;

class Permission extends ApiatoPermission
{
    use HasUuid;
}
