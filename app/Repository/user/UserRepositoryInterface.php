<?php

namespace App\Repository\user;

use App\Repository\EloquentRepositoryInterface;

interface UserRepositoryInterface extends EloquentRepositoryInterface {
   /**
     * @param array $data
     * @param int $limit
     * @param array $columns
     * @return mixed
     */
    public function getData($keyword, $limit, $columns);
}