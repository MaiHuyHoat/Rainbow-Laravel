<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $table="tbl_cinema";
    protected $primaryKey='Id';
    public $timestamps=false;
    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'tbl_RoomCinema', 'Cinema_Id', 'Room_Id')
            ->withPivot('Status');
    }

    public function promotions()
    {
        return $this->belongsToMany(Promotion::class, 'tbl_PromotionCinema', 'Cinema_Id', 'Promotion_Id');
    }

    public function showtimes()
    {
        return $this->hasMany(Showtime::class, 'Cinema_Id');
    }
}
