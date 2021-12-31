<?php

namespace App\Http\Controllers;

use App\Models\StoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoryController extends Controller
{
    public function create(Request $request) {
        $fname = strtolower(str_replace(" ","",trim(preg_replace('/[^A-Za-z0-9\-]/', '',$request->input("name")))));
        $newStory = StoryModel::create([
            "name" => $request->input("name"),
            "fname" => $fname,
            "language" => $request->input("lang"),
            "fk_iduser" => Auth::user()->id,
            "fk_idtype" => $request->input("type"),
            "fk_category" => $request->input("category")
        ]);
        return $newStory;
    }

    public function getDashboard($id,$fname) {
        $story = StoryModel::where("fname",$fname)
            ->where("id",$id)
            ->get();
        if(sizeof($story) == 0) return redirect("/");
        if(!isset(Auth::user()->id)) return redirect("/");
        if($story[0]->fk_iduser!=Auth::user()->id) return redirect("/");
        return view("storyDashboard")
            ->with("s",$story[0]);
    }
}
