<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenggunaPemira extends Model
{
    use HasFactory;

    protected $table = 'tb_pengguna';
    protected $primaryKey = 'id_pengguna';
    public $timestamps = false;
}
