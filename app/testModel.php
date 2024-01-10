<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 


class testModel extends Model
{
    
    protected $table='test_data';
    use SoftDeletes;
    protected $fillable = [
        'name','description','created_by','updated_by'
    ];

    protected $dates = ['deleted_at'];

}
