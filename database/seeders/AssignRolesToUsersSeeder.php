<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AssignRolesToUsersSeeder extends Seeder
{
    public function run()
    {
        // Fetch specific users
        $adminUser = User::find(1); // Assuming user with ID 1 is the admin
        $salesManagerUser = User::find(2); // Assuming user with ID 2 is sales manager
        $purchaseManagerUser = User::find(3); // Assuming user with ID 3 is purchase manager

        // Assign roles
        $adminUser->assignRole('admin');
        $salesManagerUser->assignRole('sales_manager');
        $purchaseManagerUser->assignRole('purchase_manager');
    }
}