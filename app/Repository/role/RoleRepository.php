<?php

namespace App\Repository\role;

use App\Models\Role;
use App\Repository\BaseRepository;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface{
  /**
   * @var Model
   */
  protected $model;

  /**
   * BaseRepository constructor.
   *
   * @param Model $model
   */
  public function __construct(Role $model)
  {
    parent::__construct($model);
    $this->model = $model;
  }

  public function getData($request, $limit = null, $columns = ['*']){
    $keyword = $request->input('keyword') ?? null;
    $limit = is_null($limit) ? config('repository.pagination.limit', 15) : $limit;
    $roles = $this->model
    ->when($keyword, function ($query, $keyword) {
        return $query->orWhere('name','LIKE',  "%$keyword%")->orWhere('email','LIKE', "%$keyword%");
    })->paginate($limit, $columns)->appends(request()->query());
    return $roles;
  }
}


