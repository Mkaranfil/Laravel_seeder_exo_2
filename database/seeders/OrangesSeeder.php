<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oranges')->insert(
            [
                [
                    'nom_company'=> 'Karanfilos',
                    'rue'=> 'Rue des enfants',
                    'numero_commune'=> 1082,
                    'numero_porte'=> 152,
                    'nom_contact'=> 'Karanfil',
                    'prenom_contact'=> 'Mustafa',
                    'phone'=> '0488200446',
                    'email'=> 'saletype@live.be',
                    'photo'=> 'https://i.pinimg.com/564x/44/4a/ea/444aea7fae31b4e20d124d137b8108a3.jpg',

                ]

            ]
        );
    }
}
