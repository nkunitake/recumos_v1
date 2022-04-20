<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Services\LearnService;

use Validator;
use App\Models\Learn;

use Auth;

class LearnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        // バリデーション
    
      $validator = Validator::make($request->all(), [
        'end_at' => 'nullable',
        'feeling' => 'nullable | min:1 | max:10',
        'comment' => 'nullable | max:140',
        'manual' => 'required | min:0 | max:1',

      ]);
      // バリデーション:エラー
      if ($validator->fails()) {
        return redirect('/index')
          ->withInput()
          ->withErrors($validator);
      }
      // create()は最初から用意されている関数
      // 戻り値は挿入されたレコードの情報
      $data = $request->merge(['user_id' => Auth::user()->id])->all();
      $result = Learn::create($data);
      return redirect()->route('learn.learning');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $learn = Learn::find($id);
        return view('learn.edit', compact('learn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $result = Learn::find($id)->update($request->all());
        return view('learn.learnend');
    }

    public function learning()
    {

        $today = Carbon::today(); 
        
        $learn = DB::table('learns')
            ->whereDate('start_at','=',$today)
            ->orderBy('created_at', 'desc')
            ->first();
            
        // $learnId = $learn->id;

        return view('learn.learning', compact('learn'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
