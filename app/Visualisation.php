<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visualisation extends Model
{
    protected $table="document";
    protected $fillabel=['id','DocumentName','Description','image'];
}
