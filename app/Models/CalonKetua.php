<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonKetua extends Model
{
    use HasFactory;

    protected $table = 'tb_calon';
    protected $primaryKey = 'id_calon';
    public $timestamps = false;
}
