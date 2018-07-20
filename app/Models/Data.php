<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'datas';
    
    protected $fillable = ['id_team','foto_bukti','foto_utusan'];
    
    public function team()
    {
        return $this->belongsTo('App\Models\team','id_team');
    }
    
    public $timestamps = false;
}
