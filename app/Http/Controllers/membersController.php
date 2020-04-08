<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Carbon\Carbon;


class membersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }

    public function getAll(){
        $members = Member::all();
        return response()->json($members,200);
    }

    public function showMember($id){
        $member = Member::find($id);

        if($member==null){
            return response()->json([
                'error'=>'Resource not found'
            ],205);
        }

        return response()->json($member,200);
    }

    public function createMember($id){
        $generator = \Nubs\RandomNameGenerator\All::create();
        $name = $generator->getName();
        
        $member = new Member;
        $member->id = $id;
        $member->name = $name;
        $member->joinedDate = Carbon::now();

        $member->save();
        return response()->json($member,201);
    }
}
