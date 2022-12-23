<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $superAdminId = DB::table('users')->insertGetId(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
            ]
        );

        $adminId = DB::table('users')->insertGetId(
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123456'),
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
            ]
        );

        $roleSuperId = DB::table('roles')->insertGetId(
            [
                'name' => 'superadmin',
                'display_name' => 'Super Admin'
            ]
        );

        $roleAdminId = DB::table('roles')->insertGetId([
            'name' => 'admin',
            'display_name' => 'Admin'
        ]);

        DB::table('role_user')->insert([
            ['user_id' => $superAdminId, 'role_id' => $roleSuperId],
            ['user_id' => $adminId, 'role_id' => $roleAdminId],
        ]);

        // Create admin permissions
        $entitiesSuperAdmin = ['User'];
        // Create default permissions and allocate to admins
        $entities = ['Customer', 'CustomerUpload', 'HistoryCustomer', 'CustomerEmailOutdate', 'Bank'];
        $ops = ['viewany', 'create', 'update', 'delete', 'view'];

        foreach ($entitiesSuperAdmin as $entity) {
            foreach ($ops as $op) {
                $newPermId = DB::table('permissions')->insertGetId([
                    'name'         => strtolower($op) . '_' .strtolower($entity) ,
                ]);
                DB::table('permission_role')->insert([
                    ['permission_id' => $newPermId, 'role_id' => $roleSuperId],
                ]);
            }
        }

        foreach ($entities as $entity) {
            foreach ($ops as $op) {
                $newPermId = DB::table('permissions')->insertGetId([
                    'name'         => strtolower($op) . '_' .strtolower($entity) ,
                ]);
                DB::table('permission_role')->insert([
                    ['permission_id' => $newPermId, 'role_id' => $roleSuperId],
                    ['permission_id' => $newPermId, 'role_id' => $roleAdminId],
                ]);
            }
        }
    }
}
