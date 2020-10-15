<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public $parent = [];
    public $children = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $folders = Folder::all();
        $parent = $this->getChildren($folders, 0);
        // dd($this->parent);
        return json_encode($folders);
    }

    public function getChildren($folders, $parent)
    {
        foreach ($folders as $folder) {
            if ($folder->folder_parent == $parent) {
                $this->parent[$folder->id] = $folder;
                $this->parent[$folder->id]['nodes'] = $this->getChildren($folders, $folder->id);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $folders = Folder::all();
        return view('folders.index', compact('folders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $folder = Folder::all()->count();
        Folder::create([
            'name' => $request->name,
            'folder_parent' => $request->parent
        ]);
        return redirect()->route('folders.create')->with('success', 'Carpeta creada correctamente');
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
    }
}
