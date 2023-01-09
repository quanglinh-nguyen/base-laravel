<?php

namespace App\Services;

use App\Repository\customers\CustomerRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class CustomersService
{
    /**
     * @var $customerRepository
     */
    protected $customerRepository;
    /**
     * customerService constructor.
     *
     * @param CustomerRepositoryInterface $customerRepository
     */
    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    /**
     * Get all customer.
     *
     * @param $request
     * @return mixed
     */
    public function getAllData($request)
    {
        $data = [];
        $data['keyword'] = $request->input('keyword') ?? null;
        $data['customer_column'] = $request->input('customer_column') ?? null;
        $limit = config('repository.pagination.limit') ?? 50;
        $columns = [
            'id',
            'customer',
            'customer_column',
            'full_name'
        ];
        return $this->customerRepository->getData($data, $limit, $columns);
    }

    /**
     * Validate customer data.
     * Store to DB if there are no errors.
     *
     * @param $data
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function saveCustomerData($data)
    {
        $array_customer_val = array_keys(config('config.customer_column_list'));
        if(!in_array($data['customer_column'], $array_customer_val)){
            $message = config('error_message_list_conf.system.data_error');
            throw new InvalidArgumentException($message);
        }
        return $this->customerRepository->create($data);
    }

    /**
     * Get customer by id.
     *
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function getById($id)
    {
        return $this->customerRepository->findById($id);
    }


    /**
     * Update customer data
     * Store to DB if there are no errors.
     *
     * @param $data
     * @param $id
     * @return bool
     */
    public function updateCustomer($data, $id)
    {
        $array_customer_val = array_keys(config('config.customer_column_list'));
        if(!in_array($data['customer_column'], $array_customer_val)){
            $message = config('error_message_list_conf.system.data_error');
            throw new InvalidArgumentException($message);
        }
        return $this->customerRepository->update($id, $data);
    }


    /**
     * Delete customer by id.
     *
     * @param $id
     * @return bool
     */
    public function deleteById($id)
    {
        return $this->customerRepository->deleteById($id);
    }
}
