<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class NewsController extends Controller
{
    public function index()
    {
    	$news= News::all();
        return view('auth.news',compact('news'));
    }
    public function create()
	{
    	return view('auth.newsadd');
  	}
  	public function store(request $request)
    {
    	$img = $request->file('file')->move('news');
    	News::create([
		'title' => request('title'),
		'content' => request('content'),
		'img' => $img ,
        'writer' => request('writer'),
        'keywords' => request('keyword'),
        'status' => request('status'),
	]);
	        return redirect()->back()->with('message','Berhasil Di Posting');

	    }
	    public function edit($id)
    {
        $news = News::find($id);
    	return view('auth.newsupdate',compact('news'));

}
	    public function update(Request $request, $id)
    {

        $news = News::find($id);
        if($request->file('file') == ""){
            $slider = News::find($id);
            $slider->update([
            'title' => request('title'),
			'content' => request('content'),
        	'status' => request('status'),
        	'writer' => request('writer'),
	        'keywords' => request('keyword'),
	        'status' => request('status'),
                    ]);

        }
        else{
        $img=$request->file('file')->move('news');
        $news->update([
		'title' => request('title'),
		'content' => request('content'),
		'img' => $img ,
        'writer' => request('writer'),
        'keywords' => request('keyword'),
        'status' => request('status'),
                    ]);
            }
            return redirect()->back()->with('message','Berhasil Di Update');

        }
        public function destroy(news $news){
        $news -> delete();
        return redirect()->back()->with('message','Berhasil Di Delete');
        }
}
