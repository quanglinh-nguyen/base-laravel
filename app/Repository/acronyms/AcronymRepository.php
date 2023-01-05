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
     * @param  \Illuminate\Http\Request $request
     * @param int $limit
     * @param array $columns
     * @return mixed
     */
    public function getData($request, $limit = null, $columns = ['*'])
    {

        $keyword = $request->input('keyword') ?? null;
        $acronym_column = $request->input('acronym_column') ?? null;
        $limit = is_null($limit) ? config('repository.pagination.limit', 15) : $limit;
        $banks = $this->model
        ->when($acronym_column, function ($query, $acronym_column) {
            return $query->where('acronym_column','=',  $acronym_column);
        })
        ->when($keyword, function ($query, $keyword) {
            return  $query->where(function($query) use ($keyword) {
                $query->orWhere('acronym','LIKE',  "%$keyword%")->orWhere('full_name','LIKE', "%$keyword%");
            });
        })->paginate($limit, $columns)->appends(request()->query());
        return $banks;
    }

}

