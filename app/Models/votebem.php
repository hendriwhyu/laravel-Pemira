<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class votebem extends Model
{
    use HasFactory;

    protected $table = 'tb_votebem';
    protected $primaryKey = 'id_vote';
    public $timestamps = false;
}
