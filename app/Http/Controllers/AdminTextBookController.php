<?php

namespace App\Http\Controllers;

use App\Models\TextBook;
use Illuminate\Http\Request;
use App\Models\TextBookClassification;
use App\Http\Resources\TextBookResource;
use Yajra\DataTables\Facades\DataTables;

class AdminTextBookController extends Controller
{
   public function getTextBooksTable(Request $request){
       try {
            return $text_books =  TextBookClassification::with('text_books')->get();
            $text_books_collection = TextBookResource::collection($text_books)
            ->resolve(); // Convert the resource to a plain collection (array) before passing to DataTabless
            // Yajra DataTables bypasses the resource transformation because it operates on the raw model or query builder
            return DataTables::of($text_books_collection)
            ->addColumn('add_col_view', function ($row){
                $result = '';
                $result .= '<center>';
                $result .= '<button type="button" class="btn btn-outline-primary">View</button>';
                $result .= '</center>';
                return $result;
            })
            ->addColumn('add_col_edit', function ($row){
                $result = '';
                $result .= '<center>';
                $result .= '<button type="button" class="btn btn-outline-secondary">Edit</button>';
                $result .= '</center>';
                return $result;
            })
            ->rawColumns(['add_col_view','add_col_edit'])
            ->make(true);
       } catch (Exception $e) {
           return response()->json(['is_success' => 'false', 'exceptionError' => $e->getMessage()]);
       }
   }
}
