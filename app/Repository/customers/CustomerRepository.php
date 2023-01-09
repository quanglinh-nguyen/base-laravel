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

    public function getAllIndustry()
    {
        return $this->model->pluck('industry')->toArray();
    }

    public function getAllTitleLevel()
    {
        return $this->model->pluck('title_level')->toArray();
    }

    public function checkDuplicateRecord($data){

        $acronyms = $this->model
            ->when($data['organization_viet'], function ($query) use ($data){
                $organization_viet = $data['organization_viet'];
                return $query->where(function($query) use ($organization_viet) {
                    $query->where('organization_viet', $organization_viet);
                })
                ->where(function($query) use ($data) {
                    $name = $data['name'] ?? null;
                    $mobile = $data['mobile'] ?? null;
                    $business_email = $data['business_email'] ?? null;
                    $personal_email = $data['personal_email'] ?? null;
                    $query->when($name, function ($query) use ($name) {
                        return $query->orWhere('name', $name);
                    });
                    $query->when($mobile, function ($query) use ($mobile) {
                        return $query->orWhere('mobile', $mobile);
                    });
                    $query->when($business_email, function ($query) use ($business_email) {
                        return $query->orWhere('business_email', $business_email);
                    });
                    $query->when($personal_email, function ($query) use ($personal_email) {
                        return $query->orWhere('personal_email', $personal_email);
                    });
                    return $query;
                });
            })
            ->orderBy('id', 'DESC')->first();
        if(is_null($acronyms)){
            return null;
        }
        return $acronyms;
    }
}

