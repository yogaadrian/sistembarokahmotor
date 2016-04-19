

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Yoga Adrian',
        'email'    => 'yoga@a.a',
        'password' => Hash::make('yogaadrian'),
    ));
}

}