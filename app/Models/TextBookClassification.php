<?php

namespace App\Models;

use App\Models\TextBook;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TextBookClassification extends Model
{
    protected array $hidden_fields = ['created_at', 'updated_at', 'deleted_at'];

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
