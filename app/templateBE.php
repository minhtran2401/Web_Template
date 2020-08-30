<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class templateBE extends Model {
    protected $table='template';
    protected $primaryKey='id_temp';
    protected $dates = ['Ngay']; //Khai báo các field kiểu ngày
    protected $fillable = [
        'id_temp',
        'name',
        'image',
        'size',
        'path',
        'luotai',
        'luotxem',
        'description',
        'id_type',
        'tags',
        'Anhien',
    ];
}

