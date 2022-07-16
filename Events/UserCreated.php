<?php

namespace App\Containers\Larabeans\Beaner\Events;

use App\Containers\Larabeans\Beaner\Models\User;
use App\Ship\Parents\Events\Event;

class UserCreated extends Event
{
    public $user ;
    public function __construct(User $user)
    {
        $this->user = $user;
    }


}
