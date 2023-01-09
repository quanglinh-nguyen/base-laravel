<?php

namespace App\Repository\customers;

use App\Repository\EloquentRepositoryInterface;

interface CustomerRepositoryInterface extends EloquentRepositoryInterface
{

    /**
     * Get all acronym and filter
     *
     * @param array $data
     * @param int $limit
     * @param array $columns
     * @return mixed
     */
    public function getData($keyword, $limit, $columns);
}
