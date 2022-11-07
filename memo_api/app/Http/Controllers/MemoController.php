<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemoController extends Controller
{
    public function upsert(Request $request)
    {
        $today = date("Y-m-d H:i:s");
        $addStatus =
            DB::table('memos')->insert([
                'memo' => $request->memo,
                'created_at' => $today
            ]);
        return response($addStatus, 200);
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $response = DB::table('memos')->where('id', $id)->delete();
        return response($response, 200);        
    }

    public function get(Request $request)
    {
        $sort = $request->sort;
        $response = DB::table('memos')->orderBy('updated_at', $sort)->get();
        return response($response, 200);
    }
}
