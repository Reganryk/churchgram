@extends('layouts.church')
@section('title', 'Welcome '.  Auth::user()->name )
@section('content')
<div class="churchgram-mainpanel">
      <div class="container">
        <div class="churchgram-pageheader">
          <ol class="breadcrumb churchgram-breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
          </ol>
          <h6 class="churchgram-pagetitle">@yield('title')</h6>
        </div><!-- churchgram-pageheader -->

        <div class="row row-xs">
          <div class="col-sm-6 col-lg-3">
            <div class="card card-status">
              <div class="media">
                <i class="icon ion-ios-cloud-download-outline tx-purple"></i>
                <div class="media-body">
                  <h1>32,604</h1>
                  <p>Total downloads</p>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
            <div class="card card-status">
              <div class="media">
                <i class="icon ion-ios-bookmarks-outline tx-teal"></i>
                <div class="media-body">
                  <h1>17,583</h1>
                  <p>Total bookmarks</p>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
            <div class="card card-status">
              <div class="media">
                <i class="icon ion-ios-cloud-upload-outline tx-primary"></i>
                <div class="media-body">
                  <h1>61,119</h1>
                  <p>Total uploads</p>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
            <div class="card card-status">
              <div class="media">
                <i class="icon ion-ios-analytics-outline tx-pink"></i>
                <div class="media-body">
                  <h1>2,942</h1>
                  <p>Total analytics</p>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->
        <hr>
        <div class="manager-wrapper " id="accordion"  class="accordion-one"  role="tablist" aria-multiselectable="true">
          <div class="manager-right collapse show" id="collapseOne"  role="tabpanel" aria-labelledby="headingOne">
            <label class="section-label">Today</label>
            <div class="file-group">
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-image-o"></i>
                    <a href="">IMG_12292017.jpg</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">123kb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">20 minutes ago</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href=""><i class="icon ion-more"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-image-o"></i>
                    <a href="">IMG_12292016.jpg</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">204kb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">1 hour ago</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href=""><i class="icon ion-more"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-pdf-o"></i>
                    <a href="">Getting_Started.pdf</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">31kb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">2 hours ago</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href=""><i class="icon ion-more"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
            </div><!-- file-group -->

            <label class="section-label mg-t-25">Yesterday</label>
            <div class="file-group">
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-video-o"></i>
                    <a href="">VID_12122017.jpg</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">2.2mb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">Dec 22, 2017</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href=""><i class="icon ion-more"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-pdf-o"></i>
                    <a href="">Instructions.pdf</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">42kb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">Dec 22, 2017</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href=""><i class="icon ion-more"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-pdf-o"></i>
                    <a href="">Documentation.pdf</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">61kb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">Dec 22, 2017</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href=""><i class="icon ion-more"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-sound-o"></i>
                    <a href="">Welcome.mp3</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">1.2mb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">Dec 22, 2017</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href=""><i class="icon ion-more"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
            </div><!-- file-group -->

            <label class="section-label mg-t-25">December 21, 2017</label>
            <div class="file-group">
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-video-o"></i>
                    <a href="">VID_12122017.jpg</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">2.2mb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">Dec 21, 2017</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href=""><i class="icon ion-more"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-pdf-o"></i>
                    <a href="">Instructions.pdf</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">42kb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">Dec 21, 2017</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href=""><i class="icon ion-more"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-pdf-o"></i>
                    <a href="">Documentation.pdf</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">61kb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">Dec 21, 2017</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href=""><i class="icon ion-more"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-sound-o"></i>
                    <a href="">Welcome.mp3</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">1.2mb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">Dec 21, 2017</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href=""><i class="icon ion-more"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
            </div><!-- file-group -->

            <div class="load-more-wrapper mg-t-25">
              <a href="">Load more</a>
            </div><!-- load-more-wrapper -->
          </div><!-- manager-right -->


          <div class="manager-left">
            <a href="" data-toggle="modal" data-target="#createtithetype" class="btn btn-contact-new">Create Tithe Type</a>
            <nav class="nav">
              <a href="" class="nav-link active">
                <span>All Tithe types</span>
                <span></span>
              </a>
              @foreach($tithetypes as $type)
              <a href="" role="tab" id="{{ $type->id }}tithe" class="nav-link">
                <span>{{ $type->title }}</span>
                <span>{{ $type->tithe->count() }}</span>
              </a>
              @endforeach

            </nav>

          </div><!-- manager-left -->
        </div><!-- manager-wrapper -->



            <div id="createtithetype" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Create Tithe Type</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form class="createtithetype" action="{{ route('createtithetype')}}" method="POST">
          	{{ csrf_field() }}
          <div class="modal-body pd-25">
            <h5 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Creating Tithe Type helps you sort your Tithe better</a></h5>
            	<input type="text" class="form-control" name="title" placeholder="Type Title">
            	<hr>
            	<input type="text" name="about" class="form-control" placeholder="About Tithe Type">
          </div>
          <div class="modal-footer">
            <button  type="submit" class="btn btn-primary">Save changes</button>
            <button  class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
           </form>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->


<script type="text/javascript">

     jQuery(document).ready(function(){
            jQuery('.createtithetype').submit(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url:$('.createtithetype').attr('action'),
                data:$('.createtithetype').serialize(),
                type:'POST',
                accepts:'json',
                  success: function(data){
                     console.log('success');
                     if(data.success){
                        $('.createtithetype').trigger('reset');
                        }else{
                      $('.createtithetype').modal('toggle');

                    }
                  }});
               });
            });

</script>

@endsection
