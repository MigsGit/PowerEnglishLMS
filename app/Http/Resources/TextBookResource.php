<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\BaseResource;

class TextBookResource extends BaseResource
{
    protected array $aliases = [
        'text_book_classification_id' => 'tb_classification_fkid',
        'cover' => 'tb_cover_image',
        'message' => 'tb_message',
        'title' => 'tb_title',
        'level' => 'tb_level',


    ];
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
        return $data;

        // NOTE: For 1 by 1 assigning alias value
        // $data['pkid'] = $this->id;
        // $data['text_book_classification_fkid'] = $this->text_book_classification_id;
        // $data['level'] = $this->level;
        // $data['cover'] = $this->cover;
        // $data['title'] = $this->title;
        // $data['message'] = $this->message;

    }
}
