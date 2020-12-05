<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        //
        /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
        $user = new User();
        $user->name = 'Julio';
        $user->last_name = 'Iquierdo Mejia';
        $user->password = 'Julio Iquierdo Mejia';
        $user->email = 'julio@gmail.com';
        $user->code = 'LYduZAuQj9';
        $user->celular = '998913140';
        $user->dni = '06813928';
        $user->save();
        

    }
}
