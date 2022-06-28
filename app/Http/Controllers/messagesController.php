<?php

namespace App\Http\Controllers;
use App\Models\Massage;
use App\Models\Portfolio;  
use App\Models\Message;
use Illuminate\Http\Request;

class messagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $massages=Message::get();
        return view('messages.index',compact('massages'));
    }

    /**
     * Show the form for creating a new resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.store') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolios=Portfolio::get();
        $messages=Message::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone, 
            'message'=>$request->message,
        ]);
        
        return view('welcome',compact('portfolios'))->with('success', ' successfully create client');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('messages.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $messages=Message::findorfail($id);
        $messages->delete();
        return redirect()->route('index');
    }
}
