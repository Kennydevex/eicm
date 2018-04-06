<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('users')->delete();
    User::create(array(
      'username' => 'Kenny.Teste',
      'password' => Hash::make('88008800'),
      'status'    => '1',
      'folk_id'    => 1,
    ));
  }
}
