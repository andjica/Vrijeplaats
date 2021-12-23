<div class="list-inline list-w">
        @foreach($categories as $category)
        <div class="list-inline-item py-2 ">
        <form method="POST" action="{{asset('/categorie/location')}}" class="findlocation">
            @csrf
            <input type="hidden" name="categoryId" id="categoryId" value="{{$category->id}}">
            <input type="hidden" class="latitudes" id="latitudes" name="latitude" value="">
            <input type="hidden" class="longlatitudes" id="longlatitudes" name="longlatitude" value="">
            <button type="submit" class="card-pink border-0 link-hover-dark-white icon-box-style-01  shadow-lg">
            <div class="card-body m-auto p-0  st-btn text-white" style="font-size:18px">
               <p class="mt-3 mb-0"> @php echo $category->icon @endphp </p>
                <span class="card-text font-size-md font-weight-semibold d-block text-white">
                {{$category->name}}
                </span>
            </div>
            </button>
            </form>
        </div>
       
        @endforeach
    </div>