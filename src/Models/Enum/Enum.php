<?php

namespace Raid\Core\Models\Enum;

use Raid\Core\Traits\Enum\CaseEnum;
use Raid\Core\Traits\Enum\ConstEnum;

enum Enum
{
    use ConstEnum,
        CaseEnum;
}
