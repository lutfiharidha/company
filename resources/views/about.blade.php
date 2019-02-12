@extends('layouts.navb')
@section('content')
<div class="uk-container uk-margin-medium-top uk-padding uk-container-medium uk-padding">
            @foreach($about as $ab)
            <p><img class="uk-align-center uk-height-expand" src="{{asset($ab->img)}}""></p>
            <div class="uk-text-justify uk-margin-large-top">{!!$ab->content!!}</div>
            @endforeach
            <h1 class="uk-heading-line uk-text-center uk-text-bold"><span>Vision</span></h1>
            <div class="uk-padding"  uk-grid>
                <div class=" uk-width-1-2@l">
            <p class="uk-text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
</div>
<div class=" uk-width-1-2@l">
                        <p><img class="uk-height-expand"  src="https://mbtskoudsalg.com/images/vision-png-2.png"></p>
            </div>
        </div>
            <h1 class="uk-heading-line uk-text-center uk-text-bold"><span>Mission</span></h1>
 <div class="uk-padding"  uk-grid>
    <div class=" uk-width-1-2@l">

              <p><img class="uk-height-expand" src="https://www.clearvoice.com/wp-content/uploads/2017/03/Mission.png""></p>
          </div>
                            <div class=" uk-width-1-2@l">
            <p class="uk-text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
</div>

                       
            </div>
             <div class="uk-padding">
            <h1 class="uk-heading-line uk-text-center"><span>Locations</span></h1>
            <div class=" uk-width-1-2@l">
                <div class="uk-child-width-1-2" uk-grid>
    <div>
       <h4 class="uk-text-bold">Jakarta Pusat, Indonesia</h4>
       <ul class="uk-list">
    <li>Kalibata No 24</li>
    <li>Tel:+06 3 xxxx xxxx</li>
    <li>Fax:+06 3 xxxx xxxx</li>
    <li>Email:id@company</li>
</ul>
    </div>
    <div>
        <img src="https://jualkantor.files.wordpress.com/2015/02/cropped-nifarro-park-new.jpg">
    </div>
</div>
<div class="uk-child-width-1-2 " uk-grid>
    <div>
       <h4 class="uk-text-bold">Tokyo, Japan</h4>
        <ul class="uk-list">
    <li>Minato-ku, Tokyo, 107-0062 Japan</li>
    <li>Tel:+81 3 xxxx xxx</li>
    <li>Fax:+81 3 xxx xxx</li>
    <li>Email:jp@company</li>
</ul>
    </div>
    <div>
        <img src="http://www.sewa-kantor.net/images1/54_1.jpg">
    </div>
</div>
<div class="uk-child-width-1-2 " uk-grid>
    <div>
       <h4 class="uk-text-bold">London, United Kingdom</h4>
       <ul class="uk-list">
    <li>10 Eunos Road 8, #13-08</li>
    <li>Tel:+81 3 xxxx xxxx</li>
    <li>Fax:+81 3 xxxx xxxx</li>
    <li>Email:uk@company</li>
</ul>
    </div>
    <div>
        <img src="https://rumahdijual.com/attachments/sunter/5118927d1459782742-disewakan-gedung-kantor-baru-prime-office-suites-sunter-facade-1.jpg">
    </div>
</div>
               </div>

            </div>
</div>
@endsection