<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Redirect;
use Auth;
use App\Post;
use App\Postimage;
use App\Postcomment;
use App\Postlike;
use App\Postdislike;
use App\Spamreport;

use App\Notifications\PostlikeNotification;
class PostsController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }


       public function createpost()
    {
        return view('front.posts.createpost');
    }

        public function storepost(Request $request)
    {
        if(Auth::check()){

	        $user = Auth::user();
	        $visible_to = $request->visible_to;
	        $body = $request->body;
	        $images = $request->image;


	        $post = Post::create([
	        	'visible_to' => $visible_to,
	        	'body' => $body,
	        	'user_id' => $user->id,
	        ]);

	        //store each image
	 if ($images) {
	        foreach ($images as $image) {
        $mfileName = \pathinfo($image, \PATHINFO_FILENAME);
        $mfileExt = $image->getClientOriginalExtension();
        $input['imagename'] = time() . '.'. $image->getClientOriginalExtension();
        $fileNameToStore = $input['imagename'];
        $path = $image->storeAs('public/users/posts', $fileNameToStore);
        $image_size =  $image->getClientSize();

        if(($image->getClientSize()  > 100022796 ))
        {
        $post->delete();
        return back()->with('success','The File your upload is greater than the allowed size');
        }else{

        $user = Auth::user();
        Postimage::create([
            'image' => $fileNameToStore,
            'image_url' => $path,
            'image_ext' => $mfileExt,
            'image_size' => $image->getClientSize(),
            'post_id' =>$post->id,
            'user_id' =>Auth::user()->id,
        ]);

        }

	        }
	    }

        return Redirect()->route('timeline');
    }else{
       return Redirect()->route('login');
    }
    }


      public function getsallposts(){
    // Fetch all records
          $tposts['data'] = Post::all();

        echo json_encode($tposts);
           exit;
     }



     public function postlike($id)
     {
        $post_id = Post::getPostId($id);
        $user_id = Auth::user()->id;

        $postlike =  new Postlike;
        $postlike->post_id = $post_id;
        $postlike->user_id = $user_id;
        $postlike->status = True;
        $postlike->save();
        if($postlike->save()){
            $post = $postlike->post;
         $post->user->notify(new PostlikeNotification($post));
            return Redirect()->back();
        }else{
            abort(404);
        }
    }

     public function unlikepost($id){
        $post_id = Post::getPostId($id);
        $user_id = Auth::user()->id;
        $postdislike =  Postlike::find($id);
        $postdislike->post_id = $post_id;
        $postdislike->user_id = $user_id;
        $postlike->status = False;
        $postdislike->save();
        if($postdislike->save()){
            $post = $postdislike->post;

         $post->user->notify(new PostlikeNotification($post));
            return Redirect()->back();
        }else{
            abort(404);
        }

     }

    //post comment
      public function storecomment(Request $request)
        {
            $validator=Validator::make($request->all(),[
            'body' => 'required',
        ]);

      if($validator->fails()){
        return back()->withErrors($validator)->withInput()->with('success',' Please Select the right Values to continue');
            }

         $comment = Postcomment::create([
                'post_id' => $request->post_id,
                'body' => $request->body,
                'user_id' => Auth::user()->id,
            ]);

        return Redirect()->back();
    }
   //Report Posts
      public function reportpost(Request $request)
        {
            $validator=Validator::make($request->all(),[
            'body' => 'required',
        ]);

      if($validator->fails()){
        return back()->withErrors($validator)->withInput()->with('success',' Please Select the right Values to continue');
            }

         $spamreport = Spamreport::create([
                'post_id' => $request->post_id,
                'body' => $request->body,
                'user_id' => $request->user_id,
            ]);

        return Redirect()->back();
    }


    //deleted Posts
    public function userdeletepost(Request $request, $id)
    {
           $post = Post::getPostId($id);
           $post = Post::Find($id);
           $post->delete();
            return Redirect()->back();
    }

    public function userhidepost(Request $request, $id)
    {
           $post = Post::getPostId($id);
           $post = Post::Find($id);
           $newstate = 'hidden';
           $post->status = $newstate;
           $post->save();
            return Redirect()->back();
    }
}
