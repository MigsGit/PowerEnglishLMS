<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WritingCollectionBulletinResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'description' => $this->description,
            'message' => $this->message,
            'author' => $this->author,
            'isRelease' => $this->is_release,
            'status' => $this->status,
            'viewsCount' => $this->views_count,
            'registeredDate' => $this->is_release,
        ];
    }
}
