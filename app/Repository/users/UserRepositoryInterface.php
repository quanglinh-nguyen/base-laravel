<?php

namespace App\Repository\users;

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
