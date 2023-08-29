<?php

namespace Raid\Core\Enum\Models\Action;

use Raid\Core\Enum\Traits\Action\Enum\WithAuthAction;
use Raid\Core\Enum\Traits\Action\Enum\WithCrudAction;
use Raid\Core\Enum\Traits\Action\Enum\WithProfileAction;
use Raid\Core\Enum\Traits\Enum\ConstEnum;

class Action
{
    use ConstEnum,
        WithAuthAction,
        WithCrudAction,
        WithProfileAction;
}
