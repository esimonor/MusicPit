<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Oliver', 'Harry', 'George', 'Noah', 'Jack', 'Jacob', 'Leo', 'Oscar', 'Charlie', 'Muhammad'];
        $lastnames = ['Smith', 'Johnson', 'Williams', 'Jones', 'Brown', 'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor'];
        $instruments = ['guitar', 'drums', 'vocals', 'bass', 'saxophone'];
        $music = ['Blues', 'Jazz', 'Rock', 'Metal', 'Hip-Hop'];

    for ($i = 0; $i < 5; $i++) {
        DB::table('users')->insert([
            'age' => random_int(18, 99),
            'name' => $names[random_int(0, 9)],
            'email' => $lastnames[random_int(0, 9)].random_int(0, 99).'@email.com',
            'password' => bcrypt('andatza'),
            'instrument' => $instruments[random_int(0, 4)],
            'music_genre' => $music[random_int(0, 4)],
            'profile_photo_path' => '/images/icono'.random_int(1,4).'.png'
        ]);
    }
    }
}
