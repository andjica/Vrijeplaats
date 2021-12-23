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
            <div class="content-s">   
        Mega up to
         <span class="font-weight-bold">30% off </span>{{$post->title}}
                @php 
                    $image = $post->images;
                    $image = $image->first();
                @endphp
                @isset($image)
                    <img src="{{asset('/images/posts/'.$image->url)}}" class="img-fluid" width="60px"> 
                @endisset
                er achter komen <a href="{{asset('/categorie='.$post->category->link.'/city='.$post->city->name.'/name='.$post->title)}}" class="code"> koop coupon</a> <span class="font-weight-bold">onderneem actie !</span>
            </div>
        <div class=" ml-auto campaign-action">
        <a href="#" id="campaign-close-button" class="close-button">
            <i class="fa fa-times"></i></a>
        </div>
        </div>
    </div>
</div>
@endisset