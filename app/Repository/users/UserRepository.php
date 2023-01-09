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

    public function getData($data, $limit = 50, $columns = ['*']){
        $role = $data['role'];
        $keyword = $data['keyword'];
        return $this->model
        ->when($role, function ($query) use ($role) {
            $query->whereHas('roles',function($query) use ($role){
                $query->where('role_id', $role);
            });
            })
        ->when($keyword, function ($query) use ( $keyword) {
            $query->where( function ($query) use ($keyword) {
                $query->orWhere('name','LIKE', "%$keyword%")->orWhere('email','LIKE', "%$keyword%");
            });
        })->orderBy('id', 'DESC')->paginate($limit, $columns)->appends(request()->query());
    }
}
