<?php

namespace App\Repository\bank;

use App\Models\Bank;
use App\Repository\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class BankRepository extends BaseRepository implements BankRepositoryInterface{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @param Model $model
     */
    public function __construct(Bank $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param array $data
     * @param int $limit
     * @param array $columns
     * @return mixed
     */
    public function getData($data, $limit = null, $columns = ['*'])
    {
        $keyword = $data['keyword'] ?? null;
        $limit = is_null($limit) ? config('repository.pagination.limit', 15) : $limit;
        $banks = $this->model
        ->when($keyword, function ($query, $keyword) {
            return $query->orWhere('acronym','LIKE',  "%$keyword%")->orWhere('full_name','LIKE', "%$keyword%");
        })->paginate($limit, $columns)->appends(request()->query());
        return $banks;
    }

}

