<?php

namespace App\Http\Controllers\music;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Auth;
use Redirect;
use App\Album;
use App\Albumcat;
use App\Albumtrack;
use App\Post;
use App\Postimage;
class AlbumController extends Controller
{

       public function __construct()
    {
        $this->middleware('auth:music');
    }


    public function musicalbums(){
        Auth::guard('music')->check();
       $albumcats = Albumcat::all();
       $albums = Album::all();

    	return view('music.album.albums', compact(['albumcats','albums']));
    }

      public function musicalbumdetails(Request $request, $id){

       $albumdetails = Album::Find($id);
       return view('music.album.albumdetails', compact(['albumdetails']));
    }










         public function createalbum(Request $request)
    {
          if(Auth::check()){
            $validator=Validator::make($request->all(),[
            'albumcover' => 'required|image',
            'name' => 'required',
            'about' => 'required',
           'albumcat_id' => 'required',
           'release_date' => 'required',
        ]);

            if($validator->fails()){
            return back()->withErrors($validator)->withInput()->with('success','Something wrong with the Inputs your Inserting. Check again');}
        $mfileNameText = $request->file('albumcover');
        $mfileName = \pathinfo($mfileNameText, \PATHINFO_FILENAME);
        $mfileExt = $request->file('albumcover')->getClientOriginalExtension();
        $input['imagename'] = time() . '.'. $mfileNameText->getClientOriginalExtension();
        $fileNameToStore = $input['imagename'];
        $path = $request->file('albumcover')->storeAs('public/music/albums/covers/', $fileNameToStore);
        $music_id = Auth::guard('music')->user()->id;
        $album = New Album;
        $album ->name = $request->name;
        $album ->about = $request->about;
        $album ->link = $request->link;
        $album ->price = $request->price;
        $album ->release_date = $request->release_date;
        $album ->albumcat_id = $request->albumcat_id;
        $album ->music_id = $music_id;
        $album ->albumcover = $fileNameToStore;
        $album ->albumcover_url = $path;
        $album ->albumcover_ext = $mfileExt;
        $album ->albumcover_size = $request->file('albumcover')->getClientSize();
        $album ->save();

        return redirect()->back()->with('success','Your Ablum has been Created. Add Songs and Publish it');
   		 }
	}


             public function createtrack(Request $request)
    {
          if(Auth::check()){
            $validator=Validator::make($request->all(),[
            'trackcover' => 'required|image',
            'title' => 'required',
            'about' => 'required',
            'release_date' => 'required',
            'albumtrack' => 'required',
        ]);

        if($validator->fails()){
        return back()->withErrors($validator)->withInput()->with('success','Something wrong with the Inputs your Inserting. Check again');}
        $mfileNameText = $request->file('albumtrack');
        $mfileName = \pathinfo($mfileNameText, \PATHINFO_FILENAME);
        $mfileExt = $request->file('albumtrack')->getClientOriginalExtension();
        $input['imagename'] = time() . '.'. $mfileNameText->getClientOriginalExtension();
        $fileNameToStore = $input['imagename'];
        $pathaudio = $request->file('albumtrack')->storeAs('public/music/albums/tracks', $fileNameToStore);
        $music_id = Auth::guard('music')->user()->id;


        $image = $request->file('trackcover');
        $input['imagename'] = time() . '.'. $image->getClientOriginalExtension();
        $fileimageNameToStore = $input['imagename'];
        $path = $request->file('trackcover')->storeAs('public/music/albums/covers', $fileimageNameToStore);
        $music_id = Auth::guard('music')->user()->id;

        $albumtrack = New Albumtrack;
        $albumtrack ->title = $request->title;
        $albumtrack ->about = $request->about;
        $albumtrack ->price = $request->price;
        $albumtrack ->release_date = $request->release_date;
        $albumtrack ->album_id = $request->album_id;
        $albumtrack ->music_id = $music_id;
        $albumtrack ->trackcover = $fileimageNameToStore;
        $albumtrack ->albumtrack = $fileNameToStore;
        $albumtrack ->albumtrack_url = $pathaudio;
        $albumtrack ->albumtrack_ext = $mfileExt;
        $albumtrack ->albumtrack_size = $request->file('albumtrack')->getClientSize();
        $albumtrack ->save();

         if(empty($request->price)){
                  $visible_to = 'public';
           $post =  Post::create([
                    'visible_to' => $visible_to,
                    'body' => $request->about,
                    'music_id' =>Auth::guard('music')->user()->id,
            ]);

        $image1 = $request->file('albumtrack');
        $mfileNameText1 = $request->file('albumtrack');
        $mfileName1 = \pathinfo($image1, \PATHINFO_FILENAME);
        $mfileExt1 = $image1->getClientOriginalExtension();
        $input1['imagename'] = time() . '.'. $image1->getClientOriginalExtension();
        $fileNameToStore1 = $input1['imagename'];
        $path1 = $image1->storeAs('public/users/posts', $fileNameToStore1);
        Postimage::create([
            'image' => $fileNameToStore1,
            'image_url' => $path1,
            'image_ext' => $mfileExt1,
            'image_size' => $image1->getClientSize(),
            'post_id' =>$post->id,
            'music_id' =>Auth::guard('music')->user()->id,
        ]);


        $image2 = $request->file('trackcover');
        $mfileNameText2 = $request->file('albumtrack');
        $mfileName2 = \pathinfo($image2, \PATHINFO_FILENAME);
        $mfileExt2 = $image2->getClientOriginalExtension();
        $input2['imagename'] = time() . '.'. $image2->getClientOriginalExtension();
        $trackcover = $input2['imagename'];
        $path2 = $image2->storeAs('public/users/posts', $trackcover);

           Postimage::create([
            'image' => $trackcover,
            'image_url' => $path2,
            'image_ext' => $mfileExt2,
            'image_size' => $image2->getClientSize(),
            'post_id' =>$post->id,
            'music_id' =>Auth::user()->id,
        ]);


        }
return redirect()->back()->with('success','Your Ablum has been Created. Add Songs and Publish it');

     }


    }
}
