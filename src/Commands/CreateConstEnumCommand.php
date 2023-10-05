<?php

namespace Raid\Core\Enum\Commands;

use Raid\Core\Command\Commands\CreateCommand;

class CreateConstEnumCommand extends CreateCommand
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'core:make-const-enum {classname}';

    /**
     * The console command description.
     */
    protected $description = 'Make an case const class';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->createCommand();
    }

    /**
     * Return the stub file path.
     */
    public function getStubPath(): string
    {
        return __DIR__.'/../../resources/stubs/const-enum.stub';
    }

    /**
     * Map the stub variables present in stub to its value.
     */
    public function getStubVariables(): array
    {
        return [
            'NAMESPACE' => 'App\\Models\\Enums',
            'CLASS_NAME' => $this->getClassName(),
        ];
    }

    /**
     * Get the full path of generated class.
     */
    public function getSourceFilePath(): string
    {
        return app_path('Models/Enums/'.$this->getClassName()).'.php';
    }
}
