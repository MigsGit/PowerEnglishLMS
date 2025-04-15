<?php

namespace App\Http\Controllers;

use App\Models\TextBook;
use Illuminate\Http\Request;
use App\Models\TextBookClassification;
use App\Http\Resources\TextBookResource;
use App\Http\Resources\TextBookClassificationResource;

class AdminTextBookController extends Controller
{
   public function getTextBooksTable(Request $request){
       try {
            // $text_books =  TextBook::with('text_book_classification')->get();
            // return $text_books_collection = TextBookResource::collection($text_books);
            $text_books =  TextBookClassification::with('text_books')->get();
            return $text_books_collection = TextBookClassificationResource::collection($text_books);
            return response()->json(['is_success' => 'true']);
       } catch (Exception $e) {
           return response()->json(['is_success' => 'false', 'exceptionError' => $e->getMessage()]);
       }
   }
}
