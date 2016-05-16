<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;
use App\Card;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function store(Request $request, Card $card){
      // ------ 1st way
      // $note = new Note;
      // $note->body = $request->body;
      //
      // $card->notes()->save($note);

      // ------ 2nd way
      // $note = new Note(['body' => $request->body]);
      //
      // $card->notes()->save($note);

      // ------ 3rd way
      // $card->notes()->create([
      //   'body' => $request->body
      // ]);

      // ------ 4th way
      // $card->notes()->create($request->all());

      // ------ 5th way
      $card->addNote(
        new Note($request->all())
      );

      return back();
    }
}
