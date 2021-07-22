<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailUlanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_ulangan')->insert([
            'id' => 1,
            'siswa_id' => 1,
            'guru_id' => 1,
            'mapel_id' => 4,
            'kelas_id' => 1,
            'tanggal_ulangan' => '2021-06-13',
            'nilai' => '80',
            'keterangan' => 'UH1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('detail_ulangan')->insert([
            'id' => 2,
            'siswa_id' => 1,
            'guru_id' => 1,
            'mapel_id' => 4,
            'kelas_id' => 1,
            'tanggal_ulangan' => '2021-06-13',
            'nilai' => '75',
            'keterangan' => 'UTS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('detail_ulangan')->insert([
            'id' => 3,
            'siswa_id' => 1,
            'guru_id' => 1,
            'mapel_id' => 4,
            'kelas_id' => 1,
            'tanggal_ulangan' => '2021-06-13',
            'nilai' => '95',
            'keterangan' => 'UAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('detail_ulangan')->insert([
            'id' => 4,
            'siswa_id' => 2,
            'guru_id' => 2,
            'mapel_id' => 2,
            'kelas_id' => 1,
            'tanggal_ulangan' => '2021-06-14',
            'nilai' => '60',
            'keterangan' => 'UH1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('detail_ulangan')->insert([
            'id' => 5,
            'siswa_id' => 2,
            'guru_id' => 2,
            'mapel_id' => 2,
            'kelas_id' => 1,
            'tanggal_ulangan' => '2021-06-18',
            'nilai' => '80',
            'keterangan' => 'UH2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('detail_ulangan')->insert([
            'id' => 6,
            'siswa_id' => 2,
            'guru_id' => 2,
            'mapel_id' => 2,
            'kelas_id' => 1,
            'tanggal_ulangan' => '2021-06-27',
            'nilai' => '75',
            'keterangan' => 'UAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
