@extends('layouts.nav')
@section('content')
<div class="uk-position-relative uk-visible-toggle uk-light"  uk-slideshow="ratio: 10:4; animation: scale; autoplay:true">

            <ul class="uk-slideshow-items">
                @foreach($sliders as $slider)
                <li>
                    <img src="{{asset($slider->img)}}" alt="{{$slider->title}}" uk-cover>
                     <div class="uk-visible@m uk-overlay uk-overlay-primary uk-position-center uk-position-small uk-text-center uk-light uk-flex uk-padding-small uk-width-1-2@s">
                <h2 class="uk-margin-remove uk-text-capitalize">{{$slider->title}}</h2>
                <p class="uk-margin-remove">{!!$slider->content!!}</p>
            </div>
                </li>
                @endforeach
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        </div>
        <div id="about" class="uk-container uk-margin-medium-top uk-padding uk-container-medium uk-column-1-2@l uk-padding">
            @foreach($about as $ab)
            <p><img width="450" height="450" src="{{asset($ab->img)}}"></p>
            <div class="uk-text-justify uk-margin-large-top">{!!$ab->content!!}</div>
            @endforeach
        </div>
<div class="uk-background-fixed uk-blend-darken uk-background-cover uk-column-1-3@l uk-margin-medium-top" style="background-image: url(https://dtaw.tmforum.org/wp-content/uploads/2016/02/testimonial-background.jpg);">
    <p class="uk-padding-large uk-text-large uk-text-center uk-text-white"><span uk-icon="icon: heart; ratio: 5.5"></span><br>Love Our Client</p>
    <p class="uk-padding-large uk-text-large uk-text-center uk-text-white"><span uk-icon="icon: git-branch; ratio: 5.5"></span><br>Perfect Branch</p>
    <p class="uk-padding-large uk-text-large uk-text-center uk-text-white"><span uk-icon="icon: world; ratio: 5.5"></span>
<br>International</p>
</div>
    <div id="work" class="uk-container uk-container-medium uk-margin-medium-top uk-text-center uk-padding">
<h1 class="uk-heading-line uk-text-right"><span>Our Work</span></h1>
<div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">
    @foreach($works as $work)
    <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">        
        <a class="uk-inline uk-width-1-2" href="{{asset($work->img)}}" data-caption="{{$work->workname}}">
             <div class="uk-position-center">
                <span class="uk-transition-fade" uk-icon="icon: plus; ratio: 2"></span>
            </div>
            <img src="{{asset($work->img)}}" alt="{{$work->workname}}">
        </a>
    </div>
    @endforeach
    <!-- <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">        
        <a class="uk-inline" href="https://getuikit.com/docs/images/dark.jpg" data-caption="Caption 2">
            <div class="uk-position-center">
                <span class="uk-transition-fade" uk-icon="icon: plus; ratio: 2"></span>
            </div>
            <img src="https://getuikit.com/docs/images/dark.jpg" alt="">
        </a>
    </div>
    <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">        
        <a class="uk-inline" href="https://getuikit.com/docs/images/light.jpg" data-caption="Caption 3">
             <div class="uk-position-center">
                <span class="uk-transition-fade" uk-icon="icon: plus; ratio: 2"></span>
            </div>
            <img src="https://getuikit.com/docs/images/light.jpg" alt="">
        </a>
    </div>
    <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">        
        <a class="uk-inline" href="https://getuikit.com/docs/images/photo.jpg" data-caption="Caption 4">
             <div class="uk-position-center">
                <span class="uk-transition-fade" uk-icon="icon: plus; ratio: 2"></span>
            </div>
            <img src="https://getuikit.com/docs/images/photo.jpg" alt="">
        </a>
    </div>
    <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">        
        <a class="uk-inline" href="https://getuikit.com/docs/images/dark.jpg" data-caption="Caption 5">
             <div class="uk-position-center">
                <span class="uk-transition-fade" uk-icon="icon: plus; ratio: 2"></span>
            </div>
            <img src="https://getuikit.com/docs/images/dark.jpg" alt="">
        </a>
    </div>
    <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">        
        <a class="uk-inline" href="https://getuikit.com/docs/images/light.jpg" data-caption="Caption 6">
             <div class="uk-position-center">
                <span class="uk-transition-fade" uk-icon="icon: plus; ratio: 2"></span>
            </div>
            <img src="https://getuikit.com/docs/images/light.jpg" alt="">
        </a>
    </div> -->
<!--     <button class="uk-align-center uk-button uk-button-default">See More >></button>
 --></div>

</div>
<h1 class="uk-visible@m uk-heading-line uk-text-center uk-margin-medium-top uk-padding"><span>Our Testimonials</span></h1>

<div class="uk-visible@l uk-background-fixed uk-position-relative uk-visible-toggle uk-light" uk-slideshow="ratio: 9:3;animation: push" style="background-image: url(https://www.chan-naylor.com.au/wp-content/uploads/2017/12/allher-testimonial-background.jpg);">

    <ul class="uk-slideshow-items">
        <li>
             <div class="uk-position-center uk-position-small uk-text-center uk-flex uk-padding-small uk-width-1-2@s">
                <img class="uk-border-circle"  uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0" src="https://getuikit.com/docs/images/avatar.jpg" width="200" height="200" alt="Border circle">
                <h3 uk-slideshow-parallax="y: 0,0,0; opacity: 1,1,0">Lutfi Haridha</h3>
                <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</p>
            </div>
        </li>
        <li>
             <div class="uk-position-center uk-position-small uk-text-center uk-flex uk-padding-small uk-width-1-2@s">
                <img class="uk-border-circle"  uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0" src="https://getuikit.com/docs/images/avatar.jpg" width="200" height="200" alt="Border circle">
                <h3 uk-slideshow-parallax="y: 0,0,0; opacity: 1,1,0">Lutfi Haridha</h3>
                <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</p>
            </div>
        </li>
        <li>
            <div class="uk-position-center uk-position-small uk-text-center uk-flex uk-padding-small uk-width-1-2@s">
                <img class="uk-border-circle"  uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0" src="https://getuikit.com/docs/images/avatar.jpg" width="200" height="200" alt="Border circle">
                <h3 uk-slideshow-parallax="y: 0,0,0; opacity: 1,1,0">Mekode</h3>
                <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</p>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<div id="service" class=" uk-margin-medium-top uk-background-cover uk-padding" style="background-image: url(http://ditrudaonguyen.com/wp-content/uploads/2015/01/dse-creative-background-company-logo-design_1-01.png);">
    <h1 class="uk-heading-line"><span>What We Can <br>Do For You</span></h1>

    <div class="uk-container uk-container-small ">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <img src="https://www.cojecom.com/wp-content/uploads/2015/01/services-web-design-1.png" alt="" uk-cover>
        <canvas width="750" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body uk-text-center">
            <h3 class="uk-card-title">DESIGN SERVICE</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div>

<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
        <img src="https://d2pu3d20b7sbnt.cloudfront.net/wp-content/uploads/2017/05/Black-Gator-Composite.jpg" alt="" uk-cover>
        <canvas width="750" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body uk-text-center">
            <h3 class="uk-card-title">DIGITAL IMAGING</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div>
 <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <img src="http://nathanbeddome.com/wp-content/uploads/2014/10/mobile-advertising.png" alt="" uk-cover>
        <canvas width="750" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body uk-text-center">
            <h3 class="uk-card-title">ADVERTISING</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div>
        </div>
    </div>
@endsection