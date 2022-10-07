<?php

namespace App\Models;

use CodeIgniter\Model;

class Home1 extends Model
{
    protected $table = 'home1';
    protected $primarykey = 'id';
    protected $allowedFields = [
        'img',
        'judul',
        'penjelasan',
        'tipe',
    ];
}
