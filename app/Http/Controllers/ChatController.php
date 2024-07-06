<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('discussions/discussion1');
    }

    public function sendMessage(Request $request)
    {
        $message = $request->input('message');


        return response()->json(['message' => $message], 200);
    }
}
