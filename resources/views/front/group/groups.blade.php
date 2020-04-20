
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
    <div class="col-md-6 col-6">
    <div class="card-deck card-deck-sm mg-t-20 mg-x-0 ">
          <div class="card tx-center btn-br">
            <div class="card-body pd-40">
              <div class="d-flex justify-content-center mg-b-30">
                 <img style="height: 100px; width: 100px; object-position:center; object-fit: cover; border-radius: 100%" src="{{ URL::to('/') }}/storage/group/profilepictures/{{ $group->propic}}" alt="">
              </div>
              <a href="{{ route('user.groupmember', ['id'=>$group->id ,'uname' => str_slug($group->uname)]) }}"><h5 class="tx-md-20 tx-inverse " style="font-size: 18px;">{{ $group->uname}}</h5></a>



          <div class="row">
            <style type="text/css">
              .sharebar div{
                padding: 7px;

              }

              .sharebar a{
                border-radius: 8px;

              }

            </style>

            <div class="col-md-6 col-lg-4 mg-t-20 mg-md-t-0 sharebar" style="display: flex; padding: 5px; ">

                <div><a href="#sharegroup" data-toggle="modal" data-target="#sharegroup"   style="color:#1B84E7; " class="btn-primary btn-br"><div ><i class="fa fa-book"></i></div></a></div>
                <div><a href="#blockgroup" data-toggle="modal" data-target="#blockgroup"  style="color:#DC3545; " class="btn-info btn-br"><div><i class="fa fa-twitter"></i></div></a></div>
                <div><a href="#joingroup" data-toggle="modal" data-target="#joingroup"  style="color:#4B0082; " class=" btn-danger btn-br"><div><i class="fa fa-google-plus"></i></div></a></div>
                <div><a href="#leavemsggroup" data-toggle="modal" data-target="#leavemsggroup"  style="color:blue; " class=" btn-dark btn-br"><div><i class="fa fa-comment"></i></div></a></div>


            </div><!-- col-5 -->
          </div><!-- row -->
            </div><!-- card -->


          </div><!-- card -->
        </div>
      </div>
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
