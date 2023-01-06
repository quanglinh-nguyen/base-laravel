<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\RoleService;
use App\Services\UserService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends Controller
{
    private $userService;
    private $roleService;
    private $data;
    public function __construct(UserService $userService, RoleService $roleService)
    {
        $this->userService = $userService;
        $this->roleService = $roleService;
        $this->data = [];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $users = $this->userService->getAll($request);
        $roles = $this->roleService->getAll();
        $this->data['users'] = $users;
        $this->data['roles'] = $roles;
        return view('user.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->roleService->getAll();
        $this->data['roles'] = $roles;
        return view('user.create',[
            'roles' => $roles
        ]);
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
            $this->showSuccessNotification('User successfully created');
        } catch (Exception $e) {
            DB::rollBack();
            $this->showErrorNotification('User failed created');
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
        dd(2);
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
            $roles = $this->roleService->getAll();
            $user = $this->userService->getById($id);
            
        } catch (Exception $e) {
            return redirect()->route('user.index');
        }
        return view('user.edit', [
            'user' => $user,
            'roles' => $roles
        ]);
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
            $this->showSuccessNotification('User successfully updated');
        } catch (Exception $e) {
            DB::rollBack();
            $this->showErrorNotification('User failed updated');
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
            $this->showSuccessNotification('User successfully deleted');
        } catch (Exception $e) {
            $this->showErrorNotification('User failed deleted');
        }
        return redirect()->route('user.index');
    }
}