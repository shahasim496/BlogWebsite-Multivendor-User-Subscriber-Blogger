<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\susbscribed;
use App\Models\post;
use Auth;

use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('subscriber.dashbaord');
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
    public function store($id)
    {
        $subscribe= new susbscribed;
        $subscribe->s_id=auth()->user()->id;
        $subscribe->b_id=$id;
        

        $subscribe->save();
        return redirect ('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sshow()
    {
        $s_id=auth()->user()->id;
        
        //  dd($s_id);
         $bloggerid=susbscribed::where('s_id',$s_id)->pluck('b_id')->toArray();
        
         $posts =Post::whereIn('user_id',($bloggerid))->get();
        
         return view('subscriber.show',compact('posts'));
         
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
