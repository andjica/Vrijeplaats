<div class="sidebar rounded">
  <div class="container-fluid">
    <div class="user-profile media align-items-center mb-6">
      <div class="image mr-3">
            <img src="{{asset('/images/')}}/logo.jpeg" alt="User image" class="rounded-circle" width="70px">
      </div>
      <div class="media-body lh-14">
        <span class="text-dark d-block font-size-md">Hallo,</span>
        <span class="mb-0 h5">{{auth()->user()->name}}</span>
      </div>
      </div>
    <ul class="list-group list-group-flush list-group-borderless">
      <li class="list-group-item p-0 mb-2 lh-15 active">
        <a href="{{asset('/home')}}" class="d-flex align-items-center link-hover-dark-primary font-size-md">
          <span class="d-inline-block mr-3"><i class="fas fa-home"></i></span>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="list-group-item p-0 mb-2 lh-15">
        <a href="{{asset('/user-invoices/')}}" class="d-flex align-items-center link-hover-dark-primary font-size-md">
          <span class="d-inline-block mr-3"><i class="fas fa-bookmark"></i></span>
          <span>Invoices cupons</span>
        </a>
      </li>
      @if(auth()->user()->role_id == 3)
      <li class="list-group-item p-0 mb-2 lh-15">
        <a href="{{asset('/add-adv')}}" class="d-flex align-items-center link-hover-dark-primary font-size-md">
          <span class="d-inline-block mr-3"><i class="fas fa-gift"></i></span>
          <span>Een nieuwe advertentie maken</span>
        </a>
      </li>
      @else

      @endif
      <li class="list-group-item p-0 mb-2 lh-15">
        <a href="#search-popup"class="d-flex align-items-center link-hover-dark-primary font-size-md" data-gtf-mfp="true" data-mfp-options="{&quot;type&quot;:&quot;inline&quot;,&quot;mainClass&quot;:&quot;mfp-move-from-top mfp-align-top search-popup-bg&quot;,&quot;closeOnBgClick&quot;:false,&quot;showCloseBtn&quot;:false}">
          <span class="d-inline-block mr-3"><i class="fas fa-star"></i></span>
          <span>Surf</span>
          <span class=" ml-auto"> <i class="fas fa-search"></i></span>
        </a>
      </li>
      <li class="list-group-item p-0 mb-2 lh-15">
        <a href="{{asset('/bewerk-profiel')}}" class="d-flex align-items-center link-hover-dark-primary font-size-md">
          <span class="d-inline-block mr-3"><i class="fas fa-cogs"></i></span>
          <span>Bewerk profiel</span>
        </a>
      </li>
      <li class="list-group-item p-0 mb-2 lh-15">
        <a href="{{asset('/logout')}}" class="d-flex align-items-center link-hover-dark-primary font-size-md">
          <span class="d-inline-block mr-3"><svg class="icon icon-exit"><use xlink:href="#icon-exit"></use></svg></span>
          <span>Uiloggen</span>
        </a>
      </li>
    </ul>
</div>
</div>