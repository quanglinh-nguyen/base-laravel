<?php

namespace App\Repository\customers;

use App\Models\Customer;
use App\Repository\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @param Model $model
     */
    public function __construct(Customer $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * Get all acronym and filter
     *
     * @param  array $data
     * @param int $limit
     * @param array $columns
     * @return mixed
     */
    public function getData($data, $limit = 50, $columns = ['*'])
    {
        return $this->model->orderBy('id', 'DESC')->paginate($limit, $columns)->appends(request()->query());
    }

}

