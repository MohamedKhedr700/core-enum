<?php

namespace Raid\Core\Enum\Traits\Action;

trait WithAuthAction
{
    const REGISTER = 'register';

    const LOGIN = 'login';

    const LOGOUT = 'logout';

    const SEND_FORGOT_PASSWORD = 'send_forgot_password';

    const RESET_FORGOT_PASSWORD = 'reset_forgot_password';
}
