# Core Enum Package

This package is responsible for handling all enums in the system.
The package using the `archtechx/enums` package as a base for the enums.

## Installation

``` bash
composer require raid/core-enum
```

## Configuration

``` bash
php artisan core:publish-enum
```

## Usage

``` php
class PostController extends Controller
{
    /**
     * Invoke the controller method.
     */
    public function __invoke(Request $request): JsonResponse
    {
        $adminType = UserTypeEnum::ADMIN;

        $guestType = UserTypeEnum::GUEST;

        $userType = UserTypeEnum::USER;

        $userTypeConstants = UserTypeEnum::constants();

        $hasAdminConstant = UserTypeEnum::hasConstant('ADMIN');
    }
}
```

# How to work this

Let's create our enum `class` and prefer classes as they ar extendable.

You can use the `enum` command to create your enum class.

``` bash
php artisan core:make-enum UserTypeEnum
```

``` php
 <?php

namespace App\Models\Enum;

use Raid\Core\Enum\Models\Enum;

class UserTypeEnum extends Enum
{
}
```

Let's add our constants.

``` php
 <?php

namespace App\Models\Enum;

use Raid\Core\Enum\Models\Enum;

class UserTypeEnum extends Enum
{
    public const ADMIN = 'admin';

    public const GUEST = 'guest';

    public const USER = 'user';
}
``` 

<br>

And that's it.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Credits

- **[Mohamed Khedr](https://github.com/MohamedKhedr700)**

## Security

If you discover any security-related issues, please email
instead of using the issue tracker.

## About Raid

Raid is a PHP framework created by **[Mohamed Khedr](https://github.com/MohamedKhedr700)**,
and it is maintained by **[Mohamed Khedr](https://github.com/MohamedKhedr700)**.

## Support Raid

Raid is an MIT-licensed open-source project. It's an independent project with its ongoing development made possible.

