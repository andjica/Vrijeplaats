@php
    $timenow = \Carbon\Carbon::now();
    
    
    $post = \App\Post::where('category_id', 2)
    ->where('valid_until', '>', $timenow)
    ->inRandomOrder()->first();
    
@endphp
@isset($post)
<div class="top-campaign">
    <div class="container">
        <div class="d-flex top-campaign-container">
            <div class="content-s col-lg-8 klucic">   
        Mega up to
         <span class="font-weight-bold"></span>{{$post->title}}
                @php 
                    $image = $post->images;
                    $image = $image->first();
                @endphp
                @isset($image)
                     <img src="{{asset('/images/posts/'.$image->url)}}" class="img-fluid" style="width: 82px;
    border-radius: 14px;
    margin-top: -2px;
    float: right;
    margin-right: -205px;
    max-height: 56px;
    height: 56px;"> 

                @endisset
            </div>
            <div class="col-lg-4">
            <a href="{{asset('/categorie='.$post->category->link.'/city='.$post->city->name.'/name='.$post->title)}}" class="code"> Coupon Kopen! <i class="fa fa-shopping-cart"></i> </a> 

            </div>

        </div>

    </div>
</div>
@endisset


<style>
    .klucic{
        color: white !important;
    font-weight: bold;
    font-size: 19px;
    line-height: 2.4;
    }
    .top-campaign .code {
    background: white;
    display: inline-block;
    color: #ed008c !important;
    right: -24px;
    font-weight: 600;
    position: relative;
    width: 184px !important;
    text-align: center !important;
    height: 52px !important;
    border-radius: 14px;
    float: right;
    line-height: 3 !important;
}
.home-main-intro .heading h1 {
    font-size: 62px !important;
    line-height: .93;
    letter-spacing: -.05em;
}

ul.navbar-nav.container {
    margin-top: -10px;
}
</style>