@extends('layouts.app')

@section('content')

<div id="wrapper-content" class="wrapper-content pt-0 pb-0 bg-white ma-wrapper">
<div class="container">
<div class="page-container text-center">
<div class="mb-7">
<i class="fas fa-search-location fa-5x"></i>
</div>
<div class="mb-7">
<h3 class="mb-7">Ohh! Page Not Found</h3>
<div class="text-gray">Pagina niet gevonden
Het lijkt erop dat we niet kunnen vinden wat u zoekt. <br>
Misschien kan zoeken helpen of teruggaan naar de startpagina. <a href="{{asset('/')}}" class="text-primary text-decoration-underline">Homepage</a>.
</div>
</div>
<div class="form-search">
<form>
<div class="input-group">
<input type="text" class="form-control" placeholder="Search again...">
<button class="btn btn-link input-group-append text-dark pr-3" type="submit"><i class="fal fa-search"></i></button>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection