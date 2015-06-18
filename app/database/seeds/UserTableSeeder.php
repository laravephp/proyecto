<?php


class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'first_name' => 'Ivan',
			'last_name'  => 'Galindo Díaz',
			'username'   => 'Ivan',
			'email'      => 'sergio.ivan.galindo.diaz@gmail.com',
			'password'   => 'sigd'
			//'password'   =>  Hash::make('admin')
			]);
		}

	}
