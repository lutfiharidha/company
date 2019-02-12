<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Work;
class WorkController extends Controller
{
    public function index()
    {
    	$works= Work::all();
        return view('auth.works',compact('works'));
    }
    public function create()
	{
    	return view('auth.workadd');
  	}
  	public function store(request $request)
    {
    	$img = $request->file('file')->move('works');
    	Work::create([
		'workname' => request('workname'),
		'content' => request('content'),
		'img' => $img ,
        'status' => request('status'),
	]);
	        return redirect()->back()->with('message','Berhasil Di Posting');

	    }
	    public function edit($id)
    {
        $works = Work::find($id);
    	return view('auth.worksupdate',compact('works'));

}
	    public function update(Request $request, $id)
    {

        $works = Work::find($id);
        if($request->file('file') == ""){
            $slider = Work::find($id);
            $slider->update([
            	'workname' => request('workname'),
				'content' => request('content'),
        		'status' => request('status'),
                    ]);

        }
        else{
        $img=$request->file('file')->move('works');
        $works->update([
		'workname' => request('workname'),
		'content' => request('content'),
		'img' => $img ,
        'status' => request('status'),
                    ]);
            }
            return redirect()->back()->with('message','Berhasil Di Update');

        }
        public function destroy(work $work){
        $work -> delete();
        return redirect()->back()->with('message','Berhasil Di Delete');
        }
}
