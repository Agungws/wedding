<?php

namespace Database\Seeders;

use App\Models\Bride;
use Illuminate\Database\Seeder;

class BrideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bride::create([
            'wedding_id'        => 1,
            'name'              => 'Annisa Rachmawati',
            'child'             => 'Putri Pertama dari',
            'name_father'       => 'Bpk Nama Ayah',
            'name_mother'       => 'Ibu Nama Ibu',
            'instagram'         => 'https://www.instagram.com/username/',
            'bank_id'           => 2,
            'acc_name'          => 'Annisa Rachmawati',
            'acc_number'        => 396962636,
            'gender'            => 'Female',
            'photo'             => 'annisa.jpg',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Bride::create([
            'wedding_id'        => 1,
            'name'              => 'Agung Wicaksono Surasno',
            'child'             => 'Putra Kedua dari',
            'name_father'       => 'Bpk Tri Yuni Surasno',
            'name_mother'       => 'Ibu Nina Andriana',
            'instagram'         => 'https://www.instagram.com/agungwicaksonos/',
            'bank_id'           => 1,
            'acc_name'          => 'Agung Wicaksono Surasno',
            'acc_number'        => 000000000,
            'gender'            => 'Male',
            'photo'             => 'agung.jpg',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
