<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Articles;

use Auth;

use DB;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::paginate(10);
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*$articles = new Articles;
        $articles->user_id = Auth::user()->id;
        $articles->content = $request->content;
        $articles->live = (boolean)$request->live;
        $articles->post_on = $request->post_on;
        $articles->save();*/
        Articles::create($request->all());
        return redirect('articles');
        //DB::table('articles')->insert($request->except('_token'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles =Articles::findOrFail($id);
        return view('articles.show',compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles =Articles::findOrFail($id);
        return view('articles.edit',compact('articles'));
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

        $articles =Articles::findOrFail($id);
        if( ! isset($request->live))
            $articles->update(array_merge($request->all(),['live'=>false]));
        else
            $articles->update($request->all());
       return redirect('/articles/.$id');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $articles =Articles::findOrFail($id);
         $articles->delete();
         return redirect('/articles');
    }
    public function restore($id){
        
    }
}
