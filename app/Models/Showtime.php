<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    protected $table="tbl_showtime";
    protected $primarykey="Id";
    public $timestamps=false;
}
