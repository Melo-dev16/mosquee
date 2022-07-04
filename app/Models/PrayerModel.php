<?php

namespace App\Models;

use CodeIgniter\Model;

class PrayerModel extends Model
{
    protected $table = 'prayer';
    protected $allowedFields = [
        'dayDate'
    ];
    protected $returnType    = \App\Entities\Prayer::class;
}