<?php

namespace Raid\Core\Enum\Providers;

use Illuminate\Support\ServiceProvider;
use Raid\Core\Enum\Traits\Provider\WithEnumProvider;
use Raid\Core\Enum\Commands\CreateEnumCommand;
use Raid\Core\Enum\Commands\PublishEnumCommand;

class EnumServiceProvider extends ServiceProvider
{
    use WithEnumProvider;

    /**
     * The commands to be registered.
     */
    protected array $commands = [
        CreateEnumCommand::class,
        PublishEnumCommand::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerCommands();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
