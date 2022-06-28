<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = DB::table('abouts')->get();
        
        return view('admin.abouts.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = DB::table('abouts')->count();
        if ($about == 0) {
            return view('admin.abouts.create');
        }

        else
             return redirect()->route('abouts.index')
                                   ->with('success','Ma`lumot bor');
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
       
        DB::table('abouts')
            ->insert(array(
                'info_en' => $request->info_en,
                'info_uz' => $request->info_uz,
        ));

         return redirect()->route('abouts.index')
                                   ->with('success','Yangilanish bajarildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = DB::table('abouts')->where('id', $id)->get();

        return view('admin.abouts.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {

        $arrayName = array(
            'info_en' => $request->info_en,
            'info_uz' => $request->info_uz,            
        );

        $about = DB::table('abouts')->where('id', $id)->update($arrayName);
        
    
        return redirect()->route('abouts.index')
                    ->with('success','Yangilanish bajarildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = DB::table('abouts')->where('id', $id)->delete();

        return redirect()->route('abouts.index')
                        ->with('success','Ma`lumot o`chirildi');
    }
}
