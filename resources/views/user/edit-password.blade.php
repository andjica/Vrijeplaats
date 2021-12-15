<form class="mt-3" action="{{route('change.password')}}" method="POST">
    @csrf
  
  
    
<div class="card-header p-0 bg-transparent"><h5 class="card-title text-capitalize">Wachtwoord wijzigen
</h5>
</div>
<div class="mb-3 mt-5">
    <label for="currentpassword" class="font-size-md text-dark font-weight-semibold mb-1">Huidig ​​wachtwoord</label>
    <input id="password" type="password" class="form-control" name="currentpassword" autocomplete="current-password">
    @if ($errors->has('currentpassword'))
    <div class="text-danger">
        <strong>{{ $errors->first('currentpassword') }}</strong>
        </div>
    @endif
</div>
  <div class="mb-3 mt-5">
    <label for="newpassword" class="font-size-md text-dark font-weight-semibold mb-1">Nieuw paswoord</label>
    <input type="password" class="form-control" id="newpassword" name="newpassword" aria-describedby="passwordhelp">
    @if ($errors->has('newpassword'))    
    <div class="text-danger">
        <strong>{{$errors->first('newpassword')}}</span> 
    </div>
    @endif
  </div>
  <div class="mb-3">
    <label for="newconfirmpassword" class="font-size-md text-dark font-weight-semibold mb-1">Bevestig wachtwoord</label>
    <input type="password" class="form-control" id="newconfirmpassword" name="newconfirmpassword">
    @if ($errors->has('newconfirmpassword'))    
    <div class="text-danger">
        <strong>{{$errors->first('newconfirmpassword')}}</span> 
    </div>
    @endif
  </div>
  
  <button type="submit" class="btn btn-primary">Opslaan</button>
</form>