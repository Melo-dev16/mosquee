<?php

namespace App\Models;

use CodeIgniter\Model;

class PrayerTypeModel extends Model
{
    protected $table = 'prayertype';
    protected $allowedFields = [
        'name'
    ];
    protected $returnType    = \App\Entities\PrayerType::class;
}