<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$pages= Page::all();
        return view('auth.page',compact('pages'));
    }
    public function create()
	{
    	if(Page::count() <= 3){
    	return view('auth.pageadd');
    	}
    	else{
  		return redirect()->back();
  	}
  	}
  	public function store(request $request)
    {
    	$img = $request->file('file')->move('post');
    	Page::create([
		'page' => request('page'),
		'content' => request('content'),
		'img' => $img ,
        'status' => request('status'),
	]);
	        return redirect()->back()->with('message','Berhasil Di Posting');

	    }
	     public function edit($id)
    {
        $page = Page::find($id);
        if(Page::count() <= 3){
    	return view('auth.pageupdate',compact('page'));
    	}
    	else{
  		return redirect()->back();
    }
}
	    public function update(Request $request, $id)
    {

        $page = Page::find($id);
        if($request->file('file') == ""){
            $page = Post::find($id);
            $page->update([
            	'page' => request('page'),
				'content' => request('content'),
        		'status' => request('status'),

                    ]);

        }
        else{
        $img=$request->file('file')->move('post');
        $page->update([
        	'page' => request('page'),
			'content' => request('content'),
			'img' => $img ,
        	'status' => request('status'),
                    ]);
            }
            return redirect()->back()->with('message','Berhasil Di Update');

        }
}
