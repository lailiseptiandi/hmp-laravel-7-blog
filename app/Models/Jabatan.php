<?php

namespace App\Models;

use App\Http\Resources\Pengurus;
use App\Models\Anggota;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatans';

    protected $guarded = ['id'];


    public function Anggota()
    {
        return $this->hasMany(\App\Models\Anggota::class, 'jabatan_id', 'id');
    }

    public function Pengurus()
    {
        return $this->hasMany(\App\Models\Pengurus::class, 'jabatans_id', 'id');
    }
}
