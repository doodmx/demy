<?php

use App\Models\User\User;
use App\Models\User\Profile;
use Illuminate\Database\Seeder;
use App\Interfaces\Helpers\EncryptionInterface;
use Illuminate\Support\Facades\Artisan;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(EncryptionInterface $encryption)
    {


        if (env('APP_ENV') === 'production') {

            $user = factory(User::class)->create([
                'email'    => 'info@demy.mx',
                'password' => $encryption->encryptString('Demy20013_34'),
            ]);
            $user->profile()->save(factory(Profile::class)->make());
            $user->save();
            $user->assignRole('Super Admin');

        } else {

            factory(User::class, 5)->create()->each(function ($user){

                $user->profile()->save(factory(Profile::class)->make());

                if ($user->id > 1) {
                    $user->assignRole('Partner');
                    $user->save();
                } else {
                    $user->email = 'admin@mail.com';
                    $user->assignRole('Super Admin');
                    $user->save();
                }


            });

        }
    }
}
