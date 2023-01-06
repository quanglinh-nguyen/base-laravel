<?php

namespace App\Repository\users;

use App\Models\User;
use App\Repository\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends BaseRepository implements UserRepositoryInterface {
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getData($request, $limit = 10, $columns = ['*']){
        $keyword = $request->input('keyword') ?? null;
        $role = $request->input('role') ?? null;
        $limit = is_null($limit) ? config('repository.pagination.limit', 15) : $limit;
        $users = $this->model
        ->when($role, function ($query) use ($role) {
            $query->whereHas('roles',function($query) use ($role){
                $query->where('role_id', $role);
            });
         })
        ->when($keyword, function ($query) use( $keyword) {
           $query->where( function ($query) use ($keyword) {
            $query->orWhere('name','LIKE', "%$keyword%")->orWhere('email','LIKE', "%$keyword%");
           }

        );
        })
     
        ->paginate($limit, $columns)->appends(request()->query());
        return $users;
      }
}
