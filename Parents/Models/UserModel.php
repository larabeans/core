<?php

namespace App\Containers\Vendor\Beaner\Parents\Models;

use Apiato\Core\Abstracts\Models\UserModel as AbstractUserModel;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Containers\Vendor\Beaner\Traits\HasUuid;
use App\Containers\Vendor\Beaner\Traits\MultiTenantable;

abstract class UserModel extends AbstractUserModel
{
    use Notifiable;
    use HasApiTokens;
    use HasUuid;
    use MultiTenantable;
}
