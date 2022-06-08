<?php

namespace App\Http\Controllers;

use App\Models\Arena;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Arena::orderBy('id')->paginate(3);
        return view('admin.arenas.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $arena = Arena::all();
        return view('admin.arenas.create', ['arena' => $arena]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $images = [
            'price' => 'required',
            'image' => 'image|file',
            'status' => 'required',
        ];
        $validateData = $request->validate($images);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('arena', 'public');
        }

        Arena::create($validateData);
        return redirect()->route('arena.index')->with('success', 'Arena Bershasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $arena = Arena::find($id);
        return view('admin.arenas.show', compact('arena'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $arena = Arena::find($id);
        return view('admin.arenas.edit', compact('arena'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $rules = [
            'price' => 'required',
            'image' => 'required',
            'status' => 'required',
        ];

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('arena', 'public');
        }

        Arena::where('id', $id)->update($validateData);
        return redirect()->route('arena.index')->with('success', 'Arena Bershasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Arena::find($id)->delete();
        return redirect()->route('arena.index')->with('success', 'Arena Bershasil Dihapus');
    }
}
