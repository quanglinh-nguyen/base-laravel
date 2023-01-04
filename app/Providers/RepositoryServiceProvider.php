<?php

namespace App\Providers;


use App\Repository\BaseRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\bank\BankRepository;
use App\Repository\bank\BankRepositoryInterface;
use App\Repository\role\RoleRepository;
use App\Repository\role\RoleRepositoryInterface;
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
        'bank'=>[
            BankRepositoryInterface::class,
            BankRepository::class
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
