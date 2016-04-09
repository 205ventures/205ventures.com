<?php

class UsersTableSeeder extends Seeder {
	public function run() {
		User::create(
			array(
			  'email' => 'ccsiszer@gmail.com', 
			  'password' => Hash::make('secret'),
			  'first_name' => 'Carlos',
			  'last_name' => 'Csiszer',
			  'phone_number' => '(111) 111-1111'
		    )
		);
		User::create(
		    array(
		      'email' => 'ygroeneveldt@gmail.com',
		      'password' => Hash::make('secret'),
		      'first_name' => 'Yvon',
		      'last_name' => 'Groeneveldt',
		      'phone_number' => '(111) 111-1111'
		    )
		);
		User::create(
		    array(
		      'email' => 'adanolivos@gmail.com',
		      'password' => Hash::make('secret'),
		      'first_name' => 'Adan',
		      'last_name' => 'Olivos',
		      'phone_number' => '(111) 111-1111'
		    )
		);
		User::create(
		    array(
		      'email' => 'witcyr222@gmail.com',
		      'password' => Hash::make('secret'),
		      'first_name' => 'Witold',
		      'last_name' => 'Cyrek',
		      'phone_number' => '(111) 111-1111'
		    )
		);
		User::create(
		    array(
		      'email' => 'robimoller@gmail.com',
		      'password' => Hash::make('secret'),
		      'first_name' => 'Roberto',
		      'last_name' => 'Moller',
		      'phone_number' => '(111) 111-1111'
		    )
		);
		User::create(
		    array(
		      'email' => 'rbahian@gmail.com',
		      'password' => Hash::make('secret'),
		      'first_name' => 'Roy',
		      'last_name' => 'Bahian',
		      'phone_number' => '(111) 111-1111'
		    )
		);
	}
}
