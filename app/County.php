<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    public $table = 'tbl_county';
    public $timestamps = false;
    
    protected $fillable = [
        'name', 'satus'
    ];
}
