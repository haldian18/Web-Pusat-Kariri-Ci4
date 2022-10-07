<?php

namespace App\Models;

use CodeIgniter\Model;

class Struktur extends Model
{
    protected $table = 'struktur';
    protected $primarykey = 'id';
    protected $allowedFields = [
        'img',
        'jabatan',
        'nama',
    ];
}
