<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcronymsRequest;
use App\Http\Controllers\Exception;
use App\Models\Acronym;
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
     * Create the controller instance.
     *
     * @param $acronymsService
     */
    public function __construct(AcronymsService $acronymsService)
    {
        $this->authorizeResource(Acronym::class, 'acronym');
        $this->acronymsService = $acronymsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request, Acronym $acronym)
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
    public function create(Acronym $acronym)
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
    public function store(AcronymsRequest $request, Acronym $acronym)
    {
        $data = $request->only([
            'acronym',
            'acronym_column',
            'full_name',
        ]);
        try {
           $this->acronymsService->saveAcronymData($data);
           $message = config('error_message_list_conf.system.acronyms.create_success') ?? null;
           $this->showSuccessNotification($message);
        } catch (Exception $e) {
            $message = config('error_message_list_conf.system.acronyms.create_error') ?? null;
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
    public function edit($id, Acronym $acronym)
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
    public function update(AcronymsRequest $request, $id, Acronym $acronym)
    {
        $data = $request->only([
            'acronym',
            'acronym_column',
            'full_name',
        ]);
        try {
            $this->acronymsService->updateAcronym($data, $id);
            $message = config('error_message_list_conf.system.acronyms.update_success') ?? null;
            $this->showSuccessNotification($message);
        } catch (Exception $e) {
            $message = config('error_message_list_conf.system.acronyms.update_error') ?? null;
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
    public function destroy($id, Acronym $acronym)
    {
        try {
            $this->acronymsService->deleteById($id);
            $message = config('error_message_list_conf.system.acronyms.delete_success') ?? null;
            $this->showSuccessNotification($message);
        } catch (Exception $e) {
            $message = config('error_message_list_conf.system.acronyms.delete_error') ?? null;
            $this->showErrorNotification($message);
        }
        return redirect()->route('acronyms-fields.index');
    }
}
