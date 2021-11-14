@extends('layouts.app')

@section('content')
@include('user.top-campain')
@isset($post)
<script src="{{asset('/vendors/')}}/jquery.min.js"></script>

<div class="container">

    @include('categories.slider-hotel')


</div>
<div class="page-title bg-gray-06 pt-8 pb-3">
    <div class="container">
    <ul class="breadcrumb breadcrumb-style-03 mb-6">
        <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
        @isset($category)
        <li class="breadcrumb-item"><a href="{{asset('/categorie/'.$category->link)}}">{{$category->name}} </a></li>
        @endisset
        <li class="breadcrumb-item">{{$post->title}}, {{$post->city->name}}</li>
    </ul>
        <div class="explore-details-top d-flex flex-wrap flex-lg-nowrap bg-white pt-5 pl-2">
            <div class="store padding-t-s">
                <div class="d-flex flex-wrap">
                <h3 class="text-dark mr-3 mb-2 ml-2">{{$post->title}} </h3>
              
                </div>
                <ul class="list-inline store-meta d-flex flex-wrap align-items-center ml-2">
                    <li class="list-inline-item">
                        <span class="badge badge-success d-inline-block mr-1">{{$post->count_of_ticket}}</span>
                    <span>numm of availible tickets</span>
                    </li>
                    <li class="list-inline-item separate"></li>
                    @if($post->category->id == 2)
                    <li class="list-inline-item">
                        <a href="{{asset('/categorie/'.$category->link)}}" class=" text-link text-decoration-none d-flex align-items-center">
                            @php echo $post->category->icon @endphp
                        <span>{{$post->category->name}}</span>
                        </a>
                    </li>
                    @elseif($post->category->id == 3)
                    <li class="list-inline-item">
                        <a href="{{asset('/categorie/'.$category->link)}}" class=" text-link text-decoration-none d-flex align-items-center">
                        @php echo $post->category->icon @endphp

                            <span>{{$post->category->name}}</span>
                        </a>
                    </li>
                    @endif
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item">
                        <span class="mr-1 text-success"><i class="fa fa-clock"></i></span>
                        <span>Active until {{$post->valid_until}}</span>
                    </li>
                </ul>
               
            </div>
        <div class="d-flex flex-wrap flex-sm-nowrap">
        <input type="hidden" id="validuntil" value="{{$post->valid_until}}">
           
                <!--andjica-->
           
                <div class="card p-1 mb-2 bg-warning">
            <h4 id="headline">Deze aanbieding is geldig tot</h4>
                <div id="countdown">
           
                    <b><span id="days" class="text-success display-days"></span></b><b class="text-dark">days</b>
                    <span id="hours" class="display-hours text-dark"></span><b class="text-dark">Hours</b>
                    <span id="minutes" class="display-minutes text-dark"></span><b class="text-dark">Minutes</b>
                    <span id="seconds" class="display-seconds text-dark"></span><b class="text-dark">Seconds</b>
                    <form action="{{asset('/buy-ticket/'.$post->id)}}" method="GET">
                    <button class="btn btn-primary font-size-md btn-lg lh-base btn-block">
                        Buy ticket
                    </button>
                    </form>
                </div>
             
    </div>
                </div>
        </div>
        </div>
    </div>

