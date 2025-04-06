<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Create or get employee role
        $employeeRole = Role::firstOrCreate(['name' => 'employee']);

        // Get the actual permissions that exist in the database
        $permissions = Permission::whereIn('name', [
            'page_Profile',
            'view_employee',
            'update_employee',
        ])->get();

        // Grant permissions
        $employeeRole->syncPermissions($permissions);
    }
}
