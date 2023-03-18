<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class votebpm extends Model
{
    use HasFactory;

    protected $table = 'tb_vote';
    protected $primaryKey = 'id_vote';
    public $timestamps = false;
}
