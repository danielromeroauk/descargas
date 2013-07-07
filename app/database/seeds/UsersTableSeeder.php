<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('users')->delete();

        $users = array(
        	array(
        		'email' => 'muydirecto@gmail.com',
        		'username' => 'muydirecto',
        		'password' => Hash::make('muydirecto'),
                'role' => 'customer'
        		),
        	array(
        		'email' => 'myalienvirus@gmail.com',
        		'username' => 'myalienvirus',
        		'password' => Hash::make('myalienvirus'),
                'role' => 'customer'
        		),
        	array(
        		'email' => 'ariamzul16@hotmail.com',
        		'username' => 'ariamzul16',
        		'password' => Hash::make('ariamzul16'),
                'role' => 'customer'
        		),
            array(
                'email' => 'galeonsoft@gmail.com',
                'username' => 'galeonsoft',
                'password' => Hash::make('galeonsoft'),
                'role' => 'administrator'
                )
        );

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }

}