<?php

namespace Raid\Core\Enum\Commands;

use \Illuminate\Console\Command;
class PublishCommand extends Command
{
    /**
     * The console command name.
     */
    protected $name = 'publish:core-enum';

    /**
     * The console command description.
     */
    protected $description = 'Publish core enum config files.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->call('vendor:publish', [
            '--tag' => 'config-enum'
        ]);
    }
}