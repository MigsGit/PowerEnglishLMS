<?php
namespace App\Services;
use Helpers;

use Illuminate\Support\Facades\DB;
use App\Interfaces\CommonInterface;


class CommonService implements CommonInterface
{
    public function getPagesById($model,$api_link){
        date_default_timezone_set('Asia/Manila');
        try {
            DB::beginTransaction();
            $previous_pages_table = $model::where('id',$api_link)->get(['views_count']);
            $total_views_count =   $previous_pages_table[0]->views_count +1 ;

            $model::where('id',$api_link)
            ->update(['views_count'=>$total_views_count]);

            $latest_pages_table = $model::where('id',$api_link)->get();
            DB::commit();
            return response()->json(['pages_table'=>$latest_pages_table]);
        } catch (\Throwable $th) {
            throw $th;
            DB::rollback();
        }
    }
}
