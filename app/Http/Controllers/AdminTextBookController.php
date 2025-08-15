<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\TextBook;
use Illuminate\Http\Request;
use App\Interfaces\ResourceInterface;
use App\Models\TextBookClassification;
use App\Jobs\TextBookClassificationJob;
use App\Http\Resources\TextBookResource;
use App\Http\Resources\TextBookClassificationResource;

class AdminTextBookController extends Controller
{
    protected $resource_interface;
    public function __contruct (ResourceInterface $resource_interface){
        // text_book_classifications_id
        $this->resource_interface = $resource_interface;
    }
   public function getTextBooksTable(Request $request){
       try {


            $text_books =  TextBook::get();
            $text_books_collection = TextBookResource::collection($text_books)->resolve(); //toArray
            return DataTables::of(collect($text_books_collection))->make(true);
       } catch (Exception $e) {
           return response()->json(['is_success' => 'false', 'exceptionError' => $e->getMessage()]);
       }
   }
   public function index(Request $request){
            return 'true' ;
            dispatch(new TextBookClassificationJob($text_books));
       try {
           date_default_timezone_set('Asia/Manila');
           DB::beginTransaction();
           DB::commit();
           return response()->json(['is_success' => 'true']);
       } catch (Exception $e) {
           DB::rollback();
           throw $e;
       }
   }
   public function getTextBooksClassification(Request $request){
       try {
            $text_books_classification = TextBookClassification::get();
            $textBookClassificationCollection = TextBookClassificationResource::collection($text_books_classification);
           return response()->json(['is_success' => 'true', 'textBookClassificationCollection'=>$textBookClassificationCollection]);
       } catch (Exception $e) {
           throw $e;
       }
   }
}
