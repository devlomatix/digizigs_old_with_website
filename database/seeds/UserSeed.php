<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Profile;
use Illuminate\Support\Str;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $token = Str::random(80);
        $user = User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'api_token' => hash('sha256', Str::random(60)),
                'verify_token' => Str::random(60),
            ]
        );
        $profile = Profile::create(
            [
                'user_id' => $user->id,
            ]
        );
        $user->assignRole('superadmin');

        $faker = Faker\Factory::create();

      	for($i=0; $i < 4; $i++){


      		$user = User::create([
      			   'name' => $name = $faker->name,
      			   'email' => $faker->email,
      			   'password' => bcrypt('password'),
               'api_token' => hash('sha256',Str::random(60)),
               'verify_token' => Str::random(60),
      		]);

          $profile = Profile::create(
              [
                  'user_id' => $user->id,
              ]
          );


      	}
    }
}
