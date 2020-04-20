
@extends('layouts.user')
@section('title', 'The best Christian Social Media Welcome'. Illuminate\Support\Str::title(Auth::user()->uname))
@section('content')

@include('front.includes.leftnav')

<div class="col-md-5"  style="background: #fff; border-radius: 8px;">

<div class="timeline-item timeline-day" style="padding: 10px;">
<div class="timeline-time">&nbsp;</div>

</div><!-- timeline-item -->
<div class="scrollbar" id="mainscroll1">
<div class="timeline-item" style="padding: 20px;"><hr>


<div class="row">
  <div class="col-md-12">
  <div class="col-md-12">
    <div style="padding: 10px; width: 100%">
   <div class="search-box1">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div><!-- search-box -->
</div>
  </div>

  </div>

    <div class="col-md-12">
    <div class="row">



@foreach($groups as $group)
  @if($group->user_id == Auth::user()->id)
   <div class="col-md-6 " style="padding: 8px;" >
    <div class="card-deck card-deck-sm mg-t-20 mg-x-0 " >
          <div class="tx-center btn-br" style="background-image: url({{ URL::to('/') }}/storage/group/banners/{{ $group->propic}});">
            <div class="card-body pd-40" style="background-color: rgba(255, 255, 255, 0.7);">
              <div class="d-flex justify-content-center mg-b-30">
                 <img style="height: 100px; width: 100px; object-position:center; object-fit: cover; border-radius: 100%" src="{{ URL::to('/') }}/storage/group/profilepictures/{{ $group->propic}}" alt="">
              </div>
              <a  href="{{ route('user.groupmember', ['id'=>$group->id ,'uname' => str_slug($group->uname)]) }}">

                <h6 class=" tx-inverse text-center " style="font-size: 14px; height: 40px; width: 150px; text-align: center ">{{ $group->uname}}</h6></a>
              <hr>

              <div class="row">
                <div class="col-md-6 col-6 ">
               <a href=""><button class="btn btn-primary btn-br btn-sm" >Delete</button></a>
              </div>
              <div class="col-md-6 col-6">
                <a href="{{ route('user.groupadmin', ['id'=>$group->id ,'uname' => str_slug($group->uname)]) }}"><button class="btn btn-primary btn-br btn-sm">Dashboard</button></a>
              </div>
             </div>

            </div><!-- card -->


          </div><!-- card -->
        </div>
      </div>

      @endif
      @endforeach


@foreach($groups as $group)
  @if($group->user_id != Auth::user()->id)
   <div class="col-md-6 " style="padding: 8px;" >
    <div class="card-deck card-deck-sm mg-t-20 mg-x-0 " >
          <div class="tx-center btn-br" style="background-image: url({{ URL::to('/') }}/storage/group/banners/{{ $group->propic}});">
            <div class="card-body pd-40" style="background-color: rgba(255, 255, 255, 0.7);">
              <div class="d-flex justify-content-center mg-b-30">
                 <img style="height: 100px; width: 100px; object-position:center; object-fit: cover; border-radius: 100%" src="{{ URL::to('/') }}/storage/group/profilepictures/{{ $group->propic}}" alt="">
              </div>
              <a  href="{{ route('user.groupadmin', ['id'=>$group->id ,'uname' => str_slug($group->uname)]) }}">

                <h6 class=" tx-inverse " style="font-size: 14px; height: 40px; width: 150px ">{{ $group->uname}}</h6></a>
              <hr>

             <div class="row">
                <div class="col-md-6 col-6 ">
               <a href=""><button class="btn btn-primary btn-br btn-sm" >Delete</button></a>
              </div>
              <div class="col-md-6 col-6">
                <a href="{{ route('user.groupadmin', ['id'=>$group->id ,'uname' => str_slug($group->uname)]) }}"><button class="btn btn-primary btn-br btn-sm">Dashboard</button></a>
              </div>
             </div>

            </div><!-- card -->


          </div><!-- card -->
        </div>
      </div>

      @endif
      @endforeach



    </div>

  </div>


</div>




  </div>


<!--------------------Latest events coming--------------------->


</div>
</div>





@include('front.includes.sidenav')


<script src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
</script>
<script>
         jQuery(document).ready(function(){
            jQuery('.comment_form').submit(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url:$('.comment_form').attr('action'),
                data:$('.comment_form').serialize(),
                type:'POST',
                accepts:'json',
                  success: function(data){
                     console.log('success');
                     if(data.success){
                        $('.comment_form').trigger('reset');
                        }else{

                    }
                  }});
               });
            });
</script>

@include('front.includes.popups')
@endsection
