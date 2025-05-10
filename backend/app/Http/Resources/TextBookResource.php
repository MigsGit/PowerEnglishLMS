<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Resources\BaseResource;

class TextBookResource extends BaseResource
{
    /**
     * Key: original column name, Value: alias for output
     * Override this in child resources as needed.
     */

    protected array $aliases = [
        'text_book_classification_id' => 'tb_classification_fkid',
        'cover' => 'tb_cover_image',
        'message' => 'tb_message',
        'title' => 'tb_title',
        'level' => 'tb_level',


    ];
    protected array $hidden_fields = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {

        $data = parent::toArray($request);
        // $data['created_at'] = Carbon::parse($this->created_at)->format('Y-m-d'); /date format
        return $data;
    }
}
