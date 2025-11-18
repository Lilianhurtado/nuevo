<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //crear usuario de prueba cada que se ejecuten migraciones
        User::factory()->create([
            'name' => 'Lilian hurtado',
            'email' => 'lilohurta@gmail.com',
            'password' => bcrypt('12345678'),
            'id_number'=> '1234567899',
            'phone'=> '9991252492',
            'address' => 'calle 43 num 202-4',
        ]) ->assignRole('Doctor');
    }
}
