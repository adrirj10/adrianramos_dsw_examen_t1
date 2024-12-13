<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessagesController extends Controller
{
    //
    public function index(){
        return view('messages');
    }

    public function borrar()
    {
        $messages = Message::all(); // Obtén todos los mensajes de la base de datos
        return view('borrar', compact('messages'));
    }

    public function destroy($id)
    {
        $message = Message::findorFail($id);
        $message->delete();
        return redirect('messages')->with('success',"Mensaje borrado");
    }
}
