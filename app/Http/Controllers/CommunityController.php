<?php
namespace App\Http\Controllers;
use DataTables;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Interfaces\CommonInterface;
use Illuminate\Support\Facades\Log;
use App\Models\WritingCollectionBulletin;
use App\Http\Resources\AnnouncementResource;
use App\Http\Resources\WritingCollectionBulletinResource;

class CommunityController extends Controller
{
    protected $common_interface;
    public function __construct(
        CommonInterface $common_interface
    ) {
        $this->common_interface = $common_interface;
    }

    public function getAnnouncementTable(){
        date_default_timezone_set('Asia/Manila');
        try {
            $announement_table = Announcement::get([
                'id',
                'description',
                'message',
                'views_count',
                'registered_date'
            ]);
            $announement_table_collection = AnnouncementResource::collection($announement_table);
            return DataTables::of($announement_table_collection)
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
            ->rawColumns(['rawAnnouncementList','getNumberList'])
            ->make(true);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function getWritingCollectionBulletin(){
        date_default_timezone_set('Asia/Manila');
        try {

            $writing_collection_bulletin_table = WritingCollectionBulletin::get(['id',
                'description',
                'message',
                'views_count',
                'author',
                'is_release',
                'status',
                'registered_date'
            ]);
            $writing_collection_bulletin_table_collection = WritingCollectionBulletinResource::collection($writing_collection_bulletin_table);

            return DataTables::of($writing_collection_bulletin_table_collection)
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
            return $this->common_interface->getPagesById(Announcement::class,$api_link);
        } catch (\Throwable $th) {
            throw $th;
            DB::rollback();
        }
    }
    public function getBulletinPagesById(Request $request){
        date_default_timezone_set('Asia/Manila');
        try {
            $api_link = decrypt($request->apiLink);
            return $this->common_interface->getPagesById(WritingCollectionBulletin::class,$api_link);
        } catch (\Throwable $th) {
            throw $th;
            DB::rollback();
        }
    }
}