<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailUlangan extends Model
{
    protected $fillable = ['siswa_id', 'guru_id', 'mapel_id', 'kelas_id', 'tanggal_ulangan', 'nilai', 'keterangan'];

    protected $table = 'detail_ulangan';
}
