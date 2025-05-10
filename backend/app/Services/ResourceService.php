<?php
namespace App\Services;
use Helpers;

use Illuminate\Support\Facades\DB;
use App\Interfaces\ResourceInterface;
use Throwable;


class ResourceService implements ResourceInterface
{
    /**
     * Execute the job.
     *
     * @return mixed $model,array $data
     */
    public function create($model,array $data){
        date_default_timezone_set('Asia/Manila');
        DB::beginTransaction();
        try {
            $model::insert($data);
            DB::commit();
            return response()->json(['is_success' => 'true']);
        } catch (Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
}