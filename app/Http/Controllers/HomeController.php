<?php

namespace App\Http\Controllers;

use App\Models\StoryModel;
use App\Models\TypeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
        return view('index');
    }

    public function home()
    {
        $take = 10;

        $data = [];
        $count = TypeModel::distinct()
            ->count("*");

        for($i=1;$i<=$count+1;$i++) {
            $aux = StoryModel::where("fk_idtype",$i)
                ->where("published",1)
                ->inRandomOrder()
                ->join("users","users.id","=","story.fk_iduser")
                ->take($take)
                ->select("users.name as uname","story.img as img","story.description as description","story.name as name","story.id as id")
                ->get();
                $data[] = $aux;
        }

        return view('home')
            ->with("novels",$data[0])
            ->with("stories",$data[1])
            ->with("shortstories",$data[2])
            ->with("microstories",$data[3])
            ->with("nanostories",$data[4]);
    }
}