<div class="container">
<div class="page-container">
    <div class="row">
        <div class="page-content col-xl-8 mb-8 mb-xl-0">
            <div class="explore-details-container">
            <div class="mb-9">
            <h3 class="font-size-lg text-uppercase font-weight-semibold border-bottom pb-1 pt-2 mb-6">
            description
            </h3>
            <h4 class="font-size-md mb-4">Introduce</h4>
                <div class="mb-7">
                <p class="mb-6">
                    {{$post->main_description}}
                </p>
                <p class="mb-0">
                    @php 
                        echo $post->description;
                    @endphp
                    </p>
            </div>

            </div>

            </div>
        </div>
    <div class="sidebar col-xl-4">
        <div class="card p-4 widget border-0 rounded-0 reservation bg-gray-06 mb-6">

        
        <div class="gmap_canvas">
                        <iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q={{$post->geo_address_latitude}}+{{$post->geo_address_longlatitude}}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" 
                            marginwidth="0"></iframe><a href="https://123movies-to.org"></a>
                            <br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style>
                            <a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>
                            .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
                        </div>
        </div>

        <div class="card p-4 widget border-0 bg-gray-06 rounded-0 mb-6">
            <div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
            <span>additional details</span>
            </div>
            <div class="card-body px-0 pb-0">
            <ul class="list-group list-group-flush">
                @if($post->user->userview->company == 'Company')
                <li class="list-group-item bg-transparent d-flex text-dark px-0">
                <label class="mb-0">Company name</label>
                <span class="ml-auto font-weight-semibold">{{$post->user->userview->company_name}}</span>
                </li>
                <li class="list-group-item bg-transparent d-flex text-dark px-0">
                <label class="mb-0">Company representer who post this post</label>
                <span class="ml-auto font-weight-semibold">{{$post->user->userview->firstname}}</span>
                </li>
                @else
                    <li class="list-group-item bg-transparent d-flex text-dark px-0">
                        <label class="mb-0">User who post this post</label>
                        <span class="ml-auto font-weight-semibold">{{$post->user->userview->firstname}} {{$post->user->userview->lastname}}</span>
                    </li>
                @endif

                <li class="list-group-item bg-transparent d-flex text-dark px-0">
                <label class="mb-0">Contact info</label>
                <span class="ml-auto font-weight-semibold">{{$post->user->email}}</span>
                </li>
                <li class="list-group-item bg-transparent d-flex text-dark px-0">
                    <span class="item-icon mr-3"><i class="fa fa-map-marker-alt"></i></span>
                    <span class="card-text">{{$post->full_address}}</span>
                </li>
                @if($post->phone)
                <li class="list-group-item bg-transparent d-flex text-dark px-0">
                    <span class="item-icon mr-3">
                    <i class="fas fa-phone"></i>
                    </span>
                    <span class="card-text">{{$post->phone}}</span>
                </li>
                @else

                @endif
                @if($post->website)
                <li class="list-group-item bg-transparent d-flex text-dark px-0">
                <span class="item-icon mr-3"><i class="fas fa-globe"></i></span>
                <span class="card-text">
                    <a href="{{$post->website}}">{{$post->website}}</a></span>
                </li>
                @else

                @endif

                
                <li class="list-group-item bg-transparent d-flex text-dark px-0 pt-4">
                <div class="social-icon origin-color si-square text-center">
                <ul class="list-inline">
                    @if($post->facebook)
                    <li class="list-inline-item si-facebook">
                    <a target="_blank" title="Facebook" href="{{$post->facebook}}">
                    <i class="fab fa-facebook-f">
                    </i>
                    <span>Facebook</span>
                    </a>
                    </li>
                    @else

                    @endif
                
                    @if($post->linkedin)
                    <li class="list-inline-item si-tumblr">
                    <a target="_blank" title="linkedin" href="#">
                    <i class="fab fa-linkedin"></i><span>Linkedin</span>
                    </a>
                    </li>
                    @else

                    @endif

                    @if($post->whatsapp)
                    <li class="list-inline-item bg-success">
                    <a target="_blank" title="whatsapp" href="#">
                    <i class="fab fa-whatsapp-square"></i><span>whatsaap</span>
                    </a>
                    </li>
                    @else

                    @endif



            </ul>
            </div>
            </div>


            </div>
    <div class="card p-4 widget border-0 gallery bg-gray-06 rounded-0 mb-6">
        <div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
            <span class="text-secondary mr-3">
            <svg class="icon icon-ionicons_svg_md-images">
            <use xlink:href="#icon-ionicons_svg_md-images"></use>
            </svg>
            </span>
            <span> photo gallery</span>
        </div>
        <div class="card-body px-0 pt-6 p-3">
            <div class="photo-gallery d-flex flex-wrap justify-content-between">
            @foreach ($post->images as $pic)
            <a href="{{asset('/images/posts/'.$pic->url)}}" class="photo-item" data-gtf-mfp="true" data-gallery-id="01">
            <img src="{{asset('/images/posts/'.$pic->url)}}" alt="Gallery 01">
            </a>
            @endforeach
            </div>
        </div>
    </div>

    </div>
    </div>
