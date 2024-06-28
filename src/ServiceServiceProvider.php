<?php

namespace Visiarch\ServiceServiceTrait;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Visiarch\ServiceServiceTrait\MakeService;

/**
 * This file is part of the Laravel Trait package.
 *
 * @author Gusti Bagus Suandana <visiarch@gmail.com> (C)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class ServiceServiceProvider extends PackageServiceProvider
{
    /**
     * Configure the package.
     *
     * @param  Package  $package  The Laravel package object.
     */
    public function configurePackage(Package $package): void
    {
        // Configure the Laravel package.
        $package
            ->name('laravel-service') // Set the package name.
            ->hasCommand(MakeService::class); // Register the command.
    }
}
