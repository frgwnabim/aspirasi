<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Aspirasi;
use Illuminate\Http\RedirectResponse;

class AspirasiController extends Controller
{
    public function admin(): View
    {
        $aspirasis = Aspirasi::all()->sortByDesc('id'); //->sortByDesc('id') (optional)

        return view('admin')->with('aspirasis', $aspirasis);
    }

    public function index(): View
    {
        $aspirasis = Aspirasi::all()->sortByDesc('id'); //->sortByDesc('id') (optional)
        return view('index')->with('aspirasis', $aspirasis);
    }

    public function add(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png',
            'keterangan'     => 'required|min:5',
    
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Aspirasi::create([
            'foto'     => $image->hashName(),
            'nama'     => $request->nama,
            'keterangan'   => $request->keterangan,
            'jenis' => $request->content
        ]);
        
        // $aspirasi->status = false;
        // $aspirasi->save();

        return redirect('/');
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $aspirasi = Aspirasi::find($id);
        $aspirasi->status = !$aspirasi->status;
        $aspirasi->save();
        
        return redirect('/admin');
    }

    public function delete(Request $request, $id): RedirectResponse
    {
        $aspirasi = Aspirasi::find($id);
        $aspirasi->delete();

        return redirect('/admin');
    }
}
