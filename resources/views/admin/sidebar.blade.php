<div class="sidebar">
<div class="container-fluid">
<div class="user-profile media align-items-center mb-6">
<div class="image mr-3">
    <img src="{{asset('/images/')}}/logo.jpeg" alt="User image" class="rounded-circle" width="70px">
</div>
 <div class="media-body lh-14">
<span class="text-dark d-block font-size-md">Howdy,</span>
<span class="mb-0 h5">{{auth()->user()->name}}</span>
</div>
</div>
<ul class="list-group list-group-flush list-group-borderless">
<li class="list-group-item p-0 mb-2 lh-15 active">
<a href="{{asset('/admin-home')}}" class="d-flex align-items-center link-hover-dark-primary font-size-md">
<span class="d-inline-block mr-3"><i class="fas fa-cog"></i></span>
<span>Dashboard</span>
</a>
</li>
<li class="list-group-item p-0 mb-2 lh-15">
<a href="#listing" class="d-flex align-items-center link-hover-dark-primary font-size-md" data-toggle="collapse" aria-expanded="fasse">
<span class="d-inline-block mr-3"><svg class="icon icon-layers"><use xlink:href="#icon-layers"></use></svg></span>
<span>Posts</span>
<span class=" ml-auto">
    <i class="fas fa-chevron-down"></i></span>
</a>
<ul class="submenu collapse list-group list-group-flush list-group-borderless pt-2 mb-0 sidebar-menu" id="listing">
<li class="list-group-item p-0 mb-2 lh-15">
    <a href="{{asset('/admin-posts')}}" class="link-hover-dark-primary font-size-md">All posts</a></li>
</ul>
</li>
<li class="list-group-item p-0 mb-2 lh-15">
<a href="{{asset('/admin-invoices')}}" class="d-flex align-items-center link-hover-dark-primary font-size-md">
<span class="d-inline-block mr-3"><i class="fas fa-bookmark"></i></span>
<span>Invoices accounts</span>
</a>
</li>
<li class="list-group-item p-0 mb-2 lh-15">
<a href="{{asset('/admin-coupon-invoices')}}" class="d-flex align-items-center link-hover-dark-primary font-size-md">
<span class="d-inline-block mr-3"><i class="fas fa-bookmark"></i></span>
<span>Invoices coupons</span>
</a>
</li>

<!-- <li class="list-group-item p-0 mb-2 lh-15">
<a href="{{asset('/admin-users')}}" class="d-flex align-items-center link-hover-dark-primary font-size-md">
<span class="d-inline-block mr-3"><i class="fas fa-gift"></i></span>
<span>All Users</span>
</a>
</li> -->
<li class="list-group-item p-0 mb-2 lh-15">
<a href="#adcampaign" class="d-flex align-items-center link-hover-dark-primary font-size-md" data-toggle="collapse" aria-expanded="fasse">
<span class="d-inline-block mr-3"><i class="fas fa-bullhorn"></i></span>
<span>New partners</span>
<span class=" ml-auto"><i class="fas fa-chevron-down"></i></span>
</a>
<ul class="submenu collapse list-group list-group-flush list-group-borderless pt-2 mb-0 sidebar-menu" id="adcampaign">
<li class="list-group-item p-0 mb-2 lh-15">
    <a href="{{asset('/admin-partners')}}" class="link-hover-dark-primary font-size-md">
New partners</a></li>

</ul>
</li>
<li class="list-group-item p-0 mb-2 lh-15">
<a href="#users" class="d-flex align-items-center link-hover-dark-primary font-size-md" data-toggle="collapse" aria-expanded="fasse">
<span class="d-inline-block mr-3"><i class="fas fa-users"></i></span>
<span>Users</span>
<span class=" ml-auto"> <i class="fas fa-chevron-down"></i></span>
</a>
<ul class="submenu collapse list-group list-group-flush list-group-borderless pt-2 mb-0 sidebar-menu" id="users">
<li class="list-group-item p-0 mb-2 lh-15">
    <a href="{{asset('/users')}}" class="link-hover-dark-primary font-size-md">Alle users</a></li>
<li class="list-group-item p-0 mb-2 lh-15">
    <a href="{{asset('/companies')}}" class="link-hover-dark-primary font-size-md">Alle companies</a></li>
</ul>
</li>
<li class="list-group-item p-0 mb-2 lh-15">
<a href="#review" class="d-flex align-items-center link-hover-dark-primary font-size-md" data-toggle="collapse" aria-expanded="fasse">
<span class="d-inline-block mr-3"><i class="fas fa-star"></i></span>
<span>Categories</span>
<span class=" ml-auto"> <i class="fas fa-chevron-down"></i></span>
</a>
<ul class="submenu collapse list-group list-group-flush list-group-borderless pt-2 mb-0 sidebar-menu" id="review">
<li class="list-group-item p-0 mb-2 lh-15">
    <a href="{{asset('/create-category')}}" class="link-hover-dark-primary font-size-md">Maak een categorie</a></li>
<li class="list-group-item p-0 mb-2 lh-15">
    <a href="{{asset('/categories')}}" class="link-hover-dark-primary font-size-md">Alle categorieën</a></li>
</ul>
</li>
<li class="list-group-item p-0 mb-2 lh-15">
<a href="panel-my-profile.html" class="d-flex align-items-center link-hover-dark-primary font-size-md">
<span class="d-inline-block mr-3"><svg class="icon icon-user"><use xlink:href="#icon-user"></use></svg></span>
<span>My Profile</span>
 </a>
</li>
<li class="list-group-item p-0 mb-2 lh-15">
<a href="#" class="d-flex align-items-center link-hover-dark-primary font-size-md">
<span class="d-inline-block mr-3"><svg class="icon icon-exit"><use xlink:href="#icon-exit"></use></svg></span>
<span>Logout</span>
</a>
</li>
</ul>
</div>
</div>