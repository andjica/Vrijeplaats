<div class="list-inline list-w bg-blue">
        @foreach($categories as $category)
        <div class="list-inline-item py-2 ">
        <form method="POST" action="{{asset('/categorie/location')}}" class="findlocation">
            @csrf
            <input type="hidden" name="categoryId" id="categoryId" value="{{$category->id}}">
            <input type="hidden" class="latitudes" id="latitudes" name="latitude" value="">
            <input type="hidden" class="longlatitudes" id="longlatitudes" name="longlatitude" value="">
            <button type="submit" class="card-pink border-0 link-hover-dark-white icon-box-style-01  shadow-lg">
            <div class="card-body m-auto p-0  st-btn text-white" style="font-size:18px">
            <img src="{{asset('/icons/'.$category->icon)}}" class="img-fluid1">
                <span class="card-text font-size-md font-weight-semibold d-block text-white">
                {{$category->name}}
                </span>
            </div>
            </button>
            </form>
        </div>
       
        @endforeach
    </div>

    <style>

        .bg-blue{
            background:blue;
            border-radius:10px;

        }
        button.card-pink.border-0.link-hover-dark-white.icon-box-style-01.shadow-lg {
    background: white;
    color: black !important;
    border-radius: 10px;
}
.card.mt-5 {
    margin-top: 1.5rem!important;
    border-radius: 16px !important;
    background: blue;
    color: white !important;
}
p.mt-3.mb-0 {
    color: black !important;
    font-size: 26px;
}
.card-text:last-child {
    margin-bottom: 0;
    font-size: 10px!important;
    color: black !important;
}
.d-flex.align-items-center.flex-wrap.flex-lg-nowrap.border-bottom.py-4.py-lg-0 {
    background: white !important;
    margin-bottom: 10px !important;
    border-radius: 16px !important;
    border: 4px solid #e5e5e5 !important;
    padding: 10px;
}
a.btn.btn-primary.btn-icon-left.mb-2.mb-sm-0.px-5.font-size-md {
    border-radius: 8px;
    color: white !important;
    width: 100% !important;
    background: #ed008c !important;
}
.ml-0.ml-sm-auto.col-lg-6 {
    width: 100%;
    background: #f5f5f5 !important;
    line-height: 1;
    padding-top: 15px;
    color: black !important;
}
a.text-secondary.text-decoration-none.address {
    font-size: 10px;
    background: #f5f5f5 !important;
    padding: 10px;
}
.gm-style-iw-d {
    border-radius: 10px !important;
}
.gm-style .gm-style-iw-c {
    max-width: 225px!important;
    border-radius: 10px !important;
}
b.text-dark {
    font-weight: bold;
    color: black !important;
    font-size: 15px;
}
.gm-style img {
    max-width: none;
    width: 100%;
    margin: 0 auto;
}
.g-btn {
    padding: 2px!important;
    background: #ed008c!important;
    color: white !important;
    width: 100% !important;
}
    </style>