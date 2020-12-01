<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
            'name'  =>'Jesus',
            'last_name' =>'Bueno',
            'email'  =>'jesududub@gmail.com',
            'user'  =>'jesududu',
            'password'  => \Hash::make('123456'),
            'type'  =>'admin',
            'active'  =>'1',
            'address'  =>'C/Azucena',
            'created_at'  =>new DateTime,
            'updated_at'  =>new DateTime
            ],
            [
                'name'  =>'Antonio',
                'last_name' =>'Luque',
                'email'  =>'parlon@gmail.com',
                'user'  =>'byParlon',
                'password'  =>\Hash::make('123456'),
                'type'  =>'user',
                'active'  =>'1',
                'address'  =>'C/Flores',
                'created_at'  =>new DateTime,
                'updated_at'  =>new DateTime
            ],
        );

User::insert($data);

    }
}
