<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function index()
    {
        // Get all folders with parent_id null (root folders)
        return Folder::whereNull('parent_id')->with('children')->get();
    }

    public function show($id)
    {
        // Get folder by id and include its direct subfolders
        return Folder::where('id', $id)->with('children')->firstOrFail();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:folders,id'
        ]);

        return Folder::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $folder = Folder::findOrFail($id);
        $folder->update($request->all());

        return $folder;
    }

    public function destroy($id)
    {
        $folder = Folder::findOrFail($id);
        $folder->delete();

        return response()->noContent();
    }
}
