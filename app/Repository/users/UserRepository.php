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
        $this->model = $model;
    }

    public function getData($request, $limit = null, $columns = ['*']){
        $keyword = $request->input('keyword') ?? null;
        $limit = is_null($limit) ? config('repository.pagination.limit', 15) : $limit;
        $users = $this->model
        ->when($keyword, function ($query, $keyword) {
            return $query->orWhere('name','LIKE',  "%$keyword%")->orWhere('email','LIKE', "%$keyword%");
        })->paginate($limit, $columns)->appends(request()->query());
        return $users;
      }
}
