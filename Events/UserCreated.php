<?php

namespace App\Containers\Vendor\Beaner\Events;

use App\Containers\Vendor\Beaner\Models\User;
use App\Ship\Parents\Events\Event;

class UserCreated extends Event
{
    public $user ;
    public function __construct(User $user)
    {
        $this->user = $user;
    }


}
