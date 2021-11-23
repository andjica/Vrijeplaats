<form id="editinfo" action="{{asset('edit-user-info')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="card rounded-0 border-0 bg-white px-4 pt-3 pb-6 bg-light">
<div class="card-header p-0 bg-transparent"><h5 class="card-title text-capitalize">Profiel Details
</h5>
</div>
<div class="card-body px-0 pt-4 pb-0">
<div class="profile media d-flex align-items-center flex-wrap">

<div class="image mb-4">
@if(auth()->user()->userview->image != null)
<img src="{{asset('/images')}}/users/{{auth()->user()->userview->image}}" alt="User image" class="rounded-circle" width="120px">

@else
    <img src="{{asset('/')}}/images/listing/client-2.png" alt="User image" class="rounded-circle">
    @endif
</div>

<div class="form-group">
<input type="file" name="userimage2" id="userimage2" class="form-control-file btn btn-primary">
<small id="imageerror2"></small>
</div>

</div>
<div class="">

<div class="form-row mb-2">
<div class="col-sm-6 mb-2 mb-sm-0">
<label for="firstname2" class="font-size-md text-dark font-weight-semibold mb-1">Voornaam
<span class="text-danger">*</span></label>
<input class="form-control" id="firstname2" name="firstname2" type="text" value="{{auth()->user()->name}}">
<small id="firstname2empty" class="text-danger"></small>
</div>
<div class="col-sm-6">
<label for="lastname2" class="font-size-md text-dark font-weight-semibold mb-1">Achternaam
<span class="text-danger">*</span></label>
<input class="form-control" id="lastname2" name="lastname2" type="text" value="{{auth()->user()->userview->lastname}}">
<small id="lastname2empty" class="text-danger"></small>
</div>
</div>
<div class="form-row mb-2">
<div class="col-sm-6 mb-2 mb-sm-0">
<label for="email2" class="font-size-md text-dark font-weight-semibold mb-1">E-mail Adres
<span class="text-danger">*</span></label>
<input class="form-control" id="email2" name="email2" type="text" value="{{auth()->user()->email}}">
<small id="empty2email" class="text-danger"></small>
</div>
<div class="col-sm-6">
<label for="phone2" class="font-size-md text-dark font-weight-semibold mb-1">Telefoon
<span class="text-secondary font-weight-normal">(Optional)</span></label>
<input class="form-control" id="phone2" name="phone2" type="text" value="{{auth()->user()->userview->phone}}" placeholde="+316652158987">
<small id="phone2error" class="text-danger"></small>
</div>
</div>
<div class="form-group mb-2">
<label for="usercategory2" class="font-size-md text-dark font-weight-semibold mb-1">Voor welke doeleinden gebruikt u de website?</label>
<select class="form-control" name="usercategory2" id="usercategory2"> 
    @if(auth()->user()->userview->company == "USER")
    <option value="USER">For me - like user</option> 
    <option value="Company" id="company">For Company, company representer</option> 
    @else
    <option value="Company">For Company, company representer</option> 
    <option value="USER" id="user">For me - like user</option> 
    @endif
</select>

</div>
@if(auth()->user()->role_id == 3)
<div class="findrole2" id="findrole2">
<div class="form-group mb-4 pt-3 pb-3">
             <div class="mb-2 d-flex align-items-center lh-15">
             <label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="companyname">Company name</label>
                <input type="text" class="form-control" id="companyname" name="companyname" value="{{auth()->user()->userview->company}}"> 
                <small class="text-danger" id="companyname-er"></small>
            </div>
        </div>
        <div class="form-group mb-4 pt-3 pb-3">
             <div class="mb-2 d-flex align-items-center lh-15">
             <label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="companykvk">Company KVK nummber</label>
                <input type="text" class="form-control" id="companykvk" name="companykvk" value="{{auth()->user()->userview->company_kvk}}"> 
                <small class="text-danger" id="companykvk-er"></small>
            </div>
        </div>
        <div class="form-group mb-4 pb-3">
             <div class="mb-2 d-flex align-items-center lh-15">
             <label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="companybtw">Company BTW nummber</label>
                <input type="text" class="form-control" id="companybtw" name="companybtw" value="{{auth()->user()->userview->company_btw}}">
            </div>
        </div>
</div>
<div class="form-group mb-4 pt-3 pb-3">
<div class="form-group mb-4 pt-3 pb-3">
             <div class="mb-2 d-flex align-items-center lh-15">
             <label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="companykvk">Post code</label>
                <input type="text" class="form-control" id="postcode" name="postcode" value="{{auth()->user()->userview->post_code}}"> 
                <small class="text-danger" id="postcode-er"></small>
            </div>
        </div>
</div> 
@else
<div class="findrole" id="findrole" style="display:none">
        <div class="form-group mb-4 pt-3 pb-3">
             <div class="mb-2 d-flex align-items-center lh-15">
             <label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="companykvk">Company KVK nummber</label>
                <input type="text" class="form-control" id="companykvk" name="companykvk" value="{{auth()->user()->userview->company_kvk}}"> 
                <small class="text-danger" id="companykvk-er"></small>
            </div>
        </div>
        <div class="form-group mb-4 pb-3">
             <div class="mb-2 d-flex align-items-center lh-15">
             <label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="companybtw">Company BTW nummber</label>
                <input type="text" class="form-control" id="companybtw" name="companybtw" value="{{auth()->user()->userview->company_btw}}">
            </div>
        </div>
</div>
@endif
<div class="form-group mb-4">
            <div class="mb-2 d-flex align-items-center lh-15">
            <label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="address">Your Full Address
            (Geolocation) </label>
            <input type="text" name="autocompleteaddress" id="autocomplete" class="form-control" placeholder="Enter Location" value="{{auth()->user()->userview->address}}">

                <input type="hidden" id="latitude" name="adresslatitude" class="form-control">
                <input type="hidden" name="adresslongitude" id="longitude" class="form-control">
               
            </div>
            <small class="text-danger" id="address-er"></small>
</div>

<div class="form-group mb-2">
<label for="bio2" class="font-size-md text-dark font-weight-semibold mb-1">Bio</label>
<textarea class="form-control" id="bio2" name="bio2" placeholder="Korte omschrijving over jou...">{{auth()->user()->userview->bio}}</textarea>
</div>
<div class="form-row mb-6">
<div class="col-md-4 mb-2 mb-md-0">
<label for="linkedin2" class="font-size-md text-dark font-weight-semibold mb-1">LinkedIn
</label>
<input class="form-control" id="linkedin2" name="linkedin2" type="text" placeholder="Twitter URL" value="{{auth()->user()->userview->linkedin}}">
<small id="linkedin2error" class="text-danger"></small>

</div>
<div class="col-md-4 mb-2 mb-md-0">
<label for="facebook2" class="font-size-md text-dark font-weight-semibold mb-1">Facebook
</label>
<input class="form-control" id="facebook2" name="facebook2" type="text" placeholder="Facebook URL" value="{{auth()->user()->userview->facebook}}">
<small id="facebook2error" class="text-danger"></small>

</div>
<div class="col-md-4">
<label for="instagram2" class="font-size-md text-dark font-weight-semibold mb-1">Instagram
Plus
</label>
<input class="form-control" id="instagram2" name="instagram2" type="text" placeholder="Instagram URL" value="{{auth()->user()->userview->instagram}}">
<small id="instagram2error" class="text-danger"></small>
</div>
</div>
<input type="hidden" name="email" value="{{auth()->user()->email}}">
<input type="submit" class="btn btn-primary btn-block font-size-lg" value="Save Change">
</form>