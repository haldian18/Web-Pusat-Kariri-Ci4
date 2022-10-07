<?php

namespace App\Models;

use CodeIgniter\Model;

class Program extends Model
{
    protected $table = 'program';
    protected $primarykey = 'id';
    protected $allowedFields = [
        'program',
    ];
}
