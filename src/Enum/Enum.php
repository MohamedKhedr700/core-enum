<?php

namespace Raid\Core\Enum;

use Raid\Core\Enum\Traits\Enum\CaseEnum;
use Raid\Core\Enum\Traits\Enum\ConstEnum;

enum Enum
{
    use ConstEnum,
        CaseEnum;
}
