<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket')->insert([
            'id' => 1,
            'ket' => 'Semua',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('paket')->insert([
            'id' => 2,
            'ket' => 'Pendidikan Agama dan Budi Pekerti',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('paket')->insert([
            'id' => 3,
            'ket' => 'Bahasa Indonesia',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 4,
            'ket' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 5,
            'ket' => 'Matematika',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 6,
            'ket' => 'Bahasa Inggris',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 7,
            'ket' => 'Ilmu Pengetahuan Alam (IPA)',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 8,
            'ket' => 'Ilmu Pengetahuan Sosial (IPS)',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 9,
            'ket' => 'Seni Budaya',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
         DB::table('paket')->insert([
            'id' => 10,
            'ket' => 'Pedidikan Jasmani, Olaharaga, dan Kesehatan',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
         DB::table('paket')->insert([
            'id' => 11,
            'ket' => 'TIK',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
         DB::table('paket')->insert([
            'id' => 12,
            'ket' => 'Bahasa Jawa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
       
        DB::table('paket')->insert([
            'id' => 13,
            'ket' => "Bimbingan dan Konseling",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('paket')->insert([
            'id' => 14,
            'ket' => "Prakarya",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
