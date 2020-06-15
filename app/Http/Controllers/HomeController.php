<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Chat;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::where('id', "!=", Auth::user()->id)->get();
        return view('home', compact('users'));
    }

    public function OpenChat(Request $request)
    {
        $chats = Chat::orderBy('created_at', 'asc')->get();
        $id = $request['id'];
        $receiver = User::findOrFail($id);
        return view('chats', compact('chats', 'receiver'));
    }

    public function sendMessage(Request $request)
    {
        $message = new Chat;
        $message->message = $request->message;
        $message->user_id = Auth::user()->id;
        $message->receiver_id = $request->receiver_id;
        $message->save();

         return redirect()->back();
    }
}
