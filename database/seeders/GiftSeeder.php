<?php

namespace Database\Seeders;

use App\Models\Gift;
use Illuminate\Database\Seeder;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gift::create([
            'wedding_id'        => 1,
            'name'              => 'Rumah Annisa',
            'address'           => 'Plered
            Jalan Pangkalan No.114
            Plered Purwakarta, Kab. Purwakarta
            Jawa Barat 41118
            ',
            'maps'              => '',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
