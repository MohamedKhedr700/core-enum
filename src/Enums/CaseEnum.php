<?php

namespace Raid\Core\Enum\Enum;

use Raid\Core\Enum\Traits\Enum\CaseEnum as CaseEnumTrait;
use Raid\Core\Enum\Traits\Enum\ConstEnum;

enum CaseEnum
{
    use ConstEnum,
        CaseEnumTrait;
}
