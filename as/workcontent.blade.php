@extends('layouts.navb')
@section('content')

<div class="uk-container uk-container-medium">
   <div class="uk-section">
      <div class="uk-container">

         <div  uk-grid>
            <div class="uk-width-expand ">
                    <div class="uk-text-center">
    <form class="uk-search uk-search-default  uk-width-xxlarge">
        <a href="" class="uk-search-icon-flip" uk-search-icon></a>
        <input class="uk-search-input" type="search" placeholder="Search...">
    </form>
</div>
               <article class="uk-article uk-padding">

    <h1 class="uk-article-title uk-text-center">{{$work->workname}}</a></h1>
            <img class="uk-align-center uk-width-large uk-transition-scale-up uk-transition-opaque" src="{{asset($work->img)}}" alt="{{$work->workname}}">
    <p class="uk-article-meta">Publised at on {{date('d-M-Y', strtotime($work->created_at))}}</p>

    <p class=" uk-text-justify">{!!$work->content!!}</p>


</article>               
            </div>
            <div class=" uk-visible@m uk-width-1-5">
               <ul uk-accordion>
    <li>
        <a class="uk-accordion-title" href="#">2018</a>
        <div class="uk-accordion-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">2017</a>
        <div class="uk-accordion-content">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">2016</a>
        <div class="uk-accordion-content">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
        </div>
    </li>
</ul>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection