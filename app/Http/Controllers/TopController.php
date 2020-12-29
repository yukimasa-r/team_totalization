<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Total;

class TopController extends Controller
{
    public function index()
    {
        $areaList = array(
            'a_data' => 'A',
            'b_data' => 'B',
            'c_data' => 'C',
            'd_data' => 'D',
        );

        foreach($areaList as $key => $value){
            $data[$key] = Total::select(DB::raw('*, "areaKou" + "areaOtsu" + "areaHei" + "areaTei" as sum'))
                            ->where('teamName', $value)->orderBy('date', 'desc')->limit(5)->get();
        }

        return view('index', $data);
    }
    
}
