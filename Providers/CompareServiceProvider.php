<?php

namespace Modules\Compare\Providers;

use App;
use Illuminate\Support\ServiceProvider;

class CompareServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Compare';

    public function boot(): void
    {
        $this->mergeConfigFrom(
            module_path('Compare', 'config/settings.php'),
            'settings'
        );
        $this->loadMigrations();
    }

    public function register(): void
    {
    }

    private function loadMigrations(): void
    {
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Migrations'));
    }
}
