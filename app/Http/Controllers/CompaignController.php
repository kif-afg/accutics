<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Compaign;
use Illuminate\Support\Facades\DB;




  class CompaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

     
     
    public function index()
    {

        //$Compaigns = Compaign::paginate(5);
        $Compaigns = DB::table('compaigns')->paginate(5);
            $Compaigns->appends(['sort' => 'created_at']); 
        $Compaigns->appends(['sort' => 'compaign_name'])->toJson(JSON_PRETTY_PRINT);;
        return response($Compaigns, 200);
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
        $compaign = new Compaign;
      $compaign->author = $request->author;
      $compaign->channel = $request->channel;
      $compaign->source = $request->source;
      $compaign->compaign_name = $request->compaign_name;
      $compaign->target_url = $request->target_url;
      $compaign->save();
    
      return response()->json([
        "message" => "Compaign  created"
      ], 201);
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
