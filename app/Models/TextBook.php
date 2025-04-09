<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextBook extends Model
{
    use HasFactory;
    protected array $hiddenFields = ['created_at', 'updated_at', 'deleted_at'];
}
