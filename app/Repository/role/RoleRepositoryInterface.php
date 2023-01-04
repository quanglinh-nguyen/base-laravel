<?php

namespace App\Repository\role;

use App\Repository\EloquentRepositoryInterface;

interface RoleRepositoryInterface extends EloquentRepositoryInterface 
{
    /**
     * @param array $data
     * @param int $limit
     * @param array $columns
     * @return mixed
     */
    public function getData($keyword, $limit, $columns);
}
