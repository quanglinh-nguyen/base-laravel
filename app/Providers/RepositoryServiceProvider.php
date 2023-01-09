<?php

namespace App\Providers;


use App\Repository\BaseRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\acronyms\AcronymRepository;
use App\Repository\acronyms\AcronymRepositoryInterface;
use App\Repository\role\RoleRepository;
use App\Repository\role\RoleRepositoryInterface;
use App\Repository\users\UserRepository;
use App\Repository\users\UserRepositoryInterface;
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
        'acronym'=>[
            AcronymRepositoryInterface::class,
            AcronymRepository::class
        ],
        'role'=>[
            RoleRepositoryInterface::class,
            RoleRepository::class
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
