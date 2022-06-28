<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Type;
use FFI\CType;
use GuzzleHttp\ClientTrait;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::with(['Typename'])->get();
        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('clients.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fileInput' => 'required',
        ]);
            //dd($request->fileInput);
            if($request->fileInput){
            $file_name=$this->saveFile($request->fileInput,'file/clients'); 
             }
            $client=Client::create([
            'name'=>$request->name,
            'type_id'=>$request->type_id,
            'businessCategory'=>$request->businessCategory,
            'birthDate'=>$request->birthDate,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'city'=>$request->city,
            'notes'=>$request->notes,
            'fileInput'=>$file_name,
            
         ]);
         return redirect('/clients')->with('success', ' successfully create client');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $types=Type::get();
        return view('clients.edit', [
            'client' => Client::findOrFail($id),
            'types'=>$types
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $client = Client::find($id);
        $types = Type::get();
        
        return view('clients.edit',compact('client','types'));
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
        if($request->fileInput){
            $file_name=$this->saveFile($request->fileInput ,'file/clients');
        }
        $client = Client::find($id);
        $client->name=$request->name;
        $client->Type_id=$request->Type_id;
        $client->businessCategory=$request->businessCategory;
        $client->birthDate=$request->birthDate;
        $client->phone=$request->phone;
        $client->address=$request->address;
        $client->city=$request->city;
        $client->notes=$request->notes;
        $client->file_name;
        $client->save();
        return redirect()->route('clients.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients')->with('success', 'client Data is successfully deleted');
        
    }
    protected function saveFile($file,$folder){
        // save photo in folder
        $file_extension=$file->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path=$folder;
        $file->move($path,$file_name);
        return $file_name;
    }
}
