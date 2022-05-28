<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Polat',
            'email' => 'polat@gmail.com',
            'utype'=>'Super_admin',
            'email_verified_at' => now(),
            'password' => '$2y$10$ERT7yOp93HRprcxRfpjfa.BxHJYYkuZkzE8NPvbPD.QacwsMYtFEy', // password
            'remember_token' => Str::random(10),
        ]);

        User::factory(5)->create();
    }
}
