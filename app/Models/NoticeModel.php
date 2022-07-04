<?php

namespace App\Models;

use CodeIgniter\Model;

class NoticeModel extends Model
{
    protected $table = 'notice';
    protected $allowedFields = [
        'content'
    ];
    protected $returnType    = \App\Entities\Notice::class;
}