<?php

namespace App\Services;

use App\Repository\acronyms\AcronymRepositoryInterface;
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
     * @var $acronymRepository
     */
    protected $acronymRepository;
    /**
     * customerService constructor.
     *
     * @param CustomerRepositoryInterface $customerRepository
     */
    public function __construct(CustomerRepositoryInterface $customerRepository, AcronymRepositoryInterface $acronymRepository)
    {
        $this->customerRepository = $customerRepository;
        $this->acronymRepository = $acronymRepository;
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
        $limit = config('repository.pagination.limit') ?? 50;
        $columns = config('config.customer_config.field_viewAny') ?? ['*'];
        return $this->customerRepository->getData($data, $limit, $columns);
    }

    /**
     * Get all industry customer.
     *
     * @return array
     */
    public function getAllIndustry()
    {
        if(is_null($this->customerRepository->getAllIndustry())){
            return [];
        }
        $result = array_unique($this->customerRepository->getAllIndustry());
        return $result;
    }

    /**
     * Get all Title Level customer.
     *
     * @return array
     */
    public function getAllTitleLever()
    {
        if(is_null($this->customerRepository->getAllTitleLevel())){
            return [];
        }
        $result = array_unique($this->customerRepository->getAllTitleLevel());
        return $result;
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
        $result = ['checkDuplicate' => false];

        $data = $this->standardizedData($data);
        $dataDuplicate = $this->customerRepository->checkDuplicateRecord($data);
        if(!is_null($dataDuplicate)){
            $historyUpdateCustomer = 'abc';
            $result['checkDuplicate'] = true;
            $result['checkDuplicate']= $historyUpdateCustomer;

            return $result;
        }

        $customer = $this->customerRepository->create($data);
        $result['data'] = $customer;
        return $result;


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
        $data = $this->standardizedData($data);

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

    /**
     * input data normalization
     *
     * @param array $data
     * @return array
     */
    public function standardizedData($data){
        $acronymOrganizationViet = $this->acronymRepository->getAcronymsFullText($data['organization_viet'], 1);
        if(!is_null($acronymOrganizationViet)){
            $data['organization_viet'] = $acronymOrganizationViet;
        }

        $acronymOrganizationEng = $this->acronymRepository->getAcronymsFullText($data['organization_eng'], 2);
        if(!is_null($acronymOrganizationEng)){
            $data['organization_eng'] = $acronymOrganizationEng;
        }

        $acronymAdress = $this->acronymRepository->getAcronymsFullText($data['address'], 3);
        if(!is_null($acronymAdress)){
            $data['address'] = $acronymAdress;
        }

        return $data;
    }

}
