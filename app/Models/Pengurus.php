<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $table = 'penguruss';


    protected $guarded = ['id'];

    public function Jabat()
    {
        return $this->belongsTo(\App\Models\Jabatan::class, 'jabatans_id', 'id');
    }
}
