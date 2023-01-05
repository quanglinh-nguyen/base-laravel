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
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        try {
            return view('acronyms.index', [
                'acronyms' => $this->acronymsService->getAllData($request),
                'array_acronym' => config('config.acronym_column_list')
            ]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $message = config('error_message_list_conf.system.error_system') ?? null;
            $this->showWarningNotification($message);
            return redirect()->route('home.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        try {
            return view('acronyms.create', [
                'array_acronym' => config('config.acronym_column_list')
            ]);
        } catch (Exception $e) {
            $message = config('error_message_list_conf.system.error_system') ?? null;
            $this->showWarningNotification($message);
            return redirect()->route('acronyms-fields.index');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param AcronymsRequest $request
     * @return \Illuminate\Contracts\View\View
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
           $message = config('error_message_list_conf.system.create_success') ?? null;
           $this->showSuccessNotification($message);
        } catch (Exception $e) {
            $message = config('error_message_list_conf.system.create_error') ?? null;
            $this->showErrorNotification($message);
        }
        return redirect()->route('acronyms-fields.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        try {
            return view('acronyms.edit', [
                'acronym' => $this->acronymsService->getById($id),
                'array_acronym' => config('config.acronym_column_list')
            ]);
        } catch (Exception $e) {
            $this->showWarningNotification(config('error_message_list_conf.system.error_system'));
            return redirect()->route('acronyms-fields.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
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
            $message = config('error_message_list_conf.system.update_success') ?? null;
            $this->showSuccessNotification($message);
        } catch (Exception $e) {
            $message = config('error_message_list_conf.system.update_error') ?? null;
            $this->showErrorNotification($message);
        }
        return redirect()->route('acronyms-fields.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function destroy($id)
    {
        try {
            $this->acronymsService->deleteById($id);
            $message = config('error_message_list_conf.system.delete_success') ?? null;
            $this->showSuccessNotification($message);
        } catch (Exception $e) {
            $message = config('error_message_list_conf.system.delete_error') ?? null;
            $this->showErrorNotification($message);
        }
        return redirect()->route('acronyms-fields.index');
    }
}
