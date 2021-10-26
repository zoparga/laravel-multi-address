<?php

namespace zoparga\MultiAddress;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use zoparga\MultiAddress\Commands\MultiAddressCommand;

class MultiAddressServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('multi-address')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_multi-address_table')
            ->hasCommand(MultiAddressCommand::class);
    }
}
