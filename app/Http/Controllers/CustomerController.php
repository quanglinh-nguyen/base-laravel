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
    private $customerService;
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct(CustomersService $customerService)
    {
        $this->authorizeResource(Customer::class, 'customer');
        $this->customerService = $customerService;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            return view('customer.index', [
                'customers' => $this->customerService->getAllData($request)
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
        dd($request);
        $data = $request->only([
            'acronym',
            'acronym_column',
            'full_name',
        ]);
        try {
            $this->customerService->saveAcronymData($data);
            $message = config('error_message_list_conf.system.customers.create_success') ?? null;
            $this->showSuccessNotification($message);
        } catch (Exception $e) {
            $message = config('error_message_list_conf.system.customers.create_error') ?? null;
            $this->showErrorNotification($message);
        }
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('customer.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('customer.edit');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
