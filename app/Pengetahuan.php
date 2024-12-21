<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengetahuan extends Model
{
    protected $table = 'pengetahuan';
    protected $fillable = ['id_penyakit','id_gejala','nilai_mb','nilai_md','nilai_cf'];

public function penyakit()
{
    return $this->belongsTo('App\Penyakit','id_penyakit');
}

public function gejala()
{
    return $this->belongsTo('App\Gejala','id_gejala');
}
}
