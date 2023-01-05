<?php

namespace App\Services;

use App\Repository\acronyms\AcronymRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class AcronymsService
{
    /**
     * @var $acronymRepository
     */
    protected $acronymRepository;
    /**
     * acronymService constructor.
     *
     * @param AcronymRepositoryInterface $acronymRepository
     */
    public function __construct(AcronymRepositoryInterface $acronymRepository)
    {
        $this->acronymRepository = $acronymRepository;
    }

    /**
     * Get all acronym.
     *
     * @param $request
     * @return mixed
     */
    public function getAllData($request)
    {
        $data = [];
        $data['keyword'] = $request->input('keyword') ?? null;
        $data['acronym_column'] = $request->input('acronym_column') ?? null;
        $limit = config('repository.pagination.limit') ?? 50;
        $columns = [
            'id',
            'acronym',
            'acronym_column',
            'full_name'
        ];
        return $this->acronymRepository->getData($data, $limit, $columns);
    }

    /**
     * Validate acronym data.
     * Store to DB if there are no errors.
     *
     * @param $data
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function saveAcronymData($data)
    {
        $array_acronym_val = array_keys(config('config.acronym_column_list'));
        if(!in_array($data['acronym_column'], $array_acronym_val)){
            throw new InvalidArgumentException('Data is invalid');
        }
        return $this->acronymRepository->create($data);
    }

    /**
     * Get acronym by id.
     *
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function getById($id)
    {
        return $this->acronymRepository->findById($id);
    }


    /**
     * Update acronym data
     * Store to DB if there are no errors.
     *
     * @param $data
     * @param $id
     * @return bool
     */
    public function updateAcronym($data, $id)
    {
        $array_acronym_val = array_keys(config('config.acronym_column_list'));
        if(!in_array($data['acronym_column'], $array_acronym_val)){
            throw new InvalidArgumentException('Data is invalid');
        }
        return $this->acronymRepository->update($id, $data);
    }


    /**
     * Delete acronym by id.
     *
     * @param $id
     * @return bool
     */
    public function deleteById($id)
    {
        return $this->acronymRepository->deleteById($id);
    }
}
