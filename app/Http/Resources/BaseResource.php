<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class BaseResource extends JsonResource
{
    /**
     * Key: original column name, Value: alias for output
     * Override this in child resources as needed.
     */
    protected array $aliases = [];
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
        // // Get all attributes from the resource.
        $arr_original_fields = parent::toArray($request);
        $arr_data = [];

        // Remove fields that should be hidden
        // foreach ($this->hiddenFields as $field) {
        //     unset($arrData[$field]);
        // }
        foreach ($arr_original_fields as $key => $value) {
            // Remove fields that should be hidden
            if (in_array($key, $this->hiddenFields)) {
                continue;
            }

            // Automatically format any Carbon dates
            if ($value instanceof Carbon) {
                $value = $value->format('Y-m-d');
            }


            // Use alias if defined
            $alias = $this->aliases[$key] ?? $key;
            $arr_data[$alias] = $value;
        }
        return $arr_data;
    }
}
