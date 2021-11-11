 
<section id="section-03" class="pb-8 our-directory">
<div class="container">
<div class="mb-7">
<h2 class="mb-0">
<span class="font-weight-semibold">Hot Deals </span>
<span class="font-weight-light">Bekijk hier onze vrijeplaatsen</span>
</h2>
</div>

</div>
<div class="container">
<div class="tab-content">
    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all">
        <div class="arrow-top full-slide custom-nav equal-height slick-initialized slick-slider" data-slick-options="{&quot;slidesToShow&quot;: 5,&quot;autoplay&quot;:false,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;: 2000,&quot;settings&quot;: {&quot;slidesToShow&quot;: 4}},{&quot;breakpoint&quot;: 1500,&quot;settings&quot;: {&quot;slidesToShow&quot;: 3}},{&quot;breakpoint&quot;: 1000,&quot;settings&quot;: {&quot;slidesToShow&quot;: 2}},{&quot;breakpoint&quot;: 770,&quot;settings&quot;: {&quot;slidesToShow&quot;: 1}}]}"><div class="slick-list draggable" style="height: 527.65px;"><div class="slick-track" style="opacity: 1; width: 2580px; transform: translate3d(0px, 0px, 0px);">
        @foreach($posts as $p)
        <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 430px;"><div><div class="box" data-animate="fadeInUp" style="width: 100%; display: inline-block;">
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
                </div>
        </div>
        @endforeach
        </div><div class="slick-arrows"></div></div>
        </div>

    </div>
</div>

</section>