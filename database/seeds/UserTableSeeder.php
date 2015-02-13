<?php

use Illuminate\Database\Seeder;
use Miniblog\User;

class UserTableSeeder extends Seeder{

    public function run()
    {
        DB::table('users')->delete();

        User::create(array( 
                            'id' => '1',
        					'name'=>'drago',
        					'email'=>'test@test.com',
                            'password'=>'$2y$10$M8TzuzLZgq7hdilF788BHe1OwToRQpixU98upt3XHxd0r50ANsB5K'
                        ));
    }

}
