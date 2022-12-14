<?php

namespace App\Providers;

use App\Repository\BaseRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\post\PostRepository;
use App\Repository\post\PostRepositoryInterface;
use App\Repository\user\UserRepository;
use App\Repository\user\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    private $arrayRepository = [
        'base'=>[
            EloquentRepositoryInterface::class,
            BaseRepository::class
        ],
        'user'=>[
            UserRepositoryInterface::class,
            UserRepository::class
        ],
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->arrayRepository as $item){
            $this->app->bind($item[0], $item[1]);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
