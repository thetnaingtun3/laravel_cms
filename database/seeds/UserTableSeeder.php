<?php

use App\Profile;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ThatNaing',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin12'),
            'is_admin' => '1'
        ]);
        Profile::create([
            'user_id'=>'1',
            'profile_image'=>'default.png',
            'about'=>'nullOrEmptyStringnullOrEmptyStringnullOrEmptyStringnullOrEmptyStringnullOrEmptyStringnullOrEmptyString',
            'facebook_link'=>'www.facebook.com',
            'youtube_link'=>'www.youtube.com'
        ]);
    }
}
