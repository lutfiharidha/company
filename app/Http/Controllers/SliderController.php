<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$sliders = Slider::all();
        return view('auth.slider',compact('sliders'));
    }
    public function create()
	{
    	return view('auth.slideradd');
  	}
  	public function store(request $request)
    {
    	$img = $request->file('file')->move('sliders');
    	Slider::create([
		'title' => request('title'),
		'content' => request('content'),
		'img' => $img ,
        'status' => request('status'),
	]);
	        return redirect()->back()->with('message','Berhasil Di Posting');

	    }
	    public function edit($id)
    {
        $slider = Slider::find($id);
    	return view('auth.sliderupdate',compact('slider'));

}
	    public function update(Request $request, $id)
    {

        $slider = Slider::find($id);
        if($request->file('file') == ""){
            $slider = Slider::find($id);
            $slider->update([
            	'title' => request('title'),
				'content' => request('content'),
        		'status' => request('status'),
                    ]);

        }
        else{
        $img=$request->file('file')->move('slider');
        $slider->update([
		'title' => request('title'),
		'content' => request('content'),
		'img' => $img ,
        'status' => request('status'),
                    ]);
            }
            return redirect()->back()->with('message','Berhasil Di Update');

        }
        public function destroy(slider $slider)
           {
           $slider -> delete();
        return redirect()->back()->with('message','Berhasil Di Delete');
                }
}
