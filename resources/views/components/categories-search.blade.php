<div class="list-inline list-w bg-blue p-2">
        @foreach($categories as $category)
        <div class="list-inline-item py-2 ">
        <form method="POST" action="{{asset('/categorie/location')}}" class="findlocation">
            @csrf
            <input type="hidden" name="categoryId" id="categoryId" value="{{$category->id}}">
            <input type="hidden" class="latitudes" id="latitudes" name="latitude" value="">
            <input type="hidden" class="longlatitudes" id="longlatitudes" name="longlatitude" value="">
            <button type="submit" class="card-pink border-0 link-hover-dark-white icon-box-style-01  shadow-lg">
            <div class="card-body m-auto p-0  st-btn" style="font-size:18px">
            <img src="{{asset('/icons/'.$category->icon)}}" class="img-fluid1 mt-3" width="45px">
                <span class="card-text  font-weight-semibold d-block text-center">
                {{$category->name}}
                </span>
            </div>
            </button>
            </form>
        </div>
       
        @endforeach
    </div>
