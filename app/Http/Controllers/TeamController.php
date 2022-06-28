<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = DB::table('teams')->paginate(5);

        return view('admin.teams.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $obg = new Team();
         $destinationPath = 'images';
         $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img-> getClientOriginalExtension();
         $request->img->move($destinationPath, $imageName);
         $obg->img = '/' . $destinationPath . '/' . $imageName;

         DB::table('teams')
             ->insert(array(
                'name_en' => $request->name_en,
                'name_uz' => $request->name_uz,
                'position_en' => $request->position_en,
                'position_uz' => $request->position_uz,
                'info_en' => $request->info_en,
                'info_uz' => $request->info_uz,
                'img' => $obg->img,
         ));

          return redirect()->route('teams.index')
                                    ->with('success','Yangi xodim qo`shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = DB::table('teams')->where('id', $id)->get();

        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if($request->img) {
            $obg = new Team();
            $destinationPath = 'images';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->   getClientOriginalExtension();
            $request->img->move($destinationPath, $imageName);
            $obg->img = '/' . $destinationPath . '/' . $imageName;

            DB::table('teams')->where('id', $id)->update(['img'=>$obg->img]);
        }

        $arrayName = array(
            'name_en' => $request->name_en,
            'name_uz' => $request->name_uz,
            'position_en' => $request->position_en,
            'position_uz' => $request->position_uz,
            'info_en' => $request->info_en,
            'info_uz' => $request->info_uz,
        );

        DB::table('teams')->where('id', $id)->update($arrayName);
    

        return redirect()->route('teams.index')
                            ->with('success','Yangilanish bajarildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('teams')->where('id', $id)->delete();

        return redirect()->route('teams.index')
                        ->with('success','Ma`lumot o`chirildi');
    }
}
