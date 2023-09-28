<?php

namespace Raid\Core\Action\Traits\Provider;

use Raid\Core\Action\Actions\Contracts\ActionInterface;

trait WithEnumProvider
{
    /**
     * Register commands.
     */
    private function registerCommands(): void
    {
        $this->commands($this->commands);
    }
}
