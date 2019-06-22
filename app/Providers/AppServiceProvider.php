<?php

namespace App\Providers;

use App\Repositories\BookRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\impl\BookRepository;
use App\Repositories\impl\CategoryRepository;
use App\Service\BookServiceInterface;
use App\Service\CategoryServiceInterface;
use App\Service\impl\BookService;
use App\Service\impl\CategoryService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BookServiceInterface::class,BookService::class);
        $this->app->singleton(BookRepositoryInterface::class,BookRepository::class);
        $this->app->singleton(CategoryServiceInterface::class,CategoryService::class);
        $this->app->singleton(CategoryRepositoryInterface::class,CategoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
