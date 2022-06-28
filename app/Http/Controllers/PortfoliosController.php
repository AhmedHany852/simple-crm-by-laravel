<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfoliosController extends Controller
{
    /**

     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $portfolios=Portfolio::get();
       
       return view('portfolios.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'img' => 'required',
            'category' => 'required',
            'projectName' => 'required',
        ]);
            //dd($request->fileInput);
            if($request->img){
             $img=$this->saveFile($request->img,'file/portfolio'); 
            }
            $portfolios=Portfolio::create([
            'img'=>$img,
            'category'=>$request->category,
            'projectName'=>$request->projectName,
            
         ]);
        
         return redirect()->route('portfolios.index')->with('success', ' successfully create portfolios');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(portfolio $portfolio,$id)
    {
       
       return view ('portfolios.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolios.edit',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        if($request->img){
            $img=$this->saveFile($request->img,'file/portfolio'); 
        }
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->category=$request->category;
        $portfolio->projectName=$request->projectName;
        $portfolio->img;
        $portfolio->save();
        
        return redirect()->route('portfolios.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolios = Portfolio::findOrFail($id);
        $portfolios->delete();
        return redirect('/portfolios')->with('success', 'Portfolios Data is successfully deleted');

        
    }
    protected function saveFile($file,$folder){
        // save photo in folder
        $file_extension=$file->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path=$folder;
        $file->move($path, $file_name);
        return $file_name;
    }
}
