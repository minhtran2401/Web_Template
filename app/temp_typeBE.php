<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class temp_typeBE extends Model {
    protected $table='template_type';
    protected $primaryKey='id_type';
    protected $fillable = [
        'id_type',
        'name_type',
        'Anhien',     
    ];
}

