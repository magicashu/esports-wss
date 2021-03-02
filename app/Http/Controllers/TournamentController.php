<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\test1;
use App\Models\fifa;

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

    public function display_valorant(){
      $data = test1::all();
      $id = fifa::select('id');
      $total_players = DB::table('test1')->count();
      $username = DB::table('test1')->get('username');
      foreach($username as $name){
        $kills = test1::whereIn('username',$name)->pluck('kills');
        return $kills;
        
      }
    }

    public function display_fifa(){
      $data_fifa = fifa::all();
      $id = fifa::select('id');
      while($id != 0){
        $total_goals = 0;
        $total_fouls = 0;
        $total_goals = DB::table('fifa')->sum('goals');
        $total_fouls = DB::table('fifa')->sum('fouls');
        foreach($username as $name){
          $total_points = (($total_goals*10)-($total_fouls*2));
        }
        foreach($username as $name){
          $fifa->points = $total_points;
          $fifa->save();
        }

       return $total_points;
      }
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
