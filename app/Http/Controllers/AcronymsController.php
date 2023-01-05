<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcronymsRequest;
use App\Http\Controllers\Exception;
use Illuminate\Http\Request;
use App\Services\AcronymsService;
use Illuminate\Support\Facades\Log;

class AcronymsController extends Controller
{
    /**
     * @var AcronymsService
     */
    private $acronymsService;

    /**
     * @param $acronymsService
     */
    public function __construct(AcronymsService $acronymsService)
    {
        $this->acronymsService = $acronymsService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        try {
            $acronyms = $this->acronymsService->getAllData($request);
            $array_acronym = config('config.acronym_column_list');
        } catch (Exception $e) {
            Log::error($e);
            return redirect()->route('home.index');
        }
        return view('acronyms.index', [
            'acronyms' => $acronyms,
            'array_acronym' => $array_acronym
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $array_acronym = config('config.acronym_column_list');
        } catch (Exception $e) {
            return redirect()->route('acronyms-fields.index');
        }
        return view('acronyms.create', [
            'array_acronym' => $array_acronym
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param AcronymsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AcronymsRequest $request)
    {
        $data = $request->only([
            'acronym',
            'acronym_column',
            'full_name',
        ]);
        try {
           $this->acronymsService->saveAcronymData($data);
           $this->showSuccessNotification('Acronyms successfully created');
        } catch (Exception $e) {
            $this->showErrorNotification('Acronyms failed created');
        }
        return redirect()->route('acronyms-fields.index');
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
            $acronym = $this->acronymsService->getById($id);
            $array_acronym = config('config.acronym_column_list');
        } catch (Exception $e) {
            return redirect()->route('acronyms-fields.index');
        }
        return view('acronyms.edit', [
            'acronym' => $acronym,
            'array_acronym' => $array_acronym
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AcronymsRequest $request, $id)
    {
        $data = $request->only([
            'acronym',
            'acronym_column',
            'full_name',
        ]);
        try {
            $this->acronymsService->updateAcronym($data, $id);
            $this->showSuccessNotification('Acronyms successfully updated');
        } catch (Exception $e) {
            $this->showErrorNotification('Acronyms failed updated');
        }
        return redirect()->route('acronyms-fields.index');
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
            $this->acronymsService->deleteById($id);
            $this->showSuccessNotification('Acronyms successfully deleted');
        } catch (Exception $e) {
            $this->showErrorNotification('Acronyms failed deleted');
        }
        return redirect()->route('acronyms-fields.index');
    }
}
