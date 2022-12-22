<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcronymsBankingRequest;
use App\Http\Controllers\Exception;
use Illuminate\Http\Request;
use App\Services\BankService;

class AcronymsBankingController extends Controller
{
    /**
     * @var BankService
     */
    private $bankService;

    /**
     * @param $bankService
     */
    public function __construct(BankService $bankService)
    {
        $this->bankService = $bankService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $banks = $this->bankService->getAll();
//        return view('acronyms-banking.index', [
//            'banks' => $banks,
//        ]);
//    }
    public function index(Request $request)
    {
        $banks = $this->bankService->getAllData($request);

        return view('acronyms-banking.index', [
            'banks' => $banks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acronyms-banking.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param AcronymsBankingRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AcronymsBankingRequest $request)
    {
        $data = $request->only([
            'acronym',
            'full_name',
        ]);
        try {
           $this->bankService->saveBankData($data);
           $this->showSuccessNotification('Acronyms Banking successfully created');
        } catch (Exception $e) {
            $this->showErrorNotification('Acronyms Banking failed created');
        }
        return redirect()->route('acronyms-banking.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('acronyms-banking.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AcronymsBankingRequest $request, $id)
    {
        $data = $request->only([
            'acronym',
            'full_name',
        ]);
        try {
            $this->bankService->updateBank($data, $id);
            $this->showSuccessNotification('Acronyms Banking successfully created');
        } catch (Exception $e) {
            $this->showErrorNotification('Acronyms Banking failed created');
        }
        return redirect()->route('acronyms-banking.index');
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
            $this->bankService->deleteById($id);
            $this->showSuccessNotification('Acronyms Banking successfully deleted');
        } catch (Exception $e) {
            $this->showErrorNotification('Acronyms Banking failed deleted');
        }
        return redirect()->route('acronyms-banking.index');
    }
}
