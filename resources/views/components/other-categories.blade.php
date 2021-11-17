

<section id="section-05" class="pt-11 pb-11">
<div class="container">
<div class="d-flex align-items-center mb-7 flex-wrap flex-sm-nowrap">
<h2 class="mb-3 mb-sm-0">
<span class="font-weight-semibold">Some</span>
<span class="font-weight-light">
De laatste</span>
</h2>
<a href="{{asset('/all-categories')}}" class="link-hover-dark-primary ml-0 ml-sm-auto w-100 w-sm-auto">
<span class="font-size-md d-inline-block mr-1">All tickets</span>
<i class="fa fa-chevron-right"></i>
</a>
</div>
<div class="row">
        @foreach($lastposts as $p)
        <div class="col-md-4 mb-4" data-animate="zoomIn">
            <div class="card border-0">
                <a href="{{asset('/categorie='.$p->category->link.'/city='.$p->city->name.'/name='.$p->title)}}" class="hover-scale">
                    @php $images = $p->images->first();
                    @endphp
                    <img src="{{asset('/images/posts/'.$images->url)}}" alt="product 1" class="card-img-top image">
                </a>
                <div class="card-body px-0">
                <div class="mb-2">
                   {{$p->full_address}}</div>
                <h5 class="card-title lh-13 letter-spacing-25">
                    <a href="{{asset('/categorie='.$p->category->link.'/city='.$p->city->name.'/name='.$p->title)}}" class="link-hover-dark-primary">
                {{$p->title}}</a>
                </h5>
                <ul class="list-inline">
                    <li class="list-inline-item mr-0">
                        <span class="text-gray">Active until {{$p->valid_until}}</span>
                    </li>
                    <li class="list-inline-item">
                        <a href="" class="link-hover-dark-primary">created by: {{$p->user->userview->firstname}} {{$p->user->userview->lastname}}</a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
        @endforeach
</div>
</div>
</section>