<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    
    protected $fillable = ['id_team','nama_lengkap','nomor_hp','email','foto_kartupelajar','foto_formal','peran'];
    
    public function team()
    {
        return $this->belongsTo('App\Models\team','id_team');
    }
    
    public $timestamps = false;
}
