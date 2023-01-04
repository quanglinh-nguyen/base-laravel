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
     * @param $AcronymRepository $acronymRepository
     */
    public function __construct(AcronymRepositoryInterface $acronymRepository)
    {
        $this->acronymRepository = $acronymRepository;
    }
    /**
     * Get all acronym.
     * @param  \Illuminate\Http\Request $request
     *
     * @return String
     */
    public function getAllData($request)
    {
        $acronyms = $this->acronymRepository->getData($request);
        return $acronyms;
    }

    /**
     * Validate acronym data.
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function saveAcronymData($data)
    {
        $array_acronym_val = array_keys(config('config.acronym_column_list'));
        if(!in_array($data['acronym_column'], $array_acronym_val)){
            throw new InvalidArgumentException('Data is invalid');
        }
        DB::beginTransaction();
        try {
            $result = $this->acronymRepository->create($data);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            throw new InvalidArgumentException('Unable to create acronym data');
        }
        DB::commit();
        return $result;
    }

    /**
     * Get acronym by id.
     *
     * @param $id
     * @return String
     */
    public function getById($id)
    {
        return $this->acronymRepository->findById($id);
    }


    /**
     * Update acronym data
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function updateAcronym($data, $id)
    {
        $array_acronym_val = array_keys(config('config.acronym_column_list'));
        if(!in_array($data['acronym_column'], $array_acronym_val)){
            throw new InvalidArgumentException('Data is invalid');
        }
        DB::beginTransaction();

        try {
            $acronym = $this->acronymRepository->update($id, $data);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            throw new InvalidArgumentException('Unable to update acronym data');
        }

        DB::commit();

        return $acronym;

    }


    /**
     * Delete acronym by id.
     *
     * @param $id
     * @return String
     */
    public function deleteById($id)
    {
        DB::beginTransaction();

        try {
            $acronym = $this->acronymRepository->deleteById($id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Unable to delete acronym data');
        }

        DB::commit();

        return $acronym;

    }
}
