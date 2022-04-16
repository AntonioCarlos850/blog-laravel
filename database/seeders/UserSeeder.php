<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->email='teste@gmail.com';
        $admin->name= 'ADM';
        $admin->password= bcrypt('teste');
        $admin->save();
    }
}
