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
        return $this->model
        ->when($data['role'], function ($query) use ($data) {
            $query->whereHas('roles',function($query) use ($data){
                $query->where('role_id', $data['role']);
            });
            })
        ->when($data['keyword'], function ($query) use ($data) {
            $query->where( function ($query) use ($data) {
                $query->orWhere('name','LIKE', "%".$data['keyword']."%")->orWhere('email','LIKE', "%".$data['keyword']."%");
            });
        })->orderBy('id', 'DESC')->paginate($limit, $columns)->appends(request()->query());
    }
}
