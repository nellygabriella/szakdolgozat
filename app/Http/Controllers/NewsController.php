<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\News;
use Session;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news= News::orderBy('id', 'desc')->paginate(5);
        return view('news.index')->withNews($news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'title'=>'required|max:255',
            'slug'=>'required|alpha_dash|min:5|max:255|unique:news,slug',
            'body'=>'required'
        ));

        $news = new News;
        $news->title=$request->title;
        $news->slug=$request->slug;
        $news->body=$request->body;
        $news->save();

        Session::flash('success','A bejegyzés sikeresen el lett mentve.');

        return redirect()->route('news.show',$news->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news=News::find($id);
        return view('news.show')->withNews($news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit')->withNews($news);
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
        $news = News::find($id);

        if($request->input('slug')== $news->slug){
            $this->validate($request, array(
                'title' => 'required|max:255',
                'body' => 'required'
            ));
        }else{
        
            $this -> validate($request, array(
                'title'=>'required|max:255',
                'slug'=>'required|alpha_dash|min:5|max:255|unique:news,slug'.$id,
                'body'=>'required'
            ));
        }

        $news=News::find($id);
        
        $news->title=$request->input('title');
        $news->slug=$request->input('slug');
        $news->body=$request->input('body');

        $news->save();

        Session::flash('success','A post sikeresen mentve.');

        return redirect()->route('news.show', $news->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);

        $news -> delete();

        Session::flash('succes','A post sikeresen törölve.');
        return redirect()->route('news.index');
    }

    

}
