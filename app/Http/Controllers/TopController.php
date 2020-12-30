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

    public function more($teamName)
    {
        $data = [
            'teamName' => $teamName,
            'data' => Total::select(DB::raw('*, "areaKou" + "areaOtsu" + "areaHei" + "areaTei" as sum'))
                        ->where('teamName', $teamName)->orderBy('date', 'desc')->get()];
        return view('more', $data);
    }

    public function new($teamName)
    {
        return view('new', ['teamName' => $teamName]);
    }

    public function store(Request $req){
        $data = new Total();


        $this->validate($req, Total::$rules);
        $data->fill($req->except('_token'))->save();
        return redirect('/')->with('flash_message', '登録が完了しました');
    }

    public function edit($id)
    {
        $data = ['data' => Total::findOrFail($id)];
        return view('edit', $data);
    }

    public function update(Request $req, $id)
    {
        $this->validate($req, Total::$rules);
        $data = Total::find($id);
        $data->fill($req->except('_token', '_method'))->save();

        return redirect('/')->with('flash_message', '編集が完了しました');
    }
    
    public function delete($id)
    {
        $data = ['data' => Total::findOrFail($id)];

        return view('delete', $data);
    }

    public function destroy($id)
    {
        $phone = Total::find($id);
        $phone->delete();
        return redirect('/')->with('flash_message', '削除が完了しました');
    }
}
