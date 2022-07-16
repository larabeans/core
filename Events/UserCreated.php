<?php

namespace App\Containers\Larabeans\Core\Events;

use App\Containers\Larabeans\Core\Models\User;
use App\Ship\Parents\Events\Event;

class UserCreated extends Event
{
    public $user ;
    public function __construct(User $user)
    {
        $this->user = $user;
    }


}
