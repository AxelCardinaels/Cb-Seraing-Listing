<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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
      DB::table('user')->delete();
      $user = User::create([
          'email' => 'axel.cardinaels@gmail.com',
          'password' => Hash::make('secret'),
      ]);
    }
}
