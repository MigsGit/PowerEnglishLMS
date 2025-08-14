<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TextBookClassificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $text_books;
    public function __construct($text_books)
    {
        $this->text_books = $text_books;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
            return $text_books_collection = TextBookClassificationResource::collection($this->text_books);

    }
}
