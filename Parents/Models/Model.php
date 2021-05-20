<?php

namespace App\Containers\Vendor\Beaner\Parents\Models;

use App\Ship\Parents\Models\Model as ApiatoParentModel;
use App\Containers\Vendor\Beaner\Traits\HasUuid;
use App\Containers\Vendor\Beaner\Traits\MultiTenantable;

abstract class Model extends ApiatoParentModel
{
    use HasUuid;
    use MultiTenantable;
}
