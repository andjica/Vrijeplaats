
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  @foreach ($post->images as $pic)
            @if ($loop->first)
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('/images/posts/'.$pic->url)}}" alt="{{$pic->alt}}">
    </div>
    @endif
    @endforeach
    @foreach ($post->images as $pic)
    @if ($loop->first) @continue @endif
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('/images/posts/'.$pic->url)}}" alt="Second slide">
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

