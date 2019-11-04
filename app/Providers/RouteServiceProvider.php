<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapWebStudentRoutes();
        $this->mapWebTeacherRoutes();
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        \Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    protected function mapWebStudentRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace.'\Student')
            ->prefix("student")
            ->as("student.")
            ->group(base_path('routes/user/web.php'));

        Route::middleware('web')
            ->namespace($this->namespace.'\Student\Auth')
            ->prefix("student/auth")
            ->as("student.")
            ->group(base_path('routes/user/web-auth.php'));
    }

    protected function mapWebTeacherRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace.'\Teacher')
            ->prefix("teacher")
            ->as("teacher.")
            ->group(base_path('routes/teacher/web.php'));

        Route::middleware('web')
            ->namespace($this->namespace.'\Teacher\Auth')
            ->prefix("teacher/auth")
            ->as("teacher.")
            ->group(base_path('routes/teacher/web-auth.php'));
    }
}
