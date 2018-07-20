<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $table = 'supervisors';

    protected $fillable = ['id_team','nama_pembimbing','nip','foto_ktp','foto_formal','nomor_hp','email'];

    public function team()
    {
        return $this->belongsTo('App\Models\team','id_team');
    }
    
    public $timestamps = false;
}
