<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\RoleService;
use App\Services\UserService;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class UserController extends Controller
{
    private $userService;
    private $roleService;

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct(UserService $userService, RoleService $roleService)
    {
        $this->authorizeResource(User::class, 'user');
        $this->userService = $userService;
        $this->roleService = $roleService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            return view('user.index',[
                'users' => $this->userService->getAll($request),
                'roles' => $this->roleService->getAll()
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('user.create',[
                'roles' => $this->roleService->getAll()
            ]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $message = config('error_message_list_conf.system.error_system') ?? null;
            $this->showWarningNotification($message);
            return redirect()->route('user.index');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        try {
            $this->userService->saveUserData($request);
            $message = config('error_message_list_conf.system.users.create_success') ?? null;
            $this->showSuccessNotification($message);
        } catch (Exception $e) {
            DB::rollBack();
            $message = config('error_message_list_conf.system.users.create_error') ?? null;
            $this->showSuccessNotification($message);
        }
        return redirect()->route('user.index');
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
        try {
            return view('user.edit', [
                'user' => $this->userService->getById($id),
                'roles' => $this->roleService->getAll()
            ]);
        } catch (Exception $e) {
            $this->showWarningNotification(config('error_message_list_conf.system.error_system'));
            return redirect()->route('user.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        try {
            $this->userService->updateUser($request, $id);
            $message = config('error_message_list_conf.system.users.update_success') ?? null;
            $this->showSuccessNotification($message);
        } catch (Exception $e) {
            DB::rollBack();
            $message = config('error_message_list_conf.system.users.update_error') ?? null;
            $this->showSuccessNotification($message);
        }
        return redirect()->route('user.index');
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
            $this->userService->deleteById($id);
            $message = config('error_message_list_conf.system.users.delete_success') ?? null;
            $this->showSuccessNotification($message);
        } catch (Exception $e) {
            $message = config('error_message_list_conf.system.users.delete_error') ?? null;
            $this->showSuccessNotification($message);
        }
        return redirect()->route('user.index');
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
