<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create Permissions
        Permission::create(['name' => 'manage sales']);
        Permission::create(['name' => 'manage purchases']);

        // Create Roles and assign existing permissions
        $admin = Role::create(['name' => 'admin']);
        $salesManager = Role::create(['name' => 'sales_manager']);
        $purchaseManager = Role::create(['name' => 'purchase_manager']);

        // Assign permissions to roles
        $admin->givePermissionTo(['manage sales', 'manage purchases']);
        $salesManager->givePermissionTo('manage sales');
        $purchaseManager->givePermissionTo('manage purchases');
    }
}