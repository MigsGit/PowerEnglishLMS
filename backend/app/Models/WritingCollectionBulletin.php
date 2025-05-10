<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WritingCollectionBulletin extends Model
{
    protected $hidden = [
        'id',
        'updated_at',
        'deleted_at',
    ];
}
