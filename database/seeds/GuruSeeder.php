<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket')->insert([
            'id' => 6,
            'id_card' => '00001',
            'nip' => '101011190',
            'nama_guru' => 'Pujianto',
            'mapel_id' => 1,
            'kode' => 'B01',
            'jk' => 'L',
            'telp' => '0890-3301-8887',
            'tmp_lahir' => 'Semarang',
            'tgl_lahir' => '1994-12-20',
            'foto' => "null",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
