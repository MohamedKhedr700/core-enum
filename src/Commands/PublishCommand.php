<?php

namespace Raid\Core\Enum\Commands;

use \Illuminate\Console\Command;
use Raid\Core\Command\Commands\PublishCommand as CorePublishCommand;

class PublishCommand extends CorePublishCommand
{
    /**
     * The console command name.
     */
    protected $name = 'core:publish-enum';

    /**
     * The console command description.
     */
    protected $description = 'Publish core enum config files.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->publishCommand('config-enum');
    }
}