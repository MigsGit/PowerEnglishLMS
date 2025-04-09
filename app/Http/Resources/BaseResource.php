<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class BaseResource extends JsonResource
{
    /**
     * Define which fields to hide by default.
     *
     * @var array
     */
    // Define attributes to hide by default
    protected array $hiddenFields = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Transform the resource into an array.
     *
     * This automatically converts all Carbon dates into 'Y-m-d'
     * format and removes any fields specified in $this->hidden.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) : array
    {
        // Get all attributes from the resource.
        $data = parent::toArray($request);

        // Remove fields that should be hidden
        foreach ($this->hiddenFields as $field) {
            unset($data[$field]);
        }

        // Automatically format any Carbon dates
        foreach ($data as $key => $value) {
            if ($value instanceof Carbon) {
                $data[$key] = $value->format('Y-m-d');
            }
        }

        return $data;
    }
}
