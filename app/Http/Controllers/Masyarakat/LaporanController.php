<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Laporan::where('id_user', Auth::user()->id)->get();
        return view('masyarakat.dashboard.laporan', compact('data'));
    }

    public function lapor(Request $request)
    {
        $validateData = $request->validate([
            'id_user' => ['required'],
            'masalah' => ['required', 'string', 'max:255'],
            'fakta' => ['required'],
            'pendamping' => ['required'],
            'captcha' => ['required', 'captcha']
        ]);
        $validateData =[
            'id_user' => $validateData['id_user'],
            'masalah' => $validateData['masalah'],
            'fakta' => $validateData['fakta'],
            'pendamping' => $validateData['pendamping']];
        $validateData['masalah'] = Str::limit(strip_tags($request->masalah), 255);
        Laporan::create($validateData);
        return redirect()->route('laporan')->with('status', 'Successfully');
    }
}
