<?php

namespace App\Providers;

use App\Models\Categories;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\News;
use App\Models\User;
use App\Policies\CategoriesPolicy;
use App\Policies\PostPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        News::class => PostPolicy::class,
        Categories::class => CategoriesPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        // use Of Gate

        Gate::define('isAdmin', function ($user) {
            return $user->role == 'admin';
        });

        Gate::define('isUser', function ($user) {
            return $user->role == 'user';
        });

        Gate::define('isEditor', function ($user) {
            return $user->role == 'editor';
        });


        // Gate::define('admin', function (User $user) : bool {
        //     return (bool) $user->is_Admin;
        // });
    }
}
