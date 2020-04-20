<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Auth;
use App\Userprofile;
use App\Post;
use App\Postimage;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        return redirect()->route('welcomeuser');
    }

      public function welcomeuser()
    {
        return view('welcome');
    }


      public function timeline()
    {
        if(Auth::check()){
        if( Auth::user()->Userprofile()->exists()){
        } else{
        $user_id = Auth::user()->id;
        $banner = 'def.jpg';
        $propicmale = 'defmale.jpg';
        $propicfemale = 'deffemale.jpg';
        $userinfo = new Userprofile;
        $userinfo->user_id = $user_id;
        if(Auth::user()->sex == 'male'){
            $userinfo->propic = $propicmale;
         }
        elseif(Auth::user()->sex == 'female'){
            $userinfo->propic = $propicfemale;
         }
        $userinfo->banner = $banner;
        $userinfo->save();
        }
        $posts = Post::where('status','visible')->get();
        return view('front.timeline.timeline', compact(['posts']));
      }
    }

  public function loadmoredata(Request $request)
    {
        $output = '';
        $id = $request->id;
        $posts = DB::table('posts')->where('id','<',$id)->orderBy('id', 'desc')->limit(1)->get();
        if(!$posts->isEmpty())
        {
        foreach($posts as $post)
        {
        $id = $post->id;
        $created_at=$post->created_at;
        $linkurl = url($post->job_title);
        $output .= '<div class="post-aply mr-bt">
        <div class="job-aply-hed">
        <h1><a href="'.$linkurl.'">'.$post->title.'</a></h1>
        <p>'.$post->body.'</p>
        </div>
        </div>';
        }
        $output .= '<div id="remove-row" class="text-center">
        <button id="btn-more" data-id="'.$post->id.'" class="loadmore-btn text-center">Load More</button>
        </div>';
        echo $output;
        }
    }

    //notifications
    //mark as read

    public function markNotificationAsRead(){
     Auth::user()->unreadNotifications()->markAsRead();
    }
}

