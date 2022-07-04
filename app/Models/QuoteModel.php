<?php

namespace App\Models;

use CodeIgniter\Model;

class QuoteModel extends Model
{
    protected $table = 'quote';
    protected $allowedFields = [
        'content'
    ];
    protected $returnType    = \App\Entities\Quote::class;
}