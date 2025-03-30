<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use DataTables;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Announcement;
use App\Models\WritingCollectionBulletin;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function getAnnouncementTable(){
        date_default_timezone_set('Asia/Manila');
        try {
            $announement_table = Announcement::get();
            return DataTables::of($announement_table)
            ->addColumn('rawNumberList', function ($row) use (&$count) {//& Increments and keeps track across all rows
                $result = '';
                return $result .= ++$count;
            })
            ->addColumn('rawAnnouncementList', function($row){
                $api_link = encrypt($row->id);
                $result = "";
                $result .= "<center>";
                $result .= "<a href='#' id='btnAnnoucementPageLink' announcement-api-link='$api_link' class='link-primary'> $row->description </a>";
                $result .= "</center>";
                return $result;
            })
            ->addColumn('created_at', function ($row){
                $result = '';
                return $result .= Carbon::parse($row->created_at)->format('Y-m-d');
            })
            ->rawColumns(['rawAnnouncementList','getNumberList'])
            ->make(true);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function getWritingCollectionBulletin(){
        date_default_timezone_set('Asia/Manila');
        try {

            $writing_collection_bulletin_table = WritingCollectionBulletin::get();
            return DataTables::of($writing_collection_bulletin_table)
            ->addColumn('rawNumberList', function ($row) use (&$count) {//& Increments and keeps track across all rows
                $result = '';
                return $result .= ++$count;
            })
            ->addColumn('rawPagesList', function($row){
                $api_link = encrypt($row->id);
                $result = "";
                $result .= "<center>";
                $result .= "<a href='#' id='btnAnnoucementPageLink' api-link='$api_link' class='link-primary'> $row->description </a>";
                $result .= "</center>";
                return $result;
            })
            ->addColumn('rawIsRelease', function($row){
                switch ($row->is_release) {
                    case 'true':
                        $icon = "<i class='fa-solid fa-lock'></i>";
                        break;
                    case 'false':
                        $icon = "<i class='fa-solid fa-unlock-keyhole'></i>";
                        break;
                    default:
                        $icon = "";
                        break;
                }
                $result = "";
                $result .= "<center>";
                $result .= $icon;
                $result .= "</center>";
                return $result;
            })
            ->addColumn('created_at', function ($row){
                $result = '';
                return $result .= Carbon::parse($row->created_at)->format('Y-m-d');
            })
            ->rawColumns(['rawPagesList','getNumberList','rawIsRelease'])
            ->make(true);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function getPagesById(Request $request){
        date_default_timezone_set('Asia/Manila');
        try {
            $api_link = decrypt($request->apiLink);
            return CommonService::getPagesById(Announcement::class,$api_link);
        } catch (\Throwable $th) {
            throw $th;
            DB::rollback();
        }
    }
    public function getBulletinPagesById(Request $request){
        date_default_timezone_set('Asia/Manila');
        try {
            $api_link = decrypt($request->apiLink);
            return CommonService::getPagesById(WritingCollectionBulletin::class,$api_link);
        } catch (\Throwable $th) {
            throw $th;
            DB::rollback();
        }
    }
}
class CommonService{
    public static function getPagesById($model,$api_link){
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
