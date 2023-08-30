<?php

namespace Raid\Core\Enum\Models\Action;

use Raid\Core\Enum\Traits\Action\WithAuthAction;
use Raid\Core\Enum\Traits\Action\WithCrudAction;
use Raid\Core\Enum\Traits\Action\WithProfileAction;
use Raid\Core\Enum\Traits\Enum\ConstEnum;

class Action
{
    use ConstEnum,
        WithAuthAction,
        WithCrudAction,
        WithProfileAction;
}
