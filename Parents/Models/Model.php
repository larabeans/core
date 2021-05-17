<?php

namespace App\Containers\Vendor\Beaner\Parents\Models;

use Apiato\Core\Abstracts\Models\Model as AbstractModel;
use App\Containers\Vendor\Beaner\Traits\HasUuid;
use App\Containers\Vendor\Beaner\Traits\MultiTenantable;

abstract class Model extends AbstractModel
{
    use HasUuid;
    use MultiTenantable;
}
