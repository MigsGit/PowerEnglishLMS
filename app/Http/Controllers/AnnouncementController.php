<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use DataTables;
use Carbon\Carbon;
use App\Models\Announcement;
use App\Models\User;
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
                $result = "";
                $result .= "<center>";
                $result .= "<a href='#' class='link-primary'> $row->description </a>";
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
}
