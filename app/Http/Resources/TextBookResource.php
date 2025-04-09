<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\BaseResource;

class TextBookResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    //Declaration of App\Http\Resources\TextBookResource::toArray(Illuminate\Http\Request $request): array must be compatible with App\Http\Resources\BaseResource::toArray($request): array
    // public function toArray(Request $request): array
    public function toArray($request): array
    {
        $data = parent::toArray($request);
        $data['text_book_classification_id'] = $this->text_book_classification_id;
        $data['level'] = $this->level;
        $data['cover'] = $this->cover;
        $data['title'] = $this->title;
        $data['message'] = $this->message;
        return $data;
    }
}