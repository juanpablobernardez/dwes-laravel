<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Extensions\MyEloquentUserProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Auth::provider('alumno', function ($app, array $config) {
            $model = $app['config']['auth.providers.alumnos.model'];
            return new MyEloquentUserProvider($app['hash'], $model);
        });

        Auth::provider('profesor', function ($app, array $config) {
            $model = $app['config']['auth.providers.profesores.model'];
            return new MyEloquentUserProvider($app['hash'], $model);
        });

        //
    }
}
