<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RobotikController extends Controller
{
    public function submit(Request $request)
    {
        // Validate and store the file
        $path = $request->file('robotik')->store('robots', 'public');

        // Gather data to pass to the view
        $data = $request->only(['nama_tim', 'sekolah', 'kelas', 'kategori', 'deskripsi', 'foto']);
        $data['photo_path'] = $path;

        return view('robotik_result', ['data' => $data]);
    }
}