<?php

namespace App\Services;

use App\Repository\bank\BankRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class BankService
{
    /**
     * @var $bankRepository
     */
    protected $bankRepository;
    /**
     * bankService constructor.
     *
     * @param $BankRepository $bankRepository
     */
    public function __construct(BankRepositoryInterface $bankRepository)
    {
        $this->bankRepository = $bankRepository;
    }
    /**
     * Get all bank.
     * @param  \Illuminate\Http\Request $request
     *
     * @return String
     */
    public function getAllData($request)
    {
        $banks = $this->bankRepository->getData($request);
        return $banks;
    }

    /**
     * Validate bank data.
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function saveBankData($data)
    {

        $result = $this->bankRepository->create($data);
        return $result;
    }

    /**
     * Get bank by id.
     *
     * @param $id
     * @return String
     */
    public function getById($id)
    {
        return $this->bankRepository->findById($id);
    }


    /**
     * Update bank data
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function updateBank($data, $id)
    {
        DB::beginTransaction();

        try {
            $bank = $this->bankRepository->update($id, $data);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            throw new InvalidArgumentException('Unable to update bank data');
        }

        DB::commit();

        return $bank;

    }


    /**
     * Delete bank by id.
     *
     * @param $id
     * @return String
     */
    public function deleteById($id)
    {
        DB::beginTransaction();

        try {
            $bank = $this->bankRepository->deleteById($id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Unable to delete bank data');
        }

        DB::commit();

        return $bank;

    }
}
