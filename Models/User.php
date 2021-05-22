<?php

namespace App\Containers\Vendor\Beaner\Models;

use App\Containers\AppSection\User\Models\User as ApiatoUser;
use App\Containers\Vendor\Beaner\Traits\HasLocations;
use App\Containers\Vendor\Beaner\Traits\HasMobileLocation;
use App\Containers\Vendor\Beaner\Traits\HasUuid;
use App\Containers\Vendor\Beaner\Traits\MultiTenantable;

class User extends ApiatoUser
{
    use HasUuid;
    use MultiTenantable;
    use HasLocations;
    use HasMobileLocation;
}
