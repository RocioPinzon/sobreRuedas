<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create([
            'name'=>'rocio',
            'email'=>'pinzonbayonr@gmail.com',
            'email_verified_At'=>now(),
            'password'=> Hash::make('rocio123456'),
        ]);

        $usuario->assignRole('admin', 'admin');
        User::factory(9)->create();
    }

}
