<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAnnouncementTableTest(){
        date_default_timezone_set('Asia/Manila');
            return 'TEST API V1';

    }
}
