<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Routing\Console\ControllerMakeCommand;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'make:controller')]
class ActionMakeCommand extends ControllerMakeCommand
{
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Http\Action';
    }
}
