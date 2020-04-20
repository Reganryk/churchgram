



@if(!is_null($post->user_id))
    <div id="{{ $post->id }}}report" class="modal fade effect-scale">
      <div class="modal-dialog " style="width: 100%" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
          <div class="modal-body pd-0">
            <div class="row no-gutters">

              <div class="col-lg-12 bg-white br-2">
                <div class="pd-y-30 pd-xl-x-30">
                  <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <form class="reportpost" action="{{ route('reportpost')}}" method="Post" >
                	{{ csrf_field() }}
                  <div class="pd-x-30 pd-y-10">
                    <h5 class="tx-gray-800 tx-normal mg-b-5">Report {{ $post->user->uname}}'s Post</h5>
                    <br>
                     <div class="form-group">
                     	<input type="hidden" name="post_id" value="{{ $post->id }}">
                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                      <textarea type="text" name="body" class="form-control pd-y-12" placeholder="Why are you Reporting thi Post"></textarea>
                    </div><!-- form-group -->
                   <button class="btn btn-outline-secondary btn-teal btn-block mg-b-10"><i class="fa fa-paper-plane mg-r-5"></i>Report Post </button>
                  </div>
				</form>
                </div><!-- pd-20 -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
@elseif(!is_null($post->group_id))

@elseif(!is_null($post->church_id))

@elseif(!is_null($post->music_id))

  <div id="{{ $post->id }}}report" class="modal fade effect-scale">
      <div class="modal-dialog " style="width: 100%" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
          <div class="modal-body pd-0">
            <div class="row no-gutters">

              <div class="col-lg-12 bg-white br-2">
                <div class="pd-y-30 pd-xl-x-30">
                  <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <form class="reportpost" action="{{ route('reportpost')}}" method="Post" >
                	{{ csrf_field() }}
                  <div class="pd-x-30 pd-y-10">
                    <h5 class="tx-gray-800 tx-normal mg-b-5">Report {{ $post->music->uname}}'s Post</h5>
                    <br>
                     <div class="form-group">
                     	<input type="hidden" name="post_id" value="{{ $post->id }}">
                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                      <textarea type="text" name="body" class="form-control pd-y-12" placeholder="Why are you Reporting thi Post"></textarea>
                    </div><!-- form-group -->
                   <button class="btn btn-outline-secondary btn-teal btn-block mg-b-10"><i class="fa fa-paper-plane mg-r-5"></i>Report Post </button>
                  </div>
				</form>
                </div><!-- pd-20 -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

@endif

    <script type="text/javascript">

$(document).ready(function(){
//services request ajax input
    var $reportpost = $('.reportpost')
    $reportpost.submit(function(event){
        event.preventDefault()
        console.log("Working working")
        var form = $(this);
        var actionUrl= form.attr("action");
        var httpmethod= form.attr("method");
        var formdata = form.serialize();
         $.ajax({
          url:actionUrl,
          method:httpmethod,
          data:formdata,
          success: servsuccess,
          error: serverror,
      })

    })
//Handle Erorr and Success
    function servsuccess(data, textStatus, jqXHR){
        $reportpost[0].reset();
        console.log(data)
        console.log(textStatus)
        console.log(jqXHR)

    }

    function serverror(jqXHR, textStatus, errorThrown){
        alert("The information your sending was not sent. Please Try again")
        console.log(jqXHR)
        console.log(textStatus)
        console.log(errorThrown)
    }
});
    </script>
