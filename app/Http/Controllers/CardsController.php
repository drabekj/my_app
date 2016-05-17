<?php

namespace App\Http\Controllers;

use DB;
use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{

  public function index(){

    // $cards = DB::table('cards')->get();
    $cards = Card::all();

    return view('cards/index', compact('cards'));
  }

  public function show(Card $card){
    // $cards = DB::table('cards')->get();

    // $card = Card::find($id);

    // eager load, saves DB from getting many queries, this will get all the data from notes and user
    $card->load('notes.user');

    return view('cards/show', compact('card'));
  }
}
