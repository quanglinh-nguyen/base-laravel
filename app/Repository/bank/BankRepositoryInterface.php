<?php

namespace App\Repository\bank;

use App\Repository\EloquentRepositoryInterface;

interface BankRepositoryInterface extends EloquentRepositoryInterface
{
    /**
     * @param array $data
     * @param int $limit
     * @param array $columns
     * @return mixed
     */
    public function getData($keyword, $limit, $columns);
}
