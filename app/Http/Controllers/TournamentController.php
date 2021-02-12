<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
      $test1 -> kdratio = request('kdratio');

      $test1 -> save();
      return redirect('/');
    }

    public function fifa(){
      $fifa = new fifa();

      $fifa -> username = request('username');
      $fifa -> teams = request('teams');
      $fifa -> goals= request('goals');
      $fifa -> cards = request('cards');
      $fifa -> fouls = request('fouls');

      $fifa -> save();
      return redirect('/');
    }
}
