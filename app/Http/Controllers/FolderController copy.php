<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function index()
    {
        return Folder::whereNull('parent_id')->get();
    }

    public function subfolders($id)
    {
        return Folder::where('parent_id', $id)->get();
    }
}
