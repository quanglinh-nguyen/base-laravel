<?php

namespace App\Services;

use App\Mail\SendEmailCreateAccount;
use App\Models\Role;
use App\Repository\users\UserRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Illuminate\Support\Str;

class UserService
{
    /**
     * @var $userRepository
     */
    protected $userRepository;
    protected $roleRepository;
    /**
     * userService constructor.
     *
     * @param $UserRepository $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Get all user.
     *
     * @return String
     */
    public function getAll($request)
    {
        return $this->userRepository->getData($request);
    }

    /**
     * Validate user data.
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function saveUserData($request)
    { 
        $data = $request->only([
            'name',
            'email',
            'phone',
            'role_id'
        ]);
        $password = Str::random(10);
        $data = array_merge($data,['password' => $password]);
    
        DB::beginTransaction();
        $user = $this->userRepository->create($data);
        $user->roles()->sync($data['role_id']);
        Mail::to($data['email'])->send(new SendEmailCreateAccount([
            'email' => $data['email'],
            'password' => $data['password'],
        ]));
        DB::commit();
       
        return true;
    }

    /**
     * Get user by id.
     *
     * @param $id
     * @return String
     */
    public function getById($id)
    {
        return $this->userRepository->findById($id);
    }


    /**
     * Update user data
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function updateUser($request, $id)
    {
        $dataUser = $request->only([
            'name',
            'phone',
        ]);
        DB::beginTransaction();
        $this->userRepository->update($id, $dataUser);
        $user = $this->userRepository->findById($id);
        $user->roles()->sync($request->only('role_id'));
        DB::commit();

        return true;
    }


    /**
     * Delete user by id.
     *
     * @param $id
     * @return String
     */
    public function deleteById($id)
    {
        return $this->userRepository->deleteById($id);
    }
    public function getRoles(Role $role){
        return $role->all();
    }
}
