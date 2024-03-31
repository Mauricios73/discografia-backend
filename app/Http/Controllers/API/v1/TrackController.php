<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Models\Track;

class TrackController extends Controller
{
    public static function index()
    {
        return Track::all();
    }
    
    public static function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $request->validate([
                'name',
                'release_date',
                'duration',
            ]);
            $return = Track::create($request->all());
            DB::commit();
            return response()->json(['error'=>false,'message'=>'','data'=>$return],200);
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error'=>true,'message'=>$e->getmessage()],500);
        }
    }
    public static function update(Request $request,$id)
    {
        try{
            DB::beginTransaction();
            $request->validate([
                'name',
                'release_date',
                'duration',
                'album_order',
            ]);
            $track               = Track::findOrFail($id);
            $request             = $request->all();
            $track->release_date = $request['release_date'];
            $track->album_order  = $request['album_order'];
            $track->name         = $request['name'];
            $track->duration     = $request['duration'];
            $track->artist_id    = $request['artist_id'];
            $track->save();
            DB::commit();
            return response()->json(['error'=>false,'message'=>'','data'=>$track],200);
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error'=>true,'message'=>$e->getmessage()],500);
        }
    }

    public static function show($id)
    {
        try{
            return Track::findOrFail($id);
        }catch(\Exception $e){
            return response()->json(['error'=>true,'message'=>$e->getmessage()],500);
        }
    }

    public static function delete($id)
    {
        try{
            DB::beginTransaction();
            $return = Track::destroy($id);
            DB::commit();
            return response()->json(['error'=>false,'message'=>'','data'=>$return],200);
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error'=>true,'message'=>$e->getmessage()],500);
        }
    }
}
