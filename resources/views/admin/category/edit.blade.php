<form action="{{asset('/edit-category')}}" method="POST" class="mt-3">
    @csrf
    <input type="hidden" name="categoryId" value="{{$category->id}}">
  <div class="form-group mt-2 mb-4">
    <label for="categoryname" class="lead">Category name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
  </div>
  <div class="form-group mt-2 mb-4">
    <label for="categoryactive" class="lead">{{$category->name}} Categorie is @if($category->active == "YES")<span class="text-success">Actief @endif</label>
    <select name="active" class="custom-select">
    @if($category->active == "YES")
        <option class="form-control" value="YES">Actief</option>
        <option class="form-control" value="No">No Actief</option>
        @else
        <option class="form-control" value="No">No Actief</option>
        <option class="form-control" value="YES">Actief</option>

        @endif
    </select>
  </div>
  <div class="form-group mt-2 mb-4">
    <label for="categorytax" class="lead">Belastingen wijzigen</label>
    <select name="tax" class="custom-select">
    @if($category-> tax == NULL)
        <option class="form-control" value="21">21%</option>
        <option class="form-control" value="6">6%</option>
    @elseif($category->tax == 21)
        <option class="form-control" value="21">21%</option>
        <option class="form-control" value="6">6%</option>
        @else
        <option class="form-control" value="6">6%</option>
        <option class="form-control" value="21">21%</option>

        @endif
    </select>
  </div>
  <div class="form-group">
    <label for="description" class="lead">Beschrijving</label>
    <textarea class="form-control"  name="description" id="description" rows="3">{{$category->description}}</textarea>
  </div>
   
    <p class="lead text-success ml-3">
    Huidig ​​icoon<br>
        @php echo $category->icon @endphp<br>
    </p>
    @foreach($icons as $i)
    <div class="form-check fa-2x m-4" style="display:inline-block">
    <input class="form-check-input" type="radio" value="{{$i->id}}" name="icons[]" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
    <p class="dispay-4">@php echo $i->name @endphp</p>
    </label>
    

    </div>
    @endforeach
    @if ($errors->has('icons'))  <p style="color:red;">{{$errors->first('icons')}}</p> @endif
    @if ($errors->has('icons'))  <p style="color:red;">{{$errors->first('icons')}}</p> @endif
    <input type="submit" class="btn btn-success btn-lg btn-block" value="Wijzigingen opslaan">
</form>