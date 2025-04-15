<?php

namespace App\Http\Resources;

use App\Http\Resources\TextBookResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\BaseResource;


class TextBookClassificationResource extends BaseResource
{
    /**
     * Key: original column name, Value: alias for output
     * Override this in child resources as needed.
     */

     protected array $aliases = [
        'id' => 'tbc_pkid',
        'title' => 'tbc_title',
        'remarks' => 'tbc_remarks',
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
         // Add nested hasMany with aliasing handled by its own resource
        $data['text_books'] = TextBookResource::collection($this->whenLoaded('text_books'));
        return $data;
    }
}
