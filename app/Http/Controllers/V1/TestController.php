<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getAnnouncementTableTest(){
        date_default_timezone_set('Asia/Manila');
        try {
            return 'true11';

        }
    }
}
