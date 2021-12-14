<form id="insertinfo" action="{{asset('/insert-user-info')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="card rounded-0 border-0 bg-white px-4 pt-3 pb-6">
<div class="card-header p-0 bg-transparent"><h5 class="card-title text-capitalize">Profiel Details
</h5>
</div>
<div class="card-body px-0 pt-4 pb-0">
<div class="profile media d-flex align-items-center flex-wrap">
<div class="image mb-4">
    <img src="{{asset('/')}}/images/listing/client-2.png" alt="User image" class="rounded-circle">
</div>

<div class="form-group">
<input type="file" name="userimage" id="userimage" class="form-control-file btn btn-primary">
<small id="imageerror"></small>
</div>

</div>
<div class="">

<div class="form-row mb-2">
<div class="col-sm-6 mb-2 mb-sm-0">
<label for="firstname" class="font-size-md text-dark font-weight-semibold mb-1">Voornaam
<span class="text-danger">*</span></label>
<input class="form-control" id="firstname" name="firstname" type="text" value="{{auth()->user()->name}}">
<small id="firstnameempty" class="text-danger"></small>
</div>
<div class="col-sm-6">
<label for="lastname" class="font-size-md text-dark font-weight-semibold mb-1">Achternaam
<span class="text-danger">*</span></label>
<input class="form-control" id="lastname" name="lastname" type="text" value="">
<small id="lastnameempty" class="text-danger"></small>
</div>
</div>
<div class="form-row mb-2">
<div class="col-sm-6 mb-2 mb-sm-0">
<label for="email" class="font-size-md text-dark font-weight-semibold mb-1">E-mail Adres
<span class="text-danger">*</span></label>
<input class="form-control" id="email" name="email" type="text" value="{{auth()->user()->email}}">
<small id="emptyemail" class="text-danger"></small>
</div>
<div class="col-sm-6">
<label for="phone" class="font-size-md text-dark font-weight-semibold mb-1">Telefoon
<span class="text-secondary font-weight-normal">(Optional)</span></label>
<input class="form-control" id="phone" name="phone" type="text" placeholder="+84912686868">
<small id="phoneerror" class="text-danger"></small>
</div>
</div>
<div class="form-group mb-2">
<label for="usercategory" class="font-size-md text-dark font-weight-semibold mb-1">Voor welke doeleinden gebruikt u de website?</label>
<select class="form-control" name="usercategory" id="usercategory"> 
    <option value="USER">For me - like user</option> 
    <option value="Company">For Company, company representer</option> 
</select>

</div>

<div class="form-group mb-4">
            <div class="mb-2 d-flex align-items-center lh-15">
            <label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="address">Your Full Address
            (Geolocation) </label>
            <input type="text" name="autocompleteaddress" id="autocomplete" class="form-control" placeholder="Enter Location">

                <input type="hidden" id="latitude" name="adresslatitude" class="form-control">
                <input type="hidden" name="adresslongitude" id="longitude" class="form-control">
               
            </div>
            <small class="text-danger" id="address-er"></small>
</div>
<div class="form-group mb-2">
<label for="bio" class="font-size-md text-dark font-weight-semibold mb-1">Bio</label>
<textarea class="form-control" id="bio" name="bio" placeholder="Korte omschrijving over jou..."></textarea>
</div>
<div class="form-row mb-6">
<div class="col-md-4 mb-2 mb-md-0">
<label for="linkedin" class="font-size-md text-dark font-weight-semibold mb-1">LinkedIn
</label>
<input class="form-control" id="linkedin" name="linkedin" type="text" placeholder="Twitter URL">
<small id="linkedinerror" class="text-danger"></small>

</div>
<div class="col-md-4 mb-2 mb-md-0">
<label for="facebook" class="font-size-md text-dark font-weight-semibold mb-1">Facebook
</label>
<input class="form-control" id="facebook" name="facebook" type="text" placeholder="Facebook URL">
<small id="facebookerror" class="text-danger"></small>

</div>
<div class="col-md-4">
<label for="instagram" class="font-size-md text-dark font-weight-semibold mb-1">Instagram
Plus
</label>
<input class="form-control" id="instagram" name="instagram" type="text" placeholder="Instagram URL">
<small id="instagramerror" class="text-danger"></small>
</div>
</div>
<input type="submit" class="btn btn-primary btn-block font-size-lg" value="Opslaan">
</form>