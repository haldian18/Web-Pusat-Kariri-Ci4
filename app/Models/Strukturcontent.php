<?php

namespace App\Models;

use CodeIgniter\Model;

class Strukturcontent extends Model
{
    protected $table = 'strukturcontent';
    protected $primarykey = 'id';
    protected $allowedFields = [
        'nama_nip',
        'pangkat_golongan',
        'uraian',
    ];
}
