<?php

namespace App\Http\Controllers;

use App\Models\TextBook;
use Illuminate\Http\Request;
use App\Http\Resources\TextBookResource;

class AdminTextBookController extends Controller
{
   public function getTextBooksTable(Request $request){
       try {
            $text_books =  TextBook::get();
            return $text_books_collection = TextBookResource::collection($text_books);
           return response()->json(['is_success' => 'true']);
       } catch (Exception $e) {
           return response()->json(['is_success' => 'false', 'exceptionError' => $e->getMessage()]);
       }
   }
}
