<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextBookClassification extends Model
{
    /**
     * Get all of the comments for the TextBookClassification
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function text_books()
    {
        return $this->hasMany(TextBook::class, 'text_book_classification_id', 'id');
    }
}
