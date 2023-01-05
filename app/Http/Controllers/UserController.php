<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
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
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->only([
            'name',
            'email',
            'phone',
            'role_id'
        ]);
        $password = Str::random(10);
        $data = array_merge($data,['password' => $password]);
        try {
            $this->userService->saveUserData($data);
            $this->showSuccessNotification('User successfully created');
        } catch (Exception $e) {
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
        $dataUser = $request->only([
            'name',
            'phone',
        ]);
        $user = User::find($id);
        DB::beginTransaction();
        try {
            $this->userService->updateUser($dataUser, $id);
            $user->roles()->sync($request->only('role_id'));
            $this->showSuccessNotification('User successfully updated');
            DB::commit();
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
        //
    }
}