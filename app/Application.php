<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{

    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 'applications';
    
}
