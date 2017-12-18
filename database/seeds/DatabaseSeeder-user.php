<?php

use Illuminate\Database\Seeder;
use App\users;

class DatabaseSeeder extends Seeder
{
private $arrayusers = array(
array( 
		'name' => 'Cory',
		'email' => 'cory@cory.com',
		'password' => 'cory'
	),

array( 
		'name' => 'Coraima',
		'email' => 'cory@coraima.com',
		'password' => 'coraima'
	),
);

private function  seedUsers() {
	DB::table('users')->delete();
	foreach( $this->arrayusers as $users ) {
          $u = new Users;
          $u->name = $users['name'];
          $u->email = $users['email'];
          $u->password = bcrypt($users['password']);
          $u->save();
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	self::seedUsers();
	  	$this->command->info('Tabla users inicializada con datos!');

        // $this->call(UsersTableSeeder::class);
    }
}