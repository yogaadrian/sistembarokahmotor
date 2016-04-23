<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = 'pesan';
    protected $primaryKey = 'id_pesan';
    public $timestamps = false; //tidak ada create_at dan update_at
    protected $connection = 'mysql';
}
