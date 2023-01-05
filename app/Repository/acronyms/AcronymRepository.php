<?php

namespace App\Repository\acronyms;

use App\Models\Acronym;
use App\Repository\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class AcronymRepository extends BaseRepository implements AcronymRepositoryInterface{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @param Model $model
     */
    public function __construct(Acronym $model)
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
        return $this->model
        ->when($data['acronym_column'], function ($query, $acronym_column) {
            return $query->where('acronym_column','=',  $acronym_column);
        })
        ->when($data['keyword'], function ($query, $keyword) {
            return  $query->where(function($query) use ($keyword) {
                $query->orWhere('acronym','LIKE',  "%$keyword%")->orWhere('full_name','LIKE', "%$keyword%");
            });
        })->paginate($limit, $columns)->appends(request()->query());
    }

}

