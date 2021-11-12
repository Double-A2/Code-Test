<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/12/21
 * Time: 10:25 AM
 */

namespace App\Providers;


use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use App\Repositories\Interfaces\TestInterface;
use App\Repositories\TestRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        TestInterface::class => TestRepository::class,
        BaseRepositoryInterface::class => BaseRepository::class,
    ];

    public function register()
    {
        foreach ($this->repositories as $interface => $repository) {
            $this->app->bind(
                $interface,
                $repository
            );
        }
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