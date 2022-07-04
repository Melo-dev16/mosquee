<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'event';
    protected $allowedFields = [
        'image'
    ];
    protected $returnType    = \App\Entities\Event::class;
}