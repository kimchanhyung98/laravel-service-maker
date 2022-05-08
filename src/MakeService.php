<?php

namespace Kimchanhyung98\ServiceMaker;

use Illuminate\Console\GeneratorCommand;

class MakeService extends GeneratorCommand
{
    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected string $type = 'Service';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected string $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected string $description = 'Create a new service class';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__ . './service.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace(string $rootNamespace): string
    {
        return $rootNamespace . '\Services';
    }
}