</div>
        <!-- Random active -->
        <div class="row">
        @foreach($randomactiveposts as $p)
        <div class="col-lg-4" data-animate="zoomIn">
                <div class="store card border-0 rounded-0">
                <div class="position-relative store-image">
                    @php 
                        $images = $p->images->first();
                        
                    @endphp
                <a href="{{asset('/categorie='.$p->category->link.'/city='.$p->city->name.'/name='.$p->title)}}" tabindex="0">
                    <img src="{{asset('/images/posts/'.$images->url)}}" alt="{{$images->alt}}" class="card-img-top rounded-0">
                </a>
                <div class="image-content position-absolute d-flex align-items-center">
                <div class="content-left">
                <div class="badge badge-primary">Featured</div>
                </div>
                <div class="content-right ml-auto d-flex w-lg show-link">
                <a href="{{asset('/images/posts/'.$images->url)}}" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" tabindex="0" data-original-title="Quickview">
                <svg class="icon icon-expand">
                <use xlink:href="#icon-expand"></use>
                </svg>
                </a>
                <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" tabindex="0" data-original-title="Bookmark"><i class="fa fa-bookmark"></i></a>
                <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="" tabindex="0" data-original-title="Compare">
                <svg class="icon icon-chart-bars">
                <use xlink:href="#icon-chart-bars"></use>
                </svg>
                </a>
                </div>
                </div>
                </div>
            <div class="card-body px-0 pb-0 pt-3">
                <a href="{{asset('/categorie='.$p->category->link.'/city='.$p->city->name.'/name='.$p->title)}}" class="card-title h5 text-dark d-inline-block mb-2" tabindex="0">
                    <span class="letter-spacing-25">{{$p->title}}</span>
                </a>
                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                    <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">{{$p->count_of_ticket}}</span>
                    <span>numm of tickets are available</span>
                    </li>
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item"><span class="mr-1">From</span>
                    <span class="text-danger font-weight-semibold">€{{$p->price_first}}</span></li>
                    <li class="list-inline-item separate"></li>
                        <li class="list-inline-item">
                        <a href="{{asset('/categorie/'.$p->category->link)}}" class="link-hover-secondary-primary" tabindex="0">
                        <svg class="icon icon-bed">
                        <use xlink:href="#icon-bed"></use>
                        </svg>
                        <span>{{$p->category->name}}</span>
                    </a>
                    </li>
                </ul>
                <div class="media">
                    <div class="media-body lh-14 font-size-sm">
                        {{$p->main_description}}
                    </div>
                    </div>
                    </div>
                    <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                    <li class="list-inline-item">
                    <span class="d-inline-block mr-1">
                    <i class="fa fa-map-marker-alt">
                    </i>
                    </span>
                    <a href="#" class="text-secondary text-decoration-none link-hover-secondary-blue" tabindex="0">
                    {{$p->full_address}}</a>
                    </li>
                    <li class="list-inline-item separate"></li>
                    <li class="list-inline-item">
                    <span class="text-green">Active</span>
                    </li>
                    </ul>
                    </div>
                    </div>
                
        @endforeach
        </div>
        <!-- End Random Active -->
       @include('components.other-categories')
</div>
@endisset




<script>
     
      $('.carousel').carousel({
        interval: 1000 * 20
    })
    let andjica = $('#validuntil').val();
    
    let newdate = new Date(andjica);
  
    let andjicayear = newdate.getFullYear();
    let andjicamonth = newdate.getMonth()+1;
    let andjicaday = newdate.getDate();
    let andjica2 = andjicamonth+"/"+andjicaday+"/";
   
   
       
    (function () {
     
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

      //I'm adding this section so I don't have to keep updating this pen every year :-)
      //remove this if you don't need it
      let today = new Date(),
     
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      //
      dayMonth = andjica2,
      birthday = dayMonth + yyyy;
  
      today = mm + "/" + dd + "/" + yyyy;
      if (today > birthday) {
        birthday = dayMonth + nextYear;
      }
      //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's my birthday!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
      </script>
@endsection