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
        // 'text_book_classification_id' => 'tb_classification_fkid',
        'cover' => 'row_cover_image',
        'message' => 'row_message',
        'title' => 'row_title',
        'level' => 'row_level',


    ];
    protected array $hidden_fields = ['id','created_at', 'updated_at', 'deleted_at'];

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {

        $data = parent::toArray($request);

        $data['row_pkid'] =  encrypt($this->id);
        $data['row_classification_fkid'] =  encrypt($this->text_book_classification_id);
        // $data['created_at'] = Carbon::parse($this->created_at)->format('Y-m-d'); /date format
        return $data;
    }
}
