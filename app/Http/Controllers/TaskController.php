<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Members;
use App\Models\Discussions;

class TaskController extends Controller
{
    public function index()
    {
        // Ambil semua task dari database
        $tasks = Task::all();
        $members = Members::all();
        $discussions = Discussions::all();

        $days = $this->calculateDays();

        // Kirim data tasks ke view
        return view('hackathon-content/dash_hackathon', compact('days', 'tasks', 'members', 'discussions'));
    }


    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        $validatedData = $request->validate([
            'name' => 'required|string',
            'start' => 'required|date',
            'finish' => 'required|date|after:start',
            'person' => 'nullable|array',
            'detail' => 'nullable|string',
        ]);

        // Buat instance Task
        $task = new Task();
        $task->name = $validatedData['name'];
        $task->start = $validatedData['start'];
        $task->finish = $validatedData['finish'];
        // Menggunakan implode untuk mengubah array menjadi string
        if (!empty($validatedData['person'])) {
            $personString = implode(',', $validatedData['person']);
            $task->person = str_replace(' " ', '', $personString);
        } else {
            $task->person = null;
        }
        $task->detail = $validatedData['detail'] ?? null;

        // Simpan task ke dalam basis data
        $task->save();

        // Redirect ke halaman yang diinginkan setelah menyimpan task
        return redirect()->route('dashboard_hackathon');
    }

    public function getTasks()
    {
        // Fetch all tasks from the database
        $tasks = Task::all();
        return response()->json($tasks);
    }

    // Hackathon 1st Day 2
    public function st_hackathonDay2()
    {
        // Ambil semua task dari database
        $tasks = Task::all();
        $members = Members::all();

        $days = $this->calculateDays();


        return view('hackathon-content/1st_hackathon_day2', compact('days', 'tasks', 'members'));
    }

    public function store2(Request $request)
    {

        // Validasi data jika diperlukan
        $validatedData = $request->validate([
            'name' => 'required|string',
            'start' => 'required|date',
            'finish' => 'required|date|after:start',
            'person' => 'nullable|array',
            'detail' => 'nullable|string',
        ]);

        // Buat instance Task
        $task = new Task();
        $task->name = $validatedData['name'];
        $task->start = $validatedData['start'];
        $task->finish = $validatedData['finish'];
        // Menggunakan implode untuk mengubah array menjadi string
        $task->person = json_encode(implode(',', $validatedData['person']));
        $task->detail = $validatedData['detail'] ?? null;

        // Simpan task ke dalam basis data
        $task->save();

        // Redirect ke halaman yang diinginkan setelah menyimpan task
        return redirect()->route('1st_hackathon_day2');
    }

    // ---- 1st Hackathon Day 3 ------------------------
    public function st_hackathonDay3()
    {
        // Ambil semua task dari database
        $tasks = Task::all();
        $members = Members::all();

        $days = $this->calculateDays();

        return view('hackathon-content/1st_hackathon_day3', compact('days', 'tasks', 'members'));
    }

    public function store3(Request $request)
    {

        // Validasi data jika diperlukan
        $validatedData = $request->validate([
            'name' => 'required|string',
            'start' => 'required|date',
            'finish' => 'required|date|after:start',
            'person' => 'nullable|array',
            'detail' => 'nullable|string',
        ]);

        // Buat instance Task
        $task = new Task();
        $task->name = $validatedData['name'];
        $task->start = $validatedData['start'];
        $task->finish = $validatedData['finish'];
        // Menggunakan implode untuk mengubah array menjadi string
        $task->person = json_encode(implode(',', $validatedData['person']));
        $task->detail = $validatedData['detail'] ?? null;

        // Simpan task ke dalam basis data
        $task->save();

        // Redirect ke halaman yang diinginkan setelah menyimpan task
        return redirect()->route('1st_hackathon_day3');
    }

    // 2nd Hackathon Day 1
    public function nd_hackathonDay1()
    {
        // Ambil semua task dari database
        $tasks = Task::all();
        $members = Members::all();

        $days = $this->calculateDays();

        return view('hackathon-content/2nd_hackathon_day1', compact('days', 'tasks', 'members'));
    }

    public function store4(Request $request)
    {

        // Validasi data jika diperlukan
        $validatedData = $request->validate([
            'name' => 'required|string',
            'start' => 'required|date',
            'finish' => 'required|date|after:start',
            'person' => 'nullable|array',
            'detail' => 'nullable|string',
        ]);

        // Buat instance Task
        $task = new Task();
        $task->name = $validatedData['name'];
        $task->start = $validatedData['start'];
        $task->finish = $validatedData['finish'];
        // Menggunakan implode untuk mengubah array menjadi string
        $task->person = json_encode(implode(',', $validatedData['person']));
        $task->detail = $validatedData['detail'] ?? null;

        // Simpan task ke dalam basis data
        $task->save();

        // Redirect ke halaman yang diinginkan setelah menyimpan task
        return redirect()->route('2nd_hackathon_day1');
    }


    // 2nd Hackathon Day 2
    public function nd_hackathonDay2()
    {
        // Ambil semua task dari database
        $tasks = Task::all();
        $members = Members::all();

        $days = $this->calculateDays();

        return view('hackathon-content/2nd_hackathon_day2', compact('days', 'tasks', 'members'));
    }

    public function store5(Request $request)
    {

        // Validasi data jika diperlukan
        $validatedData = $request->validate([
            'name' => 'required|string',
            'start' => 'required|date',
            'finish' => 'required|date|after:start',
            'person' => 'nullable|array',
            'detail' => 'nullable|string',
        ]);

        // Buat instance Task
        $task = new Task();
        $task->name = $validatedData['name'];
        $task->start = $validatedData['start'];
        $task->finish = $validatedData['finish'];
        // Menggunakan implode untuk mengubah array menjadi string
        $task->person = json_encode(implode(',', $validatedData['person']));
        $task->detail = $validatedData['detail'] ?? null;

        // Simpan task ke dalam basis data
        $task->save();

        // Redirect ke halaman yang diinginkan setelah menyimpan task
        return redirect()->route('2nd_hackathon_day2');
    }


    // 2nd Hackathon Day 3
    public function nd_hackathonDay3()
    {
        // Ambil semua task dari database
        $tasks = Task::all();
        $members = Members::all();

        $days = $this->calculateDays();

        return view('hackathon-content/2nd_hackathon_day3', compact('days', 'tasks', 'members'));
    }

    public function store6(Request $request)
    {

        // Validasi data jika diperlukan
        $validatedData = $request->validate([
            'name' => 'required|string',
            'start' => 'required|date',
            'finish' => 'required|date|after:start',
            'person' => 'nullable|array',
            'detail' => 'nullable|string',
        ]);

        // Buat instance Task
        $task = new Task();
        $task->name = $validatedData['name'];
        $task->start = $validatedData['start'];
        $task->finish = $validatedData['finish'];
        // Menggunakan implode untuk mengubah array menjadi string
        $task->person = json_encode(implode(',', $validatedData['person']));
        $task->detail = $validatedData['detail'] ?? null;

        // Simpan task ke dalam basis data
        $task->save();

        // Redirect ke halaman yang diinginkan setelah menyimpan task
        return redirect()->route('2nd_hackathon_day3');
    }


    public function updateTask($id)
    {
        try {

            $task = Task::find($id);

            $task->update();

            return response()->json(['message' => 'Task Berhasil di Update'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal Update Task', 'error' => $e->getMessage()], 500);
        }
        return redirect()->route('dashboard_hackathon');
    }


    public function deleteTask($task_id)
    {
        try {
            // Temukan task berdasarkan ID
            $task = Task::findOrFail($task_id);

            // Hapus task
            $task->delete();

            // Beri respons sukses
            return response()->json(['message' => 'Task berhasil dihapus'], 200);
        } catch (\Exception $e) {
            // Tangani jika ada kesalahan
            return response()->json(['message' => 'Gagal menghapus task', 'error' => $e->getMessage()], 500);
        }
        return redirect()->route('dashboard_hackathon');
    }


    // Private Function //
    private function calculateDays()
    {
        $targetDate = strtotime('2024-06-25');
        $currentDate = time();
        return ceil(($targetDate - $currentDate) / (60 * 60 * 24));
    }
}
