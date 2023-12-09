<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'data_user';
    protected $primaryKey = 'id_user';
    protected $guarded = ['id_user'];
    public $timestamps = false;
}
