<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->paginate(10)->onEachSide(1);

        return view('welcome', compact('users'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);

        User::create([
            'name' => $request->name
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function import(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file'));

        return back();
    }

    public function certificate($id)
    {
        $user = User::findOrFail($id);
        $pdf = PDF::loadView('certificate', compact('user'));

        return $pdf->stream();
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
