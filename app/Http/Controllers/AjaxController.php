<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\NavModel;
use App\Models\StoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function __construct() {
        if(!request()->ajax()) {
            return abort(404,"Recurso no disponible");
        }
    }
    public function nav($lang)
    {
        $nav = NavModel::selectRaw($lang." as value,url, fk_idparent, id")
            ->get();
        return $nav;
    }

    public function getCategories() {
        $categories = CategoryModel::all();
        return $categories;
    }

    public function editStory($id, Request $request) {
        $story = StoryModel::where("id",$id)
            ->get()
            ->first();
        $status  = 0;
        if($story->fk_iduser==Auth::user()->id) {
            StoryModel::where("id",$id)
            ->update([
                "description"=> $request->input("desc"),
                "language"=> $request->input("lang"),
                "name"=> $request->input("name")
            ]);
            $status = 1;
        }
        return $status;
    }
}
