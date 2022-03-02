<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CatContent;
use App\Models\Privacypolicy;
use Illuminate\Support\Facades\DB;

class AlengoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('homeslider.alengo');
        $categories = Category::all();
        // ddd($categories);
        return view('homeslider.alengo',['categories'=>$categories]);
    }


    public function category()
    {
        //
        // return view('homeslider.alengo');
        $categories = Category::all();
        $catcontent = CatContent::all();
        // ddd($catcontent);
        return view('homeslider.category',['categories'=>$categories,'catcontent'=>$catcontent]);
    }

    public function privacy()
    {
        //
        // return view('homeslider.alengo');
        $categories = Category::all();
        $privacypol = Privacypolicy::all();
        // ddd($privacypol);
        return view('homeslider.privacy',
                    [
                        'categories'=>$categories,
                        'privacypol'=>$privacypol,
                    ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $catcontent = CatContent::find($id);
        $videos = DB::table('cat_contents')->where('category_id', $id)->get();
        // ddd($videos);
        $categname = DB::table('categories')->where('id', $id)->first();
        // ddd($catcontent);
        // ddd($data);
        return view('homeslider.category',[
            'categories'=>$categories,
            'catcontent'=>$catcontent,
            'categname'=>$categname,
            'videos'=>$videos
            ]);
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
