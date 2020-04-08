<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use Carbon\Carbon;

class subscriptionsController extends Controller
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
    public function create($memberid, $artisid)
    {
        $subs = new Subscription;
        $subs->member_id = $memberid;
        $subs->artist_id = $artisid;
        $subs->since = Carbon::now();

        $subs->save();
        return response()->json($subs,201);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy($member,$artist)
    {
        $subs = Subscription::where('member_id',$member)->where('artist_id',$artist);

        $subs->delete();

        return response()->json(
            ['message'=> 'success'],
            200
        );  
    }

    public function getAll($memberid){
        $subs = Subscription::where('member_id',$memberid)->get();

        if ($subs==null){
            return response()->json([
                'error'=>'Resource not found'
            ],404);
        }

        return response()->json($subs,200);
    }
}
