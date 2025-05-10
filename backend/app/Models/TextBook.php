<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextBook extends Model
{
    protected array $hidden_fields = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Get the user associated with the TextBook
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function text_book_classification()
    {
        return $this->hasOne(TextBookClassification::class, 'id', 'text_book_classification_id');
    }
}
