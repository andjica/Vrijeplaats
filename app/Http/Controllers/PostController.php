<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Post;
use App\Image;
use App\City;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            // 'images[]' => 'mimes:jpeg, png, jpg, gif, svg',
            'category' => 'required|not_in:0',
            'title' => 'required'
           
        ],
        [
            'category.not_in' => 'You must choose category',
            'title.required' => 'Title doesnt exist'
            // 'images[].mimes' => 'Image must be in: jpeg,jpg,png extensions',
           
        ]);
        
     
        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->title = request()->title;
        $post->main_description = request()->shortdesc;
        $post->category_id = request()->category;
        $post->phone = request()->phone;
        $post->website = request()->website;
        $post->count_of_ticket = request()->tickets;
        $post->whatsapp = request()->whatsapp;
        $post->linkedin = request()->linkedin;
        $post->youtube = request()->youtube;
        $post->facebook = request()->facebook;
        $post->instagram = request()->instagram;
        $post->price_discount = request()->currentprice;
        $post->price_first = request()->firstprice;
        $post->valid_until = request()->validuntil;
    
        //city
        $city = City::where('name', request()->autocompletecity)->first();
        if($city == null)
        {
            $newCity = new City();
            $newCity->name = request()->autocompletecity;
            $newCity->geo_latitude = request()->citylatitude;
            $newCity->geo_long_latitude = request()->citylongitude;
            $newCity->save();

            $post->city_id = $newCity->id;
        }
        else
        {
            $post->city_id = $city->id;
        }

        $post->geo_city_latitude = request()->citylatitude;
        $post->geo_city_longlatitude = request()->citylongitude;

        //adress
        $post->full_address = request()->autocompleteaddress;
        $post->geo_address_latitude = request()->adresslatitude;
        $post->geo_address_longlatitude = request()->adresslongitude;

        //summernote texteditor
        $description = request()->description;

        $dom = new \DomDocument();

        @$dom->loadHtml(mb_convert_encoding($description, 'HTML-ENTITIES', 'UTF-8'));

        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){

        
            $data = $img->getAttribute('src');

            list($type, $data) = explode(';', $data);

            list($type, $data) = explode(',', $data);

            $data = base64_decode($data);

            $image_name= time().$k.'.png';

            $path = public_path('/images/posts') . $image_name;
        
            file_put_contents($path, $data);

            $img->removeAttribute('src');

            $img->setAttribute('src', "{{asset('/images/summernote/')}}".$image_name);
    
        }
       
        $post->description = $description;
       
        $post->save();

        //images
        if(request()->images)
        {
            
           
            $andjica = request()->file('images');
          
         
            foreach ($andjica as $item):
                $var = date_create();
                
                $time = date_format($var, 'YmdHis');
                $andjica = request()->file('image');
                $name = $time.$item->getClientOriginalName();
            
                $destinationPath = public_path('/images/posts');

                $item->move($destinationPath, $name);

                try{
                    Image::create(
                        array(
                            'url' => $name,
                            'post_id' => $post->id,
                            'alt' => $post->title
                           )
                       );
                }
                catch(\Throwable $e)
                {
                    return abort(500);
                }
              
            endforeach;
           
        }
        
       return redirect('/home')->with('success', 'Je hebt een bericht ingevoegd');
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id) ?? abort(404);
        
        $images = Image::where('post_id', $post->id)->get();
        
        foreach ($images as $image) {
            $image_path = public_path('images/posts/'.$image->url);
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }

                $image->delete();
            }

        $post->delete();
        return redirect()->back()->with('success', 'Je hebt het bericht met succes verwijderd');
    }
}
