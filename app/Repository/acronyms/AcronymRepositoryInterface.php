<?php

namespace App\Repository\acronyms;

use App\Repository\EloquentRepositoryInterface;

interface AcronymRepositoryInterface extends EloquentRepositoryInterface
{
    /**
     * @param array $data
     * @param int $limit
     * @param array $columns
     * @return mixed
     */
    public function getData($keyword, $limit, $columns);
}