<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mapel')->insert([
            'id' => 1,
            'nama_mapel' => '-',
            'paket_id' =>1,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('mapel')->insert([
            'id' => 2,
            'nama_mapel' => 'Pendidikan Agama dan Budi Pekerti',
            'paket_id' =>2,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('mapel')->insert([
            'id' => 3,
            'nama_mapel' => 'Bahasa Indonesia',
            'paket_id' =>3,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 4,
            'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'paket_id' =>4,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 5,
            'nama_mapel' => 'Matematika',
            'paket_id' =>5,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 6,
            'nama_mapel' => 'Bahasa Inggris',
            'paket_id' =>6,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 7,
            'nama_mapel' => 'Ilmu Pengetahuan Alam (IPA)',
            'paket_id' =>7,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 8,
            'nama_mapel' => 'Ilmu Pengetahuan Sosial (IPS)',
            'paket_id' =>8,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 9,
            'nama_mapel' => 'Seni Budaya',
            'paket_id' =>9,
            'kelompok' => 'B',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
         DB::table('mapel')->insert([
            'id' => 10,
            'nama_mapel' => 'Pedidikan Jasmani, Olaharaga, dan Kesehatan',
            'paket_id' =>10,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
         DB::table('mapel')->insert([
            'id' => 11,
            'nama_mapel' => 'TIK',
            'paket_id' =>11,
            'kelompok' => 'C',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
         DB::table('mapel')->insert([
            'id' => 12,
            'nama_mapel' => 'Bahasa Jawa',
            'paket_id' =>12,
            'kelompok' => 'C',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
       
        DB::table('mapel')->insert([
            'id' => 13,
            'nama_mapel' => "Bimbingan dan Konseling",
            'paket_id' =>13,
            'kelompok' => 'C',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('mapel')->insert([
            'id' => 14,
            'nama_mapel' => "Prakarya",
            'paket_id' =>14,
            'kelompok' => 'C',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
