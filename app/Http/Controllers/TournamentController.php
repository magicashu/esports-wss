<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\test1;
use App\Models\fifa;
use Illuminate\Support\Arr;

class TournamentController extends Controller
{
    public function index(){
        // $tournames = [
        //     ['name'=>'WSS',
        //     'type'=>'online',
        //     'game'=>'PUBG',
        //     'sponsorer'=>'wss']
        // ];
        return view('test',['game' => 'PUBG','type'=>'online','game'=>'PUBG','sponsorer'=>'wss']);
    }

    public function create(){
      $test1 = new test1();

      $test1 -> username = request('username');
      $test1 -> kills = request('kills');
      $test1 -> deaths = request('deaths');
      $test1 -> points = 0;
      $test1 -> save();
      return redirect('/table');
    }

    public function fifa(){
      $fifa = new fifa();

      $fifa -> username = request('username');
      $fifa -> teams = request('teams');
      $fifa -> goals= request('goals');
      $fifa -> cards = request('cards');
      $fifa -> fouls = request('fouls');
      $fifa -> points = 0;
      $fifa -> save();
      return redirect('/table');
    }
    public function cool(){
      return view('table');
    }
//   

    public function display_fifa(){
      $data = test1::all();
      
     return view('test',['data'=>$data]);
    }

    public function display_fifa_f(){
        
      $data = test1::find($req->id);
      $data->points = $req->points;
      $data->save();
      
     return redirect('test');
    }


    public function display_valorant(){
      $data = test1::all();
      
     return view('test',['data'=>$data]);
    }
    public function display_valorant_d(Request $req){
      
      $data = test1::find($req->id);
      $data->points = $req->points;
      $data->save();
      
     return redirect('test');
    }

    public function display_all(){
      $data = test1::all();
      
      return view('index',['data'=>$data]);
    }

    // public function display(){
    //   $data = fifa::all();
    //   $id = DB::select('select id from fifa', [1]);
    //   while($id!=0){
    //     $total_goals = DB::table('fifa')->sum('goals');
    //     $total_fouls = DB::table('fifa')->sum('fouls');
    //     $total_points = (($total_goals*10)-($total_fouls*2));
    //   }
      
    //   return view('test',['data'=>$data,'total_points'=>$total_points]);
    // }

    // public function score_fifa(){
    //   $total_goals = DB::table('fifa')->sum('goals');
    //   // $total_fouls
    //   // $total_cards
    //   // $total_points
    //   return view('test',['total_goals'=>$total_goals]);
    // }
}
// public function display_valorant(){
  //       $test1 = new test1();
  
  //       $data = test1::all();
  //       $id = fifa::select('id');
  //       $total_players = DB::table('test1')->count();
  //       $username = DB::table('test1')->get();
  
  //       foreach($username as $name){
  //         // $kills = test1::whereIn('username',$name)->pluck('kills');
  //         // return $kills;
        
  //         $kills[] = ($name->kills)*10;
  //         $deaths[] = ($name->deaths)*4;
  
  //         // $deaths[] = $name->deaths;
  
          
  //       }
  //       $res     = array();
  //       for($i=0;$i<count($kills);$i++){
  //         $res[$i] = $kills[$i]-$deaths[$i];
         
  //         // $record[$i] = DB::update('update test1 set points = ? where id >0',$res[$i]);
  //       }
  //     //  $points = test1::where('points',1)->update($res);
      
  //       // $id = [1,2,3,4,5];
   
  //       foreach ($res as $myname){
  //      //  $points = test1::where($test1->id)->where($test1->points)->update(array($myname));
  //         $record = DB::table('test1')->update(['points'=>$myname]);
  //          //$record = DB::update('update test1 set points = ? where id >0',array($myname));
  //           // $test1 -> save();
          
        
  //    }
  // return view('test');
  //       // return $res;
  //     //  foreach($username as $name){
  //     //  //  $total_points[] = $res ;
  //       // $test1 -> points =  $res;
  //        //return $res;
  //       // $serializedArr = serialize($res); 
  //       // echo dd($serializedArr);
  //       // $record = DB::insert('insert into test1 (points) values (?)', $res);
  //       // $record = DB::update('update test1 set points = ? where id >0',$res);
  //       // return $record;
  //       // unserialize($record->points);
  //       // $test1 -> save();
  //     //  }
       
  
  //       // return collect($kills)->map(function($item,$key){
  //         // return [$res];
  //       // });
       
  
        
     
  //       // return [$kills,$deaths];
  //       // echo dd($deaths);
  //       // echo dd($kills);
       
  //     }