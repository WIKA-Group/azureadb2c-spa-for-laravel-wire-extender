<?php

namespace WikaGroup\AzureAdB2cWireExtender;

class AzureAdB2cWireExtenderServiceProvider extends \Spatie\LaravelPackageTools\PackageServiceProvider
{
    public function configurePackage(\Spatie\LaravelPackageTools\Package $package): void {
        $package
            ->name('azureB2cWireExtender');
    }

    public function packageBooted()
    {
        \Livewire\Livewire::component('azureB2cWireExtenderScripts', Components\Scripts::class);
    }
}
