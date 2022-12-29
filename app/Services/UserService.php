<?php

namespace App\Services;

use App\Models\Role;
use App\Repository\user\UserRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class UserService
{
    /**
     * @var $userRepository
     */
    protected $userRepository;
    /**
     * userService constructor.
     *
     * @param $UserRepository $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository, Role $roles)
    {
        $this->userRepository = $userRepository;
        $this->role = $roles;
    }

    /**
     * Get all user.
     *
     * @return String
     */
    public function getAll()
    {
        return $this->userRepository->all();
    }

    /**
     * Validate user data.
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function saveUserData($data)
    {
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->userRepository->create($data);

        return $result;
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
    public function updateUser($data, $id)
    {
        $validator = Validator::make($data, [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $user = $this->userRepository->update($id, $data);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            throw new InvalidArgumentException('Unable to update user data');
        }

        DB::commit();

        return $user;

    }


    /**
     * Delete user by id.
     *
     * @param $id
     * @return String
     */
    public function deleteById($id)
    {
        DB::beginTransaction();

        try {
            $user = $this->userRepository->deleteById($id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Unable to delete user data');
        }

        DB::commit();

        return $user;

    }
    public function getAllRoles(){
        $roles = $this->role->getAll();
        return $roles;
    }
}
