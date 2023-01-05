<?php

namespace App\Services;

use App\Models\Role;
use App\Repository\role\RoleRepository;
use App\Repository\role\RoleRepositoryInterface;

class RoleService
{
    /**
     * @var $userRepository
     */
    protected $roleRepository;
    protected $roles;
    /**
     * userService constructor.
     *
     * @param $UserRepository $userRepository
     */
    public function __construct(RoleRepositoryInterface $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    /**
     * Get all user.
     *
     * @return String
     */
    public function getAll()
    {
        return $this->roleRepository->all();
    }
}
