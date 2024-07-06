<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussions;

class DiscussionController extends Controller
{
    public function discussion(Request $request)
    {
        // Validasi data jika diperlukan
        $validatedData = $request->validate([
            'topic_name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);

        // Buat instance Task
        $discussion = new Discussions();
        $discussion->topic_name = $validatedData['topic_name'];
        $discussion->description = $validatedData['description'];

        // Simpan task ke dalam basis data
        $discussion->save();

        // Redirect ke halaman yang diinginkan setelah menyimpan task
        return redirect()->route('dashboard_hackathon');
    }
}
