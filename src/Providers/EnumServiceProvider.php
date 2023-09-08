<?php

namespace Raid\Core\Enum\Providers;

use Illuminate\Support\ServiceProvider;
use Raid\Core\Enum\Commands\PublishCommand;

class EnumServiceProvider extends ServiceProvider
{
    /**
     * The commands to be registered.
     */
    protected array $commands = [
         PublishCommand::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
