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
}


