<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\BaseResource;

class TextBookResource extends BaseResource
{
    /**
     * Key: original column name, Value: alias for output
     * Override this in child resources as needed.
     */

    protected array $aliases = [
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
        $data['tb_classification_fkid'] = encrypt($this->text_book_classification_id);
        $data['tb_id'] = encrypt($this->tb_id);
        $data['created_at'] = Carbon::parse($this->created_at)->format('Y-m-d'); //date format
        return $data;
    }
}
