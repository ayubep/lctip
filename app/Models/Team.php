<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    protected $fillable = ['username','password','nama_team',
                           'nama_sekolah','alamat_sekolah','email_sekolah',
                           'telepon_sekolah','regional','status'];

    public function supervisors()
    {
        return $this->hasMany('App\Models\Supervisor','id_team','id');
    }
    public function members()
    {
        return $this->hasMany('App\Models\Member','id_team','id');
    }
    public function datas()
    {
        return $this->hasMany('App\Models\Data','id_team','id');
    }

    public $timestamps = false;
}
