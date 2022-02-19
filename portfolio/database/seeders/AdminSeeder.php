<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'nane' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin12345++')
        ];
        Admin::create($admin);
    }
}
