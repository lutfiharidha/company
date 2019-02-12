<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use VisitLog;
use App\Page;
use App\Slider;
use App\Work;
use App\News;

class UtamaController extends Controller
{
        public function index()
    {
    	VisitLog::save();
    	$about = Page::all()->where('page','=','about');
        $works = Work::all()->where('status','=','Publish');
    	$sliders = Slider::all()->where('status','=','Publish');
        return view('welcome',compact('about','sliders','works'));
    }
    public function news()
    {
    	VisitLog::save();
        $news18 = News::whereYear('created_at','=','2018')->latest()->get();
        $news = News::where('status','=','Publish')->latest()->paginate(3);
        return view('news',compact('news','news18'));
    }
    public function works()
    {
    	VisitLog::save();
        $works = Work::where('status','=','Publish')->latest()->paginate(1);
        return view('work',compact('works'));
    }
        public function abouts()
    {
    	VisitLog::save();
    	$about = Page::all()->where('page','=','about');
    	$sliders = Slider::all()->where('status','=','Publish');
        return view('about',compact('about','sliders'));
    }
}
