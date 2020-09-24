<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggotas';


    protected $guarded = ['id'];

    public function Jabatan()
    {
        return $this->belongsTo(\App\Models\Jabatan::class, 'jabatan_id', 'id');
    }
}
