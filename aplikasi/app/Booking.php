<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';
    public $timestamps = false; //tidak ada create_at dan update_at
    protected $connection = 'mysql';
}
