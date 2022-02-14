 


<section id="section-03" class="pb-8 our-directory">
<div class="container">
        <div class="row mb-5">
        <div class="col-lg-10 mt-1"> 

        
            <div class="mb-2">
            <h2 class="mb-0 d-flex">
            <span class="d-block slideInLeft animated m-font-intro mr-4">Hot Deals </span> bekijk onze leukste deals
            </h2>
            </div>
    </div>
    <div class="col-lg-2"> 
    <button type="button" class="btn btn-primary" style="     border-radius: 14px !important;
    color: white !important;
    font-size: 15px;
    margin-top: 6px;
    height: 45px;">Bekijk alle deals <i class="fa fa-arrow-right"></i></button>

    </div>
    </div>
</div>
<div class="container">
<div class="row h890">
        @foreach($posts as $p)
        <div class="col-lg-3 p-5" data-animate="zoomIn">
                <div class="store card border-0 rounded-0">
                <div class="position-relative store-image">
                    @php 
                        $images = $p->images->first();
                        
                    @endphp
                <a href="{{asset('/categorie='.$p->category->link.'/city='.$p->city->name.'/name='.$p->title)}}" tabindex="0">
                    <img src="{{asset('/images/posts/'.$images->url)}}" alt="{{$images->alt}}" class="next card-img-top rounded-0">
                </a>
                <div class="image-content position-absolute d-flex align-items-center">
                    <div class="content-left row" style="    height: 40px;
    font-size: 12px !important;">
                        <div class="col-lg-3">
                        <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">{{$p->count_of_ticket}}</span>                   

                        </div>
                        <div class="col-lg-7 ehsad">
                        <span>Tickets beschikbaar</span>
                      <li class="list-inline-item"><span class="mr-1">prijs vanaf</span>
                    <span class="text-danger font-weight-semibold">€{{$p->price_discount}}</span></li>
                        </div>
                     

                    </div>
                    <!--<div class="content-right ml-auto d-flex w-lg show-link">
                        <a href="{{asset('/images/posts/'.$images->url)}}" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" tabindex="0" data-original-title="Quickview">
                            <svg class="icon icon-expand">
                                <use xlink:href="#icon-expand"></use>
                            </svg>
                        </a>
                    </div>-->
                </div>
                </div>
            <div class="card-body px-0 pb-0 pt-3">
                <a href="{{asset('/categorie='.$p->category->link.'/city='.$p->city->name.'/name='.$p->title)}}" aria-label="reizen" class="card-title h5 text-dark d-inline-block mb-2" tabindex="0">
                    <span class="letter-spacing-25">{{$p->title}}</span>
                </a>
                <ul class="list-inline store-meta mb-0 font-size-sm d-flex align-items-center flex-wrap">
                   
                  
                      
                </ul>
                <div class="media">
                    <div class="media-body lh-14 font-size-sm">
                        {{$p->main_description}}
                    </div>
                    </div>

             </div>
                  <div class="pacakge">
                    <div class="col-md-12 mss d-flex">
                        <div class="col-lg-2">
                        <i class="fa fa-map-marker-alt">
                    </i> 
                        </div>
                        <div class="col-lg-10">
                        <small class="text-secondary text-decoration-none link-hover-secondary-blue" tabindex="0">
                    {{$p->full_address}}</small>
                        </div>
                   
                    </div>
                  
                   
                    <div class="col-md-12 mss neww">
                        <a href="{{asset('/categorie/'.$p->category->link)}}" class="link-hover-secondary-primary" tabindex="0">
                            <svg class="icon icon-bed">
                            <use xlink:href="#icon-bed"></use>
                            </svg>
                            <span>{{$p->category->name}}</span>
                         </a>
                    </div>
                </div>
                   
                  
                 
                    </div>
                    </div>
                
        @endforeach
        </div>
        </div>

</section>


<style>
.next:hover {
    background: white;
    padding: 20px;
    content: '->';
    display: block !important;
    z-index: 1000000 !important;
    text-align: center;
    justify-content: center;
    margin: 0px auto;
    left: 37%;
    top: 16%;
    border-radius: 100%;
    border: 5px solid orange;
}
span.next{

display:none;
}
.bg-coupon {
    background-image: url(../images/other/gradient.jpg);
    height: 300px;
    width: 68% !important;
    margin: 0px auto;
    border-radius: 60px;
    color: white !important;
    background: #363665;
}
    .pacakge {
    position: fixed;
    bottom: 6px;
}
.store .media-body {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    height: 200px;
    max-height: 200px !important;
    overflow: clip;
    font-size:12px !important;
}
svg.svg-inline--fa.fa-map-marker-alt.fa-w-12 {
    overflow: visible;
    font-size: 26px !important;
    padding-top: 6px;
    color: #09c;
}
    .store.card {
    display: block;
    height: 100%;
}
    .card-body.px-0.pb-0.pt-3 {
    padding: 10px !important;
}
.col-md-12.mss.neww {
    font-size: 15px;
    line-height: 2.4;
    padding-left: 23px;
}
.store .icon {
    fill: #09c;
    font-size: 23px;
    margin-right: 10px;
}
    .col-md-12.mss {
    padding: 6px;
    background: white;
    border-radius: 10px !important;
    margin-left: 10px;
    width: 93%;
    margin-right: 10px;
    margin-bottom: 5px;
    font-size: 13px;
    font-weight: bold;
    height: 50px;
}
   .store .content-left .badge {
    padding: 5px 8px;
    width: 72px;
    height: 40px;
    text-align: center;
    border-radius: 10px;
    padding-top: 10px;
    font-size: 19px;
    background: blue;
    margin-left: -11px;
}
    .col-lg-3.p-5.zoomIn.animated {
    padding: 5px !important;
}
img.card-img-top.rounded-0 {
    height: 250px !important;
    object-fit: cover;
    padding:6px;
}
.image-content.position-absolute.d-flex.align-items-center {
    background: white !important;
    width: 94%;
    bottom: 9px;
    margin: 0px auto !important;
    text-align: center;
    margin-left: 9px !important;
    height: 48px;
    margin-right: 4px !important;
    border-radius: 13px !important;
    margin-top: -4px !important;
}
.col-lg-7 {
    text-align: left;
    font-weight: bold;
    color: black;
}
span.mr-1 {
    color: #ed008c;
}
span.text-danger.font-weight-semibold{
    color: #ed008c !important;

}
.h890{
    width: 1157px;
    margin: 0px auto;
}
a.link-hover-secondary-primary {
    color: grey !important;
}
</style>
