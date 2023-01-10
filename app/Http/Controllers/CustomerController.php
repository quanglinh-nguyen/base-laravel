<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Services\CustomersService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    /**
     * @var CustomersService
     */
    private $customersService;
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct(CustomersService $customersService)
    {
        $this->authorizeResource(Customer::class, 'customer');
        $this->customersService = $customersService;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        dd($request->all());
        try {
            $arrIndustry = $this->customersService->getAllIndustry();
            $arrTitleLever = $this->customersService->getAllTitleLever();
            return view('customer.index', [
                'customers' => $this->customersService->getAllData($request),
                'arrIndustry' => $arrIndustry,
                'arrTitleLever' => $arrTitleLever
            ]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $message = config('error_message_list_conf.system.error_system') ?? null;
            $this->showWarningNotification($message);
            return redirect()->route('home.index');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function outdate()
    {
        $this->authorize('viewAny', Customer::class);
        return view('customer.outdate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('customer.create');
        } catch (Exception $e) {
            $message = config('error_message_list_conf.system.error_system') ?? null;
            $this->showWarningNotification($message);
            return redirect()->route('customers.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $request_field = config('config.customer_config.request_only');

        $data = $request->only($request_field);
        try {
            $result = $this->customersService->saveCustomerData($data);

            if($result['checkDuplicate'] == true){
                $message = config('error_message_list_conf.system.customers.record_duplicate') ?? null;
                $this->showSuccessNotification($message);
                return redirect()->route('history-update-customer.index');
            }
            $message = config('error_message_list_conf.system.customers.create_success') ?? null;
            $this->showSuccessNotification($message);
        } catch (Exception $e) {
            $message = config('error_message_list_conf.system.customers.create_error') ?? null;
            $this->showErrorNotification($message);
        }

        return redirect()->route('customers.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            return view('customer.edit', [
                'customer' => $this->customersService->getById($id),
            ]);
        } catch (Exception $e) {
            $this->showWarningNotification(config('error_message_list_conf.system.error_system'));
            return redirect()->route('customer.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request_field = config('config.customer_config.request_only');

        $data = $request->only($request_field);
        try {
            $this->customersService->updateCustomer($data, $id);
            $message = config('error_message_list_conf.system.customers.update_success') ?? null;
            $this->showSuccessNotification($message);
        } catch (Exception $e) {
            $message = config('error_message_list_conf.system.customers.update_error') ?? null;
            $this->showErrorNotification($message);
        }
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->customersService->deleteById($id);
            $message = config('error_message_list_conf.system.customers.delete_success') ?? null;
            $this->showSuccessNotification($message);
        } catch (Exception $e) {
            $message = config('error_message_list_conf.system.customers.delete_error') ?? null;
            $this->showErrorNotification($message);
        }
        return redirect()->route('customers.index');
    }

    /**
     * Get the list of resource methods which do not have model parameters.
     *
     * @return array
     */
    protected function resourceMethodsWithoutModels()
    {
        return  ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'];
    }
}
