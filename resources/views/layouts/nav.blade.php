<!DOCTYPE html>
<html>
<head>
	<title>{{ config('app.name') }}</title>
	      <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- UIkit CSS -->
<link rel="stylesheet" href="css/uikit.min.css" />
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300" rel="stylesheet">
<!-- UIkit JS -->
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
</head>
<body>
<div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200" class="uk-visible@m">

	<nav class="uk-background-secondary uk-light" uk-navbar>
		<div class="uk-navbar-left uk-navbar-item uk-margin-medium-left" >
        <ul class="uk-navbar-nav">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="{{route('newss')}}">News</a>
            </li>
            <li>
                <a href="#about" uk-scroll>About</a>
            </li>
        </ul>
    </div>
    <div class="uk-navbar-center">
        <a class="uk-navbar-item uk-logo" href="#">Company Name</a>
	</div>
	    <div class="uk-navbar-right uk-navbar-item uk-margin-medium-right">
        <ul class="uk-navbar-nav">
            <li>
                <a href="#work" uk-scroll>Work</a>
            </li>
            <li>
                <a href="#service" uk-scroll>Service</a>                
            </li>
            <li>
                <a href="#contact" uk-scroll>Contact</a>
            </li>
        </ul>
    </div>
</nav>
</div>
<div class="uk-hidden@m uk-background-secondary uk-container uk-light">
     <span class="uk-float-right uk-margin-small-top">
               <h3 class="">Company Name</h3>
               </span>
            <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200"  uk-navbar>
               <button class="uk-margin-small-top uk-button uk-background-secondary " uk-navbar-toggle-icon  type="button" uk-toggle="target: #offcanvas-push"></button>
              
            </div>
         </div>
         <div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
            <div class="uk-offcanvas-bar"uk-navbar>
               <button class="uk-offcanvas-close" type="button" uk-close></button>
               <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-large-left uk-position-center-left">
                  <ul class="uk-nav-default uk-nav-parent-icon" uk-nav="multiple: false">
                     <li class="uk-active">
                        <a href="{{ url('/') }}" >Home</a>
                        <hr>
                     </li>
                     <li class="uk-active uk-divider">
                        <a href="#">News</a>
                        <hr>
                     </li>
                     <li class="uk-active uk-divider">
                        <a href="#about" uk-scroll>About</a>
                        <hr>
                     </li>
                     <li class="uk-active uk-divider">
                         <a href="#work" uk-scroll>Work</a>
                        <hr>
                     </li>
                     <li class="uk-active uk-divider">
                        <a href="#service" uk-scroll>Service</a>                
                        <hr>
                     </li>
                      <li class="uk-active uk-divider">
                        <a href="#contact" uk-scroll>Contact</a>
                        <hr>
                     </li>
                        <li class="uk-active">
                        <div class="uk-margin-right">
               <p><span uk-icon="receiver"></span> 0853-6460-5541</p>

               </p><span uk-icon="mail"> </span> Lutfiharidha1337@gmail.com</div>
               </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
@yield('content')
<div id="contact" class="uk-background-cover uk-padding" style="background-image: url(https://www.bikramyogabayside.com.au/wp-content/uploads/2016/12/footer-background-img.jpg);">
    <div class="uk-visible@m uk-container uk-container-medium uk-column-1-3 uk-text-white">
        <p class="uk-margin uk-text-center"><img width="150" height="150" src="https://www.mekode.com/lg.png"><br>Jalan Lorem ipsum<br>Lhokseumawe, Aceh - Indonesia<br>Telp/Fax : 000000000<br>info@copany.com</p>
        <p class="uk-margin-large-top"><h4 class="uk-heading-line uk-text-white"><span>Customer Support</span></h4>
        <ul class="uk-list uk-list-large uk-text-muted">
            <li>Telkomsel: 000000000000</li>
            <li>Smartfren: 000000000000</li>
            <li>Three: 000000000000</li>
            <li>Indosat: 000000000000</li>
        </ul>
    </p>
    <p><form class="uk-margin-large-top">

    <div class="uk-margin">
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Email">
        </div>
    </div>

        <div class="uk-margin">
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Name">
        </div>
    </div>

 <div class="uk-margin">
            <textarea class="uk-textarea" rows="5" placeholder="Message"></textarea>
        </div>
    <button class="uk-float-right uk-button uk-button-primary uk-text-white">Send</button>

</form>
    </p>
    </div>
    <div class="uk-hidden@m  uk-container uk-container-medium uk-text-white">
        <p class="uk-margin uk-text-center"><img width="150" height="150" src="https://www.mekode.com/lg.png"><br>Jalan Lorem ipsum<br>Lhokseumawe, Aceh - Indonesia<br>Telp/Fax : 000000000<br>info@copany.com</p>
        <p class="uk-margin-large-top"><h4 class="uk-heading-line uk-text-white"><span>Customer Support</span></h4>
        <ul class="uk-list uk-list-large uk-text-muted">
            <li>Telkomsel: 000000000000</li>
            <li>Smartfren: 000000000000</li>
            <li>Three: 000000000000</li>
            <li>Indosat: 000000000000</li>
        </ul>
    </p>
    </div>
</div>
</body>
</html>