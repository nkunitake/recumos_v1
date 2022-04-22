<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Validator;
use App\Models\Wakeup;

use Auth;

class WakeupController extends Controller
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
    return view('wakeup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWakeupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        // バリデーション
    
      $validator = Validator::make($request->all(), [
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
      $result = Wakeup::create($data);
      return redirect('/wakeup/wakeupend');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wakeup  $wakeup
     * @return \Illuminate\Http\Response
     */
    public function show(Wakeup $wakeup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wakeup  $wakeup
     * @return \Illuminate\Http\Response
     */
    public function edit(Wakeup $wakeup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWakeupRequest  $request
     * @param  \App\Models\Wakeup  $wakeup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWakeupRequest $request, Wakeup $wakeup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wakeup  $wakeup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wakeup $wakeup)
    {
        //
    }
}
