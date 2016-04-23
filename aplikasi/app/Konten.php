<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    protected $table = 'konten';
    protected $primaryKey = 'id_konten';
    public $timestamps = false; //tidak ada create_at dan update_at
    protected $connection = 'mysql';
}
