<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Models\Album;
use \App\Models\Track;


class AlbumController extends Controller
{
    public static function index()
    {
        try{
            $albums = array();
            foreach(Album::all() as $album){
                $tracks                 = Track::where('album_id',$album->id)->get();
                $album->tracks          = $tracks;
                $albums[]               = $album;
            }
            return response()->json(['error'=>false,'message'=>'','data'=>$albums],200);
        }catch(\Exception $e){
            return response()->json(['error'=>true,'message'=>$e->getmessage(),'data'=>''],500);
        }
    }
    
    public static function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $request->validate([
                'artist_id',
                'name',
                'release_date',
            ]);
            $return = Album::create($request->all());
            DB::commit();
            return response()->json(['error'=>false,'message'=>'','data'=>$return],200);
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error'=>true,'message'=>$e->getmessage(),'data'=>''],500);
        }
    }
    public static function update(Request $request,$id)
    {
        try{
            DB::beginTransaction();
            $request->validate([
                'name',
                'release_date',
            ]);
            $album               = Album::findOrFail($id);
            $request             = $request->all();
            $album->release_date = $request['release_date'];
            $album->name         = $request['name'];
            $album->artist_id    = $request['artist_id'];
            $album->save();
            DB::commit();
            return response()->json(['error'=>false,'message'=>'','data'=>$album],200);
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error'=>true,'message'=>$e->getmessage(),'data'=>''],500);
        }
    }

    public static function show($id)
    {
        try{
            return response()->json(['error'=>false,'message'=>'','data'=>Album::findOrFail($id)],200);
        }catch(\Exception $e){
            return response()->json(['error'=>true,'message'=>$e->getmessage(),'data'=>''],500);
        }
    }

    public static function delete($id)
    {
        try{
            DB::beginTransaction();
            $return = album::destroy($id);
            DB::commit();
            return response()->json(['error'=>false,'message'=>'','data'=>$return],200);
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error'=>true,'message'=>$e->getmessage()],500);
        }
    }
}
