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
@foreach($news as $new)
               <article class="uk-article uk-padding">

    <h1 class="uk-article-title"><a class="uk-link-reset" href="">{{$new->title}}</a></h1>

    <p class="uk-article-meta">Written by <a href="#">{{$new->writer}}</a> on {{date('d-M-Y', strtotime($new->created_at))}}</p>

    <p class=" uk-text-justify">{!!str_limit($new->content,300,' ...')!!}</p>

    <div class="uk-grid-small uk-child-width-auto" uk-grid>
        <div>
            <a class="uk-button uk-button-text" href="#">Read more</a>
        </div>
    </div>

</article>
@endforeach               
            </div>
            <div class=" uk-visible@m uk-width-1-5">
               <ul uk-accordion>
    <li>
        <a class="uk-accordion-title" href="#">2018</a>
        <div class="uk-accordion-content">
            @foreach($news18 as $n18)
            <a class="uk-button uk-button-text" href="#">{{$n18->title}}</a>
            @endforeach
